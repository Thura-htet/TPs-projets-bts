//
// Created by SLAB45 on 15/11/2023.
//

#include <iostream>
#include "spool.h"

Spool::Spool(int iNum, double dNumber, double dNumberOfPriorJob) {
    First = nullptr;
    Last = nullptr;
};

void Spool::getDataOnSpool(int i)
{
    Job* cursor = First;
    Spool* spool = this;

    std::cout << "Numero : " << spool->iNum << std::endl;
    std::cout << "Nombre de job dans la liste : " << spool->dNumber << std::endl;
    std::cout << "Nombre de job prioritaire : " << spool->dNumberOfPriorJob << std::endl;
    std::cout << "Premier job : " << spool->First << std::endl;
    std::cout << "Dernier job : " << spool->Last << std::endl;
    std::cout << std::endl;

    while (cursor)
    {
        std::cout << "Numero : " << cursor->getNumOfJob() << std::endl;
        std::cout << "Libelle : " << cursor->getLibelle() << std::endl;
        std::cout << "Prioritaire : " << (cursor->getPrior() ? "Oui" : "Non") << std::endl;
        std::cout << std::endl;
        cursor = cursor->getFollow();
    }
}

double Spool::getNumberOfSpool()
{
    return this->dNumber;
}

void Spool::addJobInSpool(Job &a)
{
    if (First == nullptr)
    {
        First = &a;
        Last = &a;
    }
    else if (a.getPrior())
    {
        Job* cursor = First;
        // if curosr is not priority job
        if (!First->getPrior())
        {
            this->First = &a;
            a.setFollow(cursor);
            cursor->setPrevious(a);
            dNumberOfPriorJob++;
            dNumber++;
            return;
        }
        // get to the last priority job
        // !!! this part got done in the wrong order
        while (cursor && cursor->getPrior())
        {
            cursor = cursor->getFollow();
        }
        // cursor is now last priority
        // therefore...
        // Job* firstNonPriority = cursor->getFollow();
        Job* firstNonPriority = cursor->getFollow();
        a.setFollow(firstNonPriority);
        firstNonPriority->setPrevious(a);

        cursor->setFollow(a);
        a.setPrevious(cursor);
        // don't I need to put a behind the last priority Job?
        dNumberOfPriorJob++;
    }
    else
    {
        Last = &a;
        // need to follow the first node and then set the follow

        Job* cursor = First;
        // get to the last node
        while (cursor)
        {
            if (!cursor->getFollow())
            {
                cursor->setFollow(&a);
                break;
            }
            cursor = cursor->getFollow();
        }
        // a.setPrevious(&a); // this is where the indefinite loop happens
    }
    dNumber++;
}
//
// Created by SLAB45 on 08/11/2023.
//

#include <iostream>
#include "job.h"

using std::string;

Job::Job(int iNum, string strLib, bool bPrior)
{
    this->iNum = iNum;
    this->strLib = strLib;
    this->bPrior = bPrior;
}

void Job::getDataOnJob(int i)
{
    Job* current = this;
    Job* cursor = this;
    // search backwards
    while (cursor)
    {
        if (cursor->getNumOfJob() == i)
        {
            std::cout << "Numéro : " << cursor->iNum << std::endl;
            std::cout << "Libellé : " << cursor->strLib << std::endl;
            std::cout << "Prioritaire : " << (cursor->bPrior ? "Oui" : "Non") << std::endl;
            return;
        }
        cursor = cursor->Previous;
    }

    // search forwards
    cursor = current;
    while (cursor)
    {
        if (cursor->getNumOfJob() == i)
        {
            std::cout << "Numéro : " << cursor->iNum << std::endl;
            std::cout << "Libellé : " << cursor->strLib << std::endl;
            std::cout << "Prioritaire : " << (cursor->bPrior ? "Oui" : "Non") << std::endl;
            return;
        }
        cursor = cursor->Follow;
    }

    // if not found
    std::cout << "Travail avec le numéro " << i << " non trouvé." << std::endl;
}

void Job::setPrevious(Job* a)
{
    // why not Previous = &a;
    Previous = a;
}

void Job::setPrevious(Job& a)
{
    Previous = &a;
}

void Job::setFollow(Job* a)
{
    Follow = a;
}

void Job::setFollow(Job& a)
{
    Follow = &a;
}

Job* Job::getPrevious()
{
    return Previous;
}

std::string Job::getLibelle()
{
    return strLib;
}

int Job::getNumOfJob()
{
    return iNum;
}

Job* Job::getFollow()
{
    return Follow;
}

bool Job::getPrior()
{
    return bPrior;
}
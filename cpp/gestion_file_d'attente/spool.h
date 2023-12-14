//
// Created by SLAB45 on 15/11/2023.
//

#ifndef GESTION_FILE_D_ATTENTE_SPOOL_H
#define GESTION_FILE_D_ATTENTE_SPOOL_H

#include "job.h"


class Spool {
private:
    int iNum;
    double dNumber;
    double dNumberOfPriorJob;
    Job* First;
    Job* Last;
public:
    static double dNumberOfSpool;

    double getNumberOfSpool();
    explicit Spool(int iNum=0, double dNumber=0, double dNumberOfPriorJob=0);
    void getDataOnSpool(int i);
    void addJobInSpool(Job &a);
};




#endif //GESTION_FILE_D_ATTENTE_SPOOL_H

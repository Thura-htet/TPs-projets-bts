//
// Created by SLAB45 on 08/11/2023.
//

#ifndef GESTION_FILE_D_ATTENTE_JOB_H
#define GESTION_FILE_D_ATTENTE_JOB_H


#pragma once  // Garantit l'inclusion unique du fichier d'en-tête
using std::string;

class Job {
private:
    int iNum;
    bool bPrior;
    std::string strLib;
    Job* Previous;
    Job* Follow;

public:
    explicit Job(int iNum = 0, string strLib = "", bool bPrior = false);
    std::string getLibelle();
    void getDataOnJob(int i);
    void setPrevious(Job* a);
    void setPrevious(Job& a);
    void setFollow(Job* a);
    void setFollow(Job& a);
    Job* getPrevious();
    int getNumOfJob();
    Job* getFollow();
    bool getPrior();
};


#endif //GESTION_FILE_D_ATTENTE_JOB_H

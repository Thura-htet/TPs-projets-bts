//
// Created by SLAB45 on 06/12/2023.
//

#ifndef TP_29_11_SOCIETE_H
#define TP_29_11_SOCIETE_H

#include "personne.h"
using std::string;

class personne;

class societe {
private :
    string raisonSociale{};
    string statutJuridique{};
    double CA{};
    int effectif{};
    personne* * lesSalaries;
    int nbSalaries{};

public :
    societe(string raisonSociale = "", string statutJuridique = "", double CA = 0, int effectif = 0);
    void affiche();
    void setSalarie(personne *p);
    ~societe();
};


#endif //TP_29_11_SOCIETE_H

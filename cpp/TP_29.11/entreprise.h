//
// Created by SLAB45 on 06/12/2023.
//

#ifndef TP_29_11_ENTREPRISE_H
#define TP_29_11_ENTREPRISE_H

#include <iostream>
using std::string;
#include "personne.h"

class entreprise {
private :
    string raisonSociale{};
    string statutJuridique{};
    double CA{};
    int effectif{};
    personne * lesSalaries;
    int nbSalaries{};

public :
    entreprise(string raisonSociale = "", string statutJuridique = "", double CA = 0, int effectif = 0);
    void affiche();
    void setSalarie(personne p);
    ~entreprise();
};


#endif //TP_29_11_ENTREPRISE_H

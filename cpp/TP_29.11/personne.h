//
// Created by SLAB45 on 29/11/2023.
//

#ifndef TP_29_11_PERSONNE_H
#define TP_29_11_PERSONNE_H

#include <iostream>
#include <string>
#include "societe.h"

class societe;

class personne {
private:
    int insee{};
    std::string nom;
    int age{};
    societe * employeur;

public:
    explicit personne(int insee = 0, std::string nom = "", int age = 0);
    void afficher();
    int getINSEE();
    void setINSEE(int n);
    std::string getNom();
    void setNom(std::string nom);
    int getAge();
    void setAge(int age);
    void setEmployeur(societe * s);
    ~personne();
};


#endif //TP_29_11_PERSONNE_H

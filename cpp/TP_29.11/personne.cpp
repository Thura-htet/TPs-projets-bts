//
// Created by SLAB45 on 29/11/2023.
//

#include <iostream>
#include <utility>
#include "personne.h"

#include <string>

personne::personne(int insee, std::string nom, int age)
{
    this->insee = insee;
    this->nom = nom;
    this->age = age;
}

void personne::afficher()
{
    std::cout << "Numero INSEE : " << this->getINSEE() << "\n";
    std::cout << "Nom : " << this->getNom() << "\n";
    std::cout << "Age : " << this->getAge() << "\n" << "\n";
}

int personne::getINSEE()
{
    return this->insee;
}

void personne::setINSEE(int n)
{
    this->insee = n;
}

std::string personne::getNom()
{
    return this->nom;
}

void personne::setNom(std::string newNom)
{
    this->nom = std::move(newNom);
}

int personne::getAge()
{
    return this->age;
}

void personne::setAge(int newAge)
{
    this->age = newAge;
}

void personne::setEmployeur(societe * s)
{
    this->employeur = s;
}

personne::~personne() = default;
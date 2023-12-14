//
// Created by SLAB45 on 06/12/2023.
//

#include "entreprise.h"

entreprise::entreprise(string raisonSociale, string statutJuridique, double CA, int effectif)
{
    this->raisonSociale = raisonSociale;
    this->statutJuridique = statutJuridique;
    this->CA = CA;
    this->effectif = effectif;
    this->lesSalaries = new personne[effectif];
    this->nbSalaries = 0;
}

void entreprise::affiche()
{
    {
        std::cout << "Raison Sociale : " << this->raisonSociale << "\n";
        std::cout << "Statut juridique : " << this->statutJuridique << "\n";
        std::cout << "CA : " << this->CA << "\n";
        std::cout << "Effectif : " << this->effectif << "\n" << "\n";

        for (int i = 0; i < this->effectif; i++)
        {
            this->lesSalaries[i].afficher();
        }
    }
}

void entreprise::setSalarie(personne p)
{
    this->lesSalaries[this->nbSalaries] = p;
    this->nbSalaries++;
}

entreprise::~entreprise() = default;

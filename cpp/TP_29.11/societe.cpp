//
// Created by SLAB45 on 06/12/2023.
//

#include "societe.h"
#include "personne.h"

societe::societe(string raisonSociale, string statutJuridique, double CA, int effectif)
{
    this->raisonSociale = raisonSociale;
    this->statutJuridique = statutJuridique;
    this->CA = CA;
    this->effectif = effectif;
    this->nbSalaries = 0;
}

void societe::affiche()
{
    {
        std::cout << "Raison Sociale : " << this->raisonSociale << "\n";
        std::cout << "Statut juridique : " << this->statutJuridique << "\n";
        std::cout << "CA : " << this->CA << "\n";
        std::cout << "Effectif : " << this->effectif << "\n" << "\n";

        for (int i = 0; i < this->effectif; i++)
        {
            this->lesSalaries[i]->afficher();
        }
    }
}

void societe::setSalarie(personne *p)
{
    this->lesSalaries[this->nbSalaries] = p;
    this->nbSalaries++;
}

societe::~societe() = default;

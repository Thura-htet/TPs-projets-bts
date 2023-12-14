#include <iostream>
#include <string>
#include "personne.h"
#include "entreprise.h"

/*
class Personne
{
private:
    int insee{};
    std::string nom;
    int age{};

public:
    explicit Personne(int insee = 0, std::string nom = "", int age = 0) {}

    void afficher()
    {
        std::cout << "N° INSEE : " << this->getINSEE();
        std::cout << "Nom : " << this->getNom();
        std::cout << "Age : " << this->getAge();
    }

    int getINSEE()
    {
        return this->insee;
    }

    std::string getNom()
    {
        return this->nom;
    }

    void setNom(std::string newNom)
    {
        this->nom = newNom;
    }

    int getAge()
    {
        return this->age;
    }

    void setAge(int newAge)
    {
        this->age = newAge;
    }
};
 */

int main() {
    std::cout << "Hello, World!" << std::endl;
    personne P1 = personne();
    personne P2(12345, "toto", 30);
    personne P3(67899, "titi", 25);


    P1.afficher();
    P2.afficher();

    entreprise E1("GOOGLE", "SA", 10000, 10);

    E1.setSalarie(P1);
    E1.setSalarie(P2);

    E1.affiche();

    societe * S1 = new societe("GOOGLE", "SA", 10000, 10);

    personne * e1 = new personne();
    personne * e2 = new personne(12345, "toto", 30);
    personne * e3 = new personne(67899, "titi", 25);

    S1->setSalarie(e1);
    S1->setSalarie(e2);
    S1->setSalarie(e3);

    e1->setEmployeur(S1);
    e2->setEmployeur(S1);
    e3->setEmployeur(S1);

    S1->affiche();

    e1->afficher();
    e2->afficher();
    e3->afficher();

    return 0;
}

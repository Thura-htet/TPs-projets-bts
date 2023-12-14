<?php
declare(strict_types=1);
require_once "etreVivant.php";
require_once "animal_nageur.php";
require_once "animal_volant.php";

class Canard extends EtreVivant implements AnimalNageur, AnimalVolant
{
    public string $couleur;

    public function __construct(string $couleur)
    {
        $this->setCouleur($couleur);
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function cancaner():void
    {
        echo "Coin Coin Coin <br>";
    }

    public function nager(): void
    {
        echo "Bonjour, je sais nager grâce à mes pattes palmées. <br>";
    }

    public function voler():void
    {
        echo "Bonjour, je sais  voler jusqu'à 100km. <br>";
    }
}
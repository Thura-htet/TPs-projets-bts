<?php
declare(strict_types=1);
require_once "etreVivant.php";
require_once "animal_coureur.php";
require_once "animal_nageur.php";

class EtreHumain extends EtreVivant implements AnimalCoureur, AnimalNageur
{
    public string $prenom;

    public function __construct(string $prenom)
    {
        $this->setPrenom($prenom);
    }

    public function getPrenom():string
    {
        return $this->prenom;
    }

    public function setPrenom($prenom):void
    {
        $this->prenom = $prenom;
    }

    public function rire():void
    {
        echo "HA HA HA <br>";
    }

    public function courir():void
    {
        echo "Bonjour, je sais courir. <br>";
    }

    public function nager():void
    {
        echo "Bonjour, je sais nager 4 nages différents. <br>";
    }
}
<?php

namespace Model\Joueur;
class Joueur
{
    static int $NbJoueur = 0;

    public function __construct()
    {
        $this->CompteJoueur(); // but you can call a static function from $this??? wtf?
        //self::CompteJoueur();
    }

    public function getNbJoueur(): int
    {
        return self::$NbJoueur;
    }

    private static function CompteJoueur(): void
    {
        self::$NbJoueur = self::$NbJoueur + 4;
    }
}
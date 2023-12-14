<?php
require('Model/joueur.php');
require_once('Model/Joueur/Joueur.php');
// require('Model/model.php');


function MonTpClassJoueur()
{
    $joueur1 = new Joueur();
    $joueur2 = new Joueur();
    $joueur3 = new Joueur();

    $joueur4 = new Model\Joueur\Joueur();
    $joueur5 = new Model\Joueur\Joueur();
    $joueur6 = new Model\Joueur\Joueur();

    echo "NbJoueur de joueur1 : " . $joueur1->getNbJoueur() . "<br>" .
        "NbJoueur de joueur2 : " . $joueur2->getNbJoueur() . "<br>" .
        "NbJoueur de joueur3 : " . $joueur3->getNbJoueur() . "<br>";

    echo "NbJoueur de joueur4 : " . $joueur4->getNbJoueur() . "<br>" .
        "NbJoueur de joueur5 : " . $joueur5->getNbJoueur() . "<br>" .
        "NbJoueur de joueur6 : " . $joueur6->getNbJoueur() . "<br>";
    // "NbJoueur de la classe Joueur : " . new Joueur()->getNbJoueur();
}
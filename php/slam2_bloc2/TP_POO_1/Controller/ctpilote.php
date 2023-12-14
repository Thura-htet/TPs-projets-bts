<?php
require('Model/pilote.php');
require('Model/model.php');

function MonTPClassPilote()
{
    /*
    $Pilote1 = new Pilote();
    $Pilote1->prenom = "Whatever";
    $Pilote1->nom = "Nevermind";
    $Pilote1->setDatenaissance(1991, 9, 24);
    $Pilote1->SePresenter();
    */

    $Pilote2 = new Pilote('jshdf', 'mksmdk', 'H', 20, 2003, 9, 3);
    $Pilote2->SePresenter();
}
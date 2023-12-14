<?php
// require('Model/pilote.php');
// require('Model/model.php');

function MonTPClassPilote()
{
    /*
    $Pilote1 = new Pilote();
    $Pilote1->prenom = "Whatever";
    $Pilote1->nom = "Nevermind";
    $Pilote1->setDatenaissance(1991, 9, 24);
    $Pilote1->SePresenter();
    */


    $pilote1 = new Pilote('jshdf', 'mksmdk', 'H', 20, 2003, 9, 3);
    $pilote1->SePresenter();

    $pilote3 = clone($pilote1);
    $pilote3->SePresenter();

    $pilote2 = $pilote1;
    $pilote2->SePresenter();
    $pilote2->nom = 'badadada';
    $pilote2->SePresenter();
    $pilote1->SePresenter();
}

function LoadOnePilote()
{
    $model = new Model();
    $pilote_donnees = $model->GetOnePilote(1)->fetch(PDO::FETCH_ASSOC);
    $pilote = new Pilote($pilote_donnees);
    $pilote->SePresenter();
}
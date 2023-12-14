<?php
// require('Model/pilote.php');
// require('Model/model.php');

function LoadOnePilote():void
{
    // $model = new Model();
    $piloteDAO = new PiloteDAO();
    $pilote_donnees = $piloteDAO->GetOnePilote(1)->fetch(PDO::FETCH_ASSOC);
    $pilote = new Pilote($pilote_donnees, 800);
    $pilote->SePresenter();
}

function LoadAllPilote():void
{
    $piloteDAO = new PiloteDAO();
    $pilotes = $piloteDAO->GetAllPilote();
    foreach($pilotes->fetchAll() as $pilote)
    {
        echo '<p>'
            . 'Nom : ' . htmlspecialchars($pilote['nom']) . '  |  '
            . ' Prenom : ' . htmlspecialchars($pilote['prenom']) . '  |  '
            . ' Date naissance : ' . htmlspecialchars($pilote['datenaissance']) . '  |  '
            . ' Date de licence : ' . htmlspecialchars($pilote['datelicenced']);
    }
    $pilotes->closeCursor();
}
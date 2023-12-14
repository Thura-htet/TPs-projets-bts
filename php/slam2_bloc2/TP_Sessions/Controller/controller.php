<?php
require('Model/model.php');

function Login($nom, $prenom)
{
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;

    if (!isset($_COOKIE['nom']) && !isset($COOKIE['prenom']))
    {
        setcookie('nom', $nom, time() + 60, '/', "", false, true);
        setcookie('prenom', $prenom, time() + 60, '/', "", false, true);
    }
    /*
    elseif (isset($_COOKIE['nom']) && isset($COOKIE['prenom']))
    {
        $message = "Content de vous revoir " . $_COOKIE['nom'] . " " . $_COOKIE['prenom'] . " !";
    }
    */
    require('View/connexionView.php');
}
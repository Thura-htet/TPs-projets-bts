<?php

require('Model/model.php');
require('Controller/ctPilote.php');
require('Controller/ctJoueur.php');

require_once('Autoload.php');
Autoloader::register();

if (isset($_GET['action']))
{
    if ($_GET['action'] == 'AfficherNbJoueur')
    {
        MonTpClassJoueur();
    }
    elseif ($_GET['action'] == 'LoadOnePilote')
    {
        LoadOnePilote();
    }
}
else
{
    require('menuprincipal.php');
}
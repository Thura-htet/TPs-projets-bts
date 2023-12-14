<?php

require('Model/model.php');
require('Controller/controller.php');
require('Controller/ctPilote.php');
require('Controller/ctJoueur.php');
require('Controller/ctInterface.php');

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
    elseif ($_GET['action'] == 'LoadAllPilote')
    {
        LoadAllPilote();
    }
    elseif ($_GET['action'] == 'Interface')
    {
        TPInterface();
    }
    elseif ($_GET['action'] == 'Regex')
    {
        TestRegex();
    }
}
else
{
    require('menuprincipal.php');
}
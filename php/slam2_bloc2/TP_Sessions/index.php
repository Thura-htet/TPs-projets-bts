<?php
session_start();
require('menuprincipal.php');
require('Controller/controller.php');

if (isset($_GET['action']))
{
    if ($_GET['action'] == 'connexion')
    {
        // don't need the parameters
        if (isset($_POST['nom']) && isset($_POST['prenom']))
        {
            Login($_POST['nom'], $_POST['prenom']);
        }
        else
        {
            // Login($_SESSION['nom'], $_SESSION['prenom']);
            require('View/connexionView.php');
        }
    }
}
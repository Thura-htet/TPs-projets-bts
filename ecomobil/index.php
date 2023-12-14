<?php
session_start();
require('Controller/controller.php');

if (isset($_GET["action"]))
{
  $action = $_GET["action"];
  if ($action == "connexion")
  {
    if (isset($_POST["email"]) && isset($_POST["password"]))
    {
      Login($_POST["email"], $_POST["password"]);
    }
    else
    {
      require("View/connexionView.php");
    }
  }
  elseif ($action == "inscription")
    {
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["password"]))
    {
      SignUp($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["password"]);
    }
    else
    {
      require("View/inscriptionView.php");
    }
  }
  elseif ($action == "reservation")
  {
    if (isset($_POST['id_agence']))
    {
      $_SESSION['reservation']['id_agence'] = $_POST['id_agence'];
    }
    elseif (isset($_POST['datedemande']) && isset($_POST['heurelocation']) && isset($_POST['dureelocation']))
    {
      $_SESSION['reservation']['debutlocation'] = $_POST['datedemande'] . " " . $_POST['heurelocation'];
      $_SESSION['reservation']['dureelocationunitee'] = $_POST['dureelocation'] . " " . $_POST['unitee'];
    }

    if (isset($_SESSION['reservation']['id_agence'])
      && isset($_SESSION['reservation']['debutlocation'])
      && isset($_SESSION['reservation']['dureelocationunitee']))
    {
      $vehicule_indispo = GetVehiculesIndisponible(
      $_SESSION['reservation']['id_agence'],
      date_create_from_format('Y-m-d H:i', $_SESSION['reservation']['debutlocation']),
      date_interval_create_from_date_string($_SESSION['reservation']['dureelocationunitee'])
      );
      $total_par_type = GetTotalParType();
      $all_par_type = array_combine($total_par_type['libelle'], range(1, $total_par_type['COUNT(v.id_vehicule)']));
      print_r($all_par_type);
    }
    require("View/reservationView.php");
  }
}
else
{
require('menuprincipal.php');
}
<?php


/* -------------------------*/
/* Db connection à ECOMOBIL   */
/* -------------------------*/
function dbconnect()
{
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=ecomobil', 'root', '',
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo "CONNECTION a ECOMOBIL OK " . '</br>';
    return $bdd;
  }
  catch (Exception $e)
  {
    die('Erreur de connection à la base : ' . $e->getMessage());
  }
}
function GetUser(string $email)
{
  $bdd = dbconnect();
  $request = 'SELECT * FROM clients WHERE email=:email';
  $result = $bdd->prepare($request);
  $result->execute(array('email'=>$email));
  return $result->fetch();
}

function InsertUser(string $nom, string $prenom, string $email, string $password):bool
{
  $bdd = dbconnect();
  $request = "INSERT INTO clients (nom, prenom, email, motdepasse) VALUES (:nom, :prenom, :email, :motdepasse)";
  $result = $bdd->prepare($request);
  return $result->execute(array('nom'=>$nom, 'prenom'=>$prenom, 'email'=>$email, 'motdepasse'=>$password));
}

function LoadAgences()
{
  $bdd = dbconnect();
  $request = "SELECT * FROM agence";
  return $bdd->query($request);
}

function GetVehiculesIndisponible(int $id_agence, DateTime $debutreservation, DateInterval $dureereservation)
{
  $bdd = dbconnect();

  $finreservation = date_add($debutreservation, $dureereservation);
  // select every vehicle at an agency that is availible between the give time
  /*
  * logic - select all the reserved vehicles at a given period
  * exclude them from the list of al the vehicles
  * SQL exclude might come in handy
  */
  // TODO : needs to be tested for the case where the rent has not terminated during the time wanted
  $request_indispo = "SELECT v.id_vehicule, t.libelle FROM type_vehicule t 
    INNER JOIN vehicule v ON t.id_type = v.id_type
    INNER JOIN agence a ON v.id_agence = v.id_agence
    INNER JOIN participant p ON v.id_vehicule = p.id_vehicule
    INNER JOIN location l ON p.id_location = l.id_location
    WHERE a.id_agence=:id_agence AND l.statut='en cours'
    AND (l.debutlocation BETWEEN :debutreservation AND :finreservation
    OR :debutreservation BETWEEN l.debutlocation AND l.finlocation)";
  $result_indispo = $bdd->prepare($request_indispo);
  $result_indispo->execute(array(
    'id_agence'=>$id_agence,
    'debutreservation' => $debutreservation->format('Y-m-d H:i:s'),
    'finreservation' => $finreservation->format('Y-m-d H:i:s'))
  );
  // print_r($result->fetchAll(PDO::FETCH_ASSOC));
  $vehicules_indispo = $result_indispo->fetchAll(PDO::FETCH_ASSOC);
  return $vehicules_indispo;
}

function GetTotalParType()
{
  $bdd = dbconnect();
  $request = "SELECT t.libelle, COUNT(v.id_vehicule) FROM type_vehicule t
    INNER JOIN vehicule v ON t.id_type = v.id_type";
  $result = $bdd->query($request);
  return $result->fetchAll();
}
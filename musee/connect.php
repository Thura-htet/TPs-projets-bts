<?php
function dbconnect()
{
    try {
        $bdd = new PDO('mysql:host=localhost; dbname=muse; charset=utf8', 'root', 'root', 
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
        // echo "CONNECTION a Muse OK " . '</br>';
        return $bdd;
    } catch (Exception $e) {
        die('Erreur de connection à la base : ' . $e->getMessage());
    }
}
$bdd = dbconnect();
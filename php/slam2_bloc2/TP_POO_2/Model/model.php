<?php
function dbconnect()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=airsio', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        echo "CONNECTION a AIRSIO OK " . '</br>';
        return $bdd;
    }
    catch (Exception $e)
    {
        die('Erreur de connection à la base : ' . $e->getMessage());
    }
}

function GetOnePilote(int $idpilote)
{
    $bdd = dbconnect();
    $request = 'SELECT * FROM pilote WHERE idpilote=:idpilote';
    $pilote_result = $bdd->prepare($request);
    $pilote_result->execute(array('idpilote'=>$idpilote));
    return $pilote_result;
}
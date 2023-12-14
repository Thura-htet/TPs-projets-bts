<?php


/* -------------------------*/
/* Db connection à AIRSIO   */
/* -------------------------*/
function dbconnect()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=airsio', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo "CONNECTION a AIRSIO OK " . '</br>';
        return $bdd;
    }
    catch (Exception $e)
    {
        die('Erreur de connection à la base : ' . $e->getMessage());
    }
}

/* -------------------------------*/
/* Chargement donnée table PILOTE */
/* -------------------------------*/
function GetAllPilote()
{
    $bdd = dbconnect();
    $pilote_result = $bdd->query('SELECT * FROM pilote');
    return $pilote_result;
}

function GetAirbus()
{
    $bdd = dbconnect();
    $vol_result = $bdd->query('SELECT * FROM vol v 
        INNER JOIN avion a ON a.idavion = v.idavion 
        INNER JOIN typeavion t ON t.idtypeavion = a.idtypeavion 
        WHERE t.nomfabricant = \'Airbus\'');
    return $vol_result;
}

function GetVol($fabricant)
{
    $bdd = dbconnect();
    $request = 'SELECT * FROM vol v 
        INNER JOIN avion a ON a.idavion = v.idavion 
        INNER JOIN typeavion t ON t.idtypeavion = a.idtypeavion 
        WHERE t.nomfabricant LIKE :fabricant
        ORDER BY datevol';
    $vol_result = $bdd->prepare($request);
    $vol_result->execute(array('fabricant'=>$fabricant));
    return $vol_result;
}

function GetVolByDepart($heuredep)
{
    $bdd = dbconnect();
    $request = 'SELECT * FROM vol 
        WHERE heuredepart >= :heuredep';
    $vol_result = $bdd->prepare($request);
    $vol_result->execute(array('heuredep'=>$heuredep));
    return $vol_result;
}

function InsertFabricant($fabricant, $pays, $annee, $rang)
{
    $bdd = dbconnect();
    $request = 'INSERT INTO fabricant 
        (nomfabricant, pays, anneecreation, rangmondial)
        VALUES (:fabricant, :pays, :annee, :rang)';
    $result = $bdd->prepare($request);
    $result->execute(array('fabricant' => $fabricant, 'pays' => $pays, 'annee' => $annee, 'rang' => $rang));
    return $result;
}

function GetAllFabricant()
{
    $bdd = dbconnect();
    $fabricants_result = $bdd->query('SELECT nomfabricant, pays FROM fabricant');
    // $tab = $fabricants_result->fetch();
    // print_r($tab);
    return $fabricants_result;
}

function ModifierHeure($volid, $heure)
{
    $bdd = dbconnect();
    $request = 'UPDATE vol SET heurearrivee=:heure WHERE numvol=:numvol';
    $request = $bdd->prepare($request);
    $request->execute(array('heure'=>$heure, 'numvol'=>$volid));
}

function GetVolById($id)
{
    $bdd = dbconnect();
    $request = 'SELECT * FROM vol WHERE numvol=:id';
    $result = $bdd->prepare($request);
    $result->execute(array('id'=>$id));
    return $result;
}

function GetPiloteById($piloteId)
{
    $bdd = dbconnect();
    $request = 'SELECT * FROM pilote WHERE idpilote=:id';
    $result = $bdd->prepare($request);
    $result->execute(array('id'=>$piloteId));
    return $result;
}

function ModifierDate($piloteId, $newDate)
{
    $bdd = dbconnect();
    $request = 'UPDATE pilote SET datelicenced=:date WHERE idpilote=:id';
    $request = $bdd->prepare($request);
    $result = $request->execute(array('date'=>$newDate, 'id'=>$piloteId));
    return $result;
}
?>
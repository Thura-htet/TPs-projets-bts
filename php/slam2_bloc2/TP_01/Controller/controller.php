<?php
require('Model/model.php');
/* -------------------------------*/
/* Chargement donnée table PILOTE */
/* -------------------------------*/
function ListePilote()
{
    $pilote_result = GetAllPilote();
    require('View/DisplayPilotes.php');
}

function AirbusListe()
{
    $vol_result = GetAirbus();
    require('View/DisplayVolByFab.php');
}

function ListVuevolFab($fabricant)
{
    //$fabricants_result = GetAllFabricant();
    //$tab = $fabricants_result->fetch();
    //print_r($tab);
    if ($fabricant != null)
    {
        $vol_result = GetVol($fabricant);
    }
    require('View/DisplayVolByFab.php');
}

function Listvolheuredepart($heuredep)
{
    $vol_result = GetVolByDepart($heuredep);
    require('View/DisplayVolheuredepart.php');
}

function AddFabricant($fabricant, $pays, $annee, $rang)
{
    InsertFabricant($fabricant, $pays, $annee, $rang);
    require('View/FormAddFab.php');
}

function ModifierVol($volid, $heure)
{
    if ($volid != null && $heure != null) {
        $vol = GetVolById($volid)->fetch();
        if (isset($vol))
        ModifierHeure($volid, $heure);
    }
    require('View/DisplayModifierHeureArrivee.php');
}

function ModifierLicence($piloteId, $newDate)
{
    if ($piloteId != null && $newDate != null)
    {
        $pilote = GetPiloteById($piloteId)->fetch();
        if (isset($pilote) && $newDate < date('Y-m-d'))
        {
            $result = ModifierDate($piloteId, $newDate);
            if ($result = 1)
            {
                $message = "SUCCES : La date de licence du pilote "
                    . $pilote['prenoms'] . $pilote['noms'] . " a été modifier à " . $newDate . ".";
            }
        }
        elseif ($newDate >= date('Y-m-d'))
        {
            $message = "ERREUR : La date de licence saisie doit être inférieur ou égal à la date courante "
                . date('Y-m-d') . "!";
        }
    }
    require('View/DisplayModifierLicence.php');
}

function ChangeLangage($langue)
{
    $_SESSION['langue'] = $langue;

    if (!isset($_COOKIE['langue']))
    {
        setcookie('langue', $langue, time() + 60*10000, '/', "", false, true);
    }
    require('View/DisplayLangage.php');
}
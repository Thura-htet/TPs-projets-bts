<?php
/* Fichier index pour TP_SIO2_1 migré vers le modèle  MVC */
session_start();
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'VolByFab') {
 		if (isset($_POST['fabricant'])) {
 			ListVuevolFab($_POST['fabricant']);
        }
        else {
            ListVuevolFab(null);
        }
    }
    else if ($_GET['action'] == 'ListePilote') {
        ListePilote();
    }
    else if ($_GET['action'] == 'Airbus') {
        AirbusListe();
    }
    else if ($_GET['action'] == 'ModifierVol') {
        if (isset($_POST['heure']) && isset($_POST['volid']))
        {
            ModifierVol($_POST['volid'], $_POST['heure']);
        }
        else
        {
            ModifierVol(null, null);
        }
    }
    else if ($_GET['action'] == 'ModifierLicence') {
        if (isset($_POST['newDate']) && isset($_POST['piloteId']))
        {
            ModifierLicence($_POST['piloteId'], $_POST['newDate']);
        }
        else
        {
            ModifierLicence(null, null);
        }
    }
    else if ($_GET['action'] == 'Volheuredepart') {
        if (isset($_POST['heuredep'])) {
            echo "envoie Listvolheuredepart avec  " . $_POST['heuredep'];
            Listvolheuredepart($_POST['heuredep']);
        }
    }
    else if ($_GET['action'] == 'AddFab') {
        echo "envoie AddFabricant avec  " . $_POST['nomfabricant'];
        AddFabricant($_POST['nomfabricant'],$_POST['pays'],$_POST['anneecreation'],$_POST['rangmondiali']);
    }
    else if ($_GET['action'] == 'Langage') {
        ChangeLangage($_POST['langue']);
    }
}
else {
    require('Menuprincipal.php');
}




/*?> ommis car PHP only */
<?php
require("connect.php");
$bdd = dbconnect();

// $query = ("SELECT * FROM type_ticket ORDER BY idticket ASC");
// $result = $bdd->query($query);
// $Allrows = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="miseenpage.css">
        <link id="icon" rel="icon" type="image/png" href="img/LOGO.png">
        <title> Site Musée </title>
    </head>
    <body>
        <h1>Page de vue d'enssemble</h1>
        <p>nombre de visiteurs
        <?php
        $resquest = 'select count(*) from visiteurs Where heure_depart is null;';
        $bdd = dbconnect();
        $result = $bdd->query($resquest);
        $count = $result->fetch();
        $nvisiteur = $count ['0'];
        print_r($nvisiteur)
        ?></p>
        <p> visiteurss presents</p>
        
    </body>
</html>
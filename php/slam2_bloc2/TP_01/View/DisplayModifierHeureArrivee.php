<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>Liste des vols</title>
</head>

<body>
<p><a href="/TP_01/index.php">Retour à l'index</a></p>

<h2>Formulaire</h2>
<form action="/TP_01/index.php?action=ModifierVol" method="POST">
    <label for="volid">Saisir le nombre du vol : </label>
    <input type="number" id="volid" name="volid" required><br><br>

    <label for="heure">Changer l'heure d'arrivée à : </label>
    <input type="time" id="heure" name="heure" required><br><br>

    <input type="submit" value="Soumettre">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($vol_result)) {
        echo '</br>' . "Résulat de la requête sur Pilote entière ";
        /* Fetch resulats and display */
        while ($One_vol = $vol_result->fetch()) {
            echo '<p>'
                . 'numvol : ' . htmlspecialchars($One_vol['numvol']) . '  |  '
                . 'aeroport departs : ' . htmlspecialchars($One_vol['aeroportdeparts']) . '  |  '
                . 'aeroport arrives : ' . htmlspecialchars($One_vol['aeroportarrives']) . '  |  '
                . 'datevol : ' . htmlspecialchars($One_vol['datevol']) . '  |  '
                . 'heure depart : ' . htmlspecialchars($One_vol['heuredepart']) . '  |  '
                . 'heure arrivee : ' . htmlspecialchars($One_vol['heurearrivee']) . '  |  '
                . 'idpilote : ' . htmlspecialchars($One_vol['idpilote']) . '  |  '
                . 'idavion : ' . htmlspecialchars($One_vol['idavion']);
        }
        $vol_result->closeCursor();
    }
}
?>

</body>
</html>
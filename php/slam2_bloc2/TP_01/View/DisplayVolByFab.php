<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Liste des vols</title>
    </head>

    <body>
    <?php
    echo
    '<p><a href="/TP_01/index.php">Retour à l\'index</a></p>' .

        '<h2>Formulaire</h2>' .
        '<form action="/TP_01/index.php?action=VolByFab" method="POST">' .
            '<label for="fabricant">fabricant : </label>' .
            '<select name="fabricant"';
                $fabricants_result = GetAllFabricant();
                while ($One_fabricant = $fabricants_result->fetch()) {
                    echo '<option value=' . $One_fabricant['nomfabricant'] . '>'
                    . $One_fabricant['nomfabricant'] . ', ' . $One_fabricant['pays']
                    . '</option>';
                }
                $fabricants_result->closeCursor();
            echo
            '</select>' .
            '<input type="submit" value="Soumettre">' .
        '</form>';
    ?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($vol_result)) {
        echo '</br>' . "Résulat de la requête sur Pilote entière " .
        /* Fetch resulats and display */
        '<table class="table text-center">
            <tr>
                <th>numvol</th>
                <th>aeroport departs</th>
                <th>aeroport arrives</th>
                <th>datevol</th>
                <th>heure depart</th>
                <th>heure arrivee</th>
                <th>idpilote</th>
                <th>idavion</th>
            </tr>';
        while ($One_vol = $vol_result->fetch()) {
            echo '<tr class="text-center">'
                . '<td>' . htmlspecialchars($One_vol['numvol']) . '</td>'
                . '<td>' . htmlspecialchars($One_vol['aeroportdeparts']) . '</td>'
                . '<td>' . htmlspecialchars($One_vol['aeroportarrives']) . '</td>'
                . '<td>' . htmlspecialchars($One_vol['datevol']) . '</td>'
                . '<td>' . htmlspecialchars($One_vol['heuredepart']) . '</td>'
                . '<td>' . htmlspecialchars($One_vol['heurearrivee']) . '</td>'
                . '<td>' . htmlspecialchars($One_vol['idpilote']) . '</td>'
                . '<td>' . htmlspecialchars($One_vol['idavion']) . '</td>'
                . '</tr>';
        }
        $vol_result->closeCursor();
        echo '</table>';
    }
}
?>

    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Liste des pilotes</title>
    </head>

    <body>
        <p><a href="/TP_01/index.php">Retour à l'index</a></p>
        <?php
        echo '</br>' . "résulat de la requête sur Pilote entière ";
        /* Fetch resulats and display */
        while ($One_pilote = $pilote_result->fetch()) {
            echo '<p>'
                . 'Nom : ' . htmlspecialchars($One_pilote['noms']) . '  |  '
                . ' Prenom : ' . htmlspecialchars($One_pilote['prenoms']) . '  |  '
                . ' Date naissance : ' . htmlspecialchars($One_pilote['datenaissance']) . '  |  '
                . ' Date de licence : ' . htmlspecialchars($One_pilote['datelicenced']);
        }
        $pilote_result->closeCursor();
        ?>
    </body>
</html>
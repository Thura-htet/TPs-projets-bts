<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Liste des vols</title>
    </head>

    <body>

        <p><a href="/TP_01/index.php">Retour à l'index</a></p>

        <h2>Formulaire</h2>
        <form action="/TP_01/index.php?action=AddFab" method="POST">
            <label for="fabricant">fabricant :</label>
            <input type="text" id="fabricant" name="nomfabricant" required><br><br>

            <label for="pays">pays :</label>
            <input type="text" id="pays" name="pays" required><br><br>

            <label for="annee">année de création :</label>
            <input type="number" id="annee" name="anneecreation" min="1950" max="2021" required><br><br>

            <label for="rang">rang :</label>
            <input type="number" id="rang" name="rangmondiali" min="1"  max="100" required><br><br>

            <input type="submit" value="Soumettre">
            <?php
                if (isset($result)) {
                    "L'opération a été traité avec succès !";
                }
            ?>
        </form>
    </body>
</html>
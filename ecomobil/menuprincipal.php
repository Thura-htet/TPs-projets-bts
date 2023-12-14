<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Ecomobil menu principal</title>
    </head>
    <body>
        <div>
            <p><a href="index.php">Retour à l'index</a></p>
            <p><a href="index.php?action=connexion">Connexion</a></p>
            <p><a href="index.php?action=inscription">Inscription</a></p>
            <p><a href="index.php?action=reservation">Reservation</a></p>
        </div>
        <?php
            echo "Current user : " . $_COOKIE["nom"] . " " . $_COOKIE["prenom"];
        ?>
    </body>
</html>
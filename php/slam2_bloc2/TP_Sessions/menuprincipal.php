<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Acceuil PHP TP POO1</title>
    </head>
    <body>
    <div>
        <p><a href="index.php">Retour à l'index</a></p>
        <p><a href=index.php?action=connexion>Connexion</a></p>
        <?php
        if (isset($_SESSION['nom']) && isset($_SESSION['prenom']))
        {
            echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
        }
        if (isset($_COOKIE['nom']) && isset($_COOKIE['prenom']))
        {
            echo "<br>Content de vous revoir " . $_COOKIE['nom'] . " " . $_COOKIE['prenom'] . " !";
        }
        ?>
    </div>

    <!--
    <p><a href="View/FormUpdPilote.php">Mise à jour date licence du pilote </a></p>
    -->
    </body>
</html>
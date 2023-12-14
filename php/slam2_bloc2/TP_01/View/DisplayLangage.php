<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Liste des vols</title>
</head>

<body>
<?php
echo '<br/>';
if (!isset($_SESSION['langue']) || !isset($_COOKIE['langue']) || $_SESSION['langue'] == 'fr' || $_COOKIE['langue'] == 'fr')
{
    /*
    echo
        '<p><a href="/TP_01/index.php">Retour à l\'index</a></p>' .

        '<h2>Formulaire</h2>' .
        '<form action="/TP_01/index.php?action=Langage" method="POST">' .
        '<label for="Langue">Choisir la langue  : </label>' .
        '<select name="langue">' .
        '<option value="fr" selected>French</option>' .
        '<option value="en">English</option>' .
        '</select>' .
        '<input type="submit" value="Soumettre">' .
        '</form>';
    echo
    '<form action="/TP_Sessions/index.php?action=connexion" method="POST">
        <label for="nom">Saisir votre nom : </label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Saisir votre prenom : </label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <input type="submit" value="Soumettre">
    </form>';
    */
    require('langueFR.php');
}
else if ($_SESSION['langue'] == 'en' || $_COOKIE['langue'] == 'en')
{
    echo
        '<p><a href="/TP_01/index.php">Return to index</a></p>' .

        '<h2>Login form</h2>' .
        '<form action="/TP_01/index.php?action=Langage" method="POST">' .
        '<label for="Langue">Choose your language : </label>' .
        '<select name="langue">' .
        '<option value="fr">French</option>' .
        '<option value="en" selected>English</option>' .
        '</select>' .
        '<input type="submit" value="Submit">' .
        '</form>';
    echo
    '<form action="/TP_Sessions/index.php?action=connexion" method="POST">
        <label for="nom">Enter your surname: </label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Enter your name: </label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <input type="submit" value="Submit">
    </form>';
}
?>

</body>
</html>
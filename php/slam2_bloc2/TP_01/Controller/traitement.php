<!DOCTYPE html>
<html>
<head>
    <title>Traitement du Formulaire</title>
</head>
<body>
<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    echo "Bonjour Mr $nom $prenom<br>";

    echo "Votre adresse mail est $email";
}
else {
    echo "Tous les champs du formulaire doivent être saisis.";
}
?>
</body>
</html>
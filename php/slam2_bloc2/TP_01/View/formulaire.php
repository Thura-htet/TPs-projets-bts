<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulaire</title>
</head>
<body>
<p><a href="/TP_01/index.php">Retour a l'index</a></p>

<h2>Formulaire</h2>
<form method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Soumettre">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if any field is empty
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email'])) {
        echo "<h2>Erreur</h2>";
        echo "Tous les champs du formulaire doivent être saisis.";
    } else {
        // The form has been submitted, process the data.
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];

        echo "<h2>Résultat du Formulaire</h2>";
        echo "Bonjour Mr $nom $prenom<br/>";
        echo "Votre adresse mail est $email";
    }
}
?>

</body>
</html>
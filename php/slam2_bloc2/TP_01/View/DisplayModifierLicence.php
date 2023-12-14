<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modifier la date de licence</title>
</head>

<body>
<p><a href="/TP_01/index.php">Retour à l'index</a></p>

<h2>Formulaire</h2>
<form action="/TP_01/index.php?action=ModifierLicence" method="POST">
    <label for="piloteId">Saisir l'id du pilote : </label>
    <input type="number" id="piloteId" name="piloteId" required><br><br>

    <label for="newDate">Changer l'heure d'arrivée à : </label>
    <input type="date" id="newDate" name="newDate" required><br><br>

    <input type="submit" value="Soumettre">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($message)) {
        echo '</br>' . $message;
    }
}
?>

</body>
</html>
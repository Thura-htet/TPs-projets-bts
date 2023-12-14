<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Page de connexion</title>
</head>

<body>
    <h2>Formulaire</h2>
    <form action="/TP_Sessions/index.php?action=connexion" method="POST">
        <label for="nom">Saisir votre nom : </label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Saisir votre prenom : </label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <input type="submit" value="Soumettre">
    </form>

</body>
</html>
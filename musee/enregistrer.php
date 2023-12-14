<?php
declare(strict_types=1);
require("./connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site Musée</title>
    </head>
    <body>
        <form action="http://localhost/musee/enregistrer.php" method="POST">
            <label for="nom">nom : </label>
            <input type="text" name="nom" id="nom" required>
            
            <label for="prenom">prénom : </label>
            <input type="text" name="prenom" id="prenom" required>
            
            <label for="email">email : </label>
            <input type="email" name="email" id="email" required>
            
            <label for="age">âge : </label>
            <input type="number" name="age" id="age" min="0" required>
            
            <label for="heureArrive">Heure d'arrive : </label>
            <input type="datetime-local" name="heure_arrive" id="heureArrive" required>
            
            <label for="heureDepart">Heure d'depart : </label>
            <input type="datetime-local" name="heure_depart" id="heureDepart" required>
            
            <label for="ticket">Type du ticket : </label>
                <select name="idticket" id="ticket">
                    <option value="T">Temporaire</option>
                    <option value="P">Permenante</option>
                    <option value="D">Les deux</option>
                </select>

            <input type="submit" id="enregistrer" value="Enregistrer">
        </form>
    </body>
</html>

<?php
require("./connect.php");

{
    $bdd = dbconnect();

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $idticket = $_POST["idticket"];

    $date = $_SERVER["REQUEST_TIME"];

    $sql = ('insert into visiteurs 
                (age, nom, prenom, email, idticket)
                values (?, ?, ?, ?, ?);');
    $result = $bdd->prepare($sql);
    $result->execute([
        $age, $nom, $prenom, $email, $idticket
    ]);
}
?>
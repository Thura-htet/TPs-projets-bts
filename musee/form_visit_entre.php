<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">

        <title> Entrer Client </title>
        <link id="icon" rel="icon" type="image/png" href="..\img/drite.png">
    </head>

    <body>
    <!--  Partie HTML  : declaration du formulaire  -->
    <div class="container">
        <form action="form_visit_entre.php" method="POST">
            <div class="informations">
                <h3> Veuillez entrez vos information : </h3>

                <div class="information">
                    <label for="nom">nom : </label>
                    <input type="text" name="nom" id="nom" required>
                </div>

                <div class="information">
                    <label for="prenom">prénom : </label>
                    <input type="text" name="prenom" id="prenom" required>
                </div>

                <div class="information">
                    <label>Email : </label>
                    <input type="email" name="email"/>
                    </div>

                <div class="information">
                    <label>Age : </label>
                    <input type="text" name="age"/>
                </div>

                <div class="information">
                    <label for="ticket">Type du ticket : </label>
                            <select name="ticket" id="ticket">
                                <option value="T">Temporaire</option>
                                <option value="P">Permenante</option>
                                <option value="D">Les deux</option>
                            </select>
                </div>

                <input type="submit" value="Valider"/> </p>
                <a href="../index.php"><input type="button" value="Page d'Accueil"> </a></p>
            </div>  
        </form>   
    </div>
    </body>

</html>

<?php
echo '<br>';
echo '<br>';
?>

<?php
    date_default_timezone_set('Europe/Paris');
    require("./connect.php");

    if (isset($_POST['ticket'])) 
    {
        if ($_POST['ticket'] == 'D') {
            $Expo = "Temporaire et Permanente";
        } else if ($_POST['ticket'] == 'T') {
            $Expo = "Temporaire";
        } else if ($_POST['ticket'] == 'P') {
            $Expo = "Permanente";
        }
    }

    if (isset($_POST['email']) && isset($_POST['age']) && isset($_POST['ticket'])) 
    {
        if (empty($_POST['email']) && empty($_POST['age'] && empty($_POST['ticket']))) 
        {
            echo "Erreur formulaire vide !";
        }
         
        else 
        {
            $Nom = $_POST['nom'];
            $Prenom = $_POST['prenom'];
            $Email = $_POST['email'];
            $Age = $_POST['age'];
            $Idticket = $_POST['ticket'];
            $Date = date("y-m-d");
            $Heure_arrive = date("H:i:s");
            $bdd = dbconnect();

            $query = ("INSERT INTO visiteurs (nom, prenom, age, email, heure_arrive, _date, idticket) 
                VALUES (:nom, :prenom, :age, :email, :heure_arrive , :_date, :idticket)");
            $result = $bdd->prepare($query);
            $successful = $result->execute(["nom"=>$Nom, "prenom"=>$Prenom, "age"=>$Age, "email"=>$Email, "heure_arrive"=>$Heure_arrive, "_date"=>$Date, "idticket"=>$Idticket]);

            if ($successful)
            {
                echo "Création reussie :";
                echo '</br>';
    
                echo "<di>
                        <h3>Recap : </h3>" . "Email : " . $_POST['email'] . ' <br>' . "Age : " . $_POST['age'] . ' <br>' . "Type d'Expo : " . $Expo . ' <br>' . "Date : " . $Date . '<br> ' . "Heure d'arrivé : " . $Heure_arrive .
                    "</div>";
            }
        }
    }
?>
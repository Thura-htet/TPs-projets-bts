<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page de reservation</title>
    </head>

    <body>
        <p><a href="/index.php">Retour à l'index</a></p>
        <?php
        print_r($_SESSION);
        /*
         * logic
            * choose an agency
            * choose date, time and duration for the rental
            * show available vehicles
            * let the user add vehicles by participants
            * store reservations => participant => location (dict) after each addition
         */
        if (!empty($message))
        {
            echo $message;
        }
        if (!isset($_POST['id_agence']))
        {
            echo "<p> Reservation </p>" .
                '<form action="/index.php?action=reservation" method="POST">' .
                "<label>Choisir l'agence de location : </label>" .
                '<select name="id_agence">';
                    $agences_result = LoadAgences();
                    while ($agence = $agences_result->fetch())
                    {
                        echo '<option value=' . $agence['id_agence'] . '>'
                            . $agence['ville']
                            . '</option>';
                    }
                    $agences_result->closeCursor();
            echo '</select>' .
                '<input type="submit" value="Rechercher" />' .
                '</form>';
            // check if there are any vehicles available at the agence in question
        }
        elseif (!empty($_SESSION['reservation']['id_agence']))
        {
            echo '<form action="/index.php?action=reservation" method="POST">
                <label>Date de la location : <input type ="date" name="datedemande" required/></label><br>
                <label>Heure de la location : <input type ="time" name="heurelocation" required/></label><br>
                <label>Durée de la location : <input type ="number" name="dureelocation" required/></label><br>
                <label>Unitée : </label>
                    <select name="unitee">
                        <option value="days">Jours</option>
                        <option value="hours">Heures</option>
                    </select><br>
                <input type="submit" value="Soumettre" />
            </form>';
        }
        ?>
    </body>
</html>
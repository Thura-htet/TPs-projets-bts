<?php
echo
'<p><a href="/TP_01/index.php">Retour à l\'index</a></p>

<h2>Formulaire</h2>
<form action="/TP_01/index.php?action=Langage" method="POST">
    <label for="Langue">Choisir la langue  : </label>
    <select name="langue">
        <option value="fr" selected>French</option>
        <option value="en">English</option>
        </select>
    <input type="submit" value="Soumettre">
    </form>';
echo
'<form action="/TP_Sessions/index.php?action=connexion" method="POST">
    <label for="nom">Saisir votre nom : </label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Saisir votre prenom : </label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <input type="submit" value="Soumettre">
</form>';
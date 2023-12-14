<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page d'inscription</title>
    </head>

    <body>
        <p><a href="/index.php">Retour à l'index </a></p>
        <?php
        if (!empty($message))
        {
            echo $message;
        }
        ?>
        <p> Inscription </p>
        <form action="/index.php?action=inscription" method="POST">
            <label>Nom : <input type ="text" name="nom" required/></label><p>
            <label>Prénom : <input type ="text" name="prenom" required/></label><p>
            <label>Email : <input type ="email" name="email" required/></label><p>
            <label>Password : <input type ="password" name="password" required/></label><p>
            <input type="submit" value="S'inscrire" />
        </form>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page de connexion</title>
    </head>

    <body>
        <p><a href="/index.php">Retour à l'index </a></p>
        <?php
        if (!empty($message))
        {
            echo $message;
        }
        ?>
        <p> Connexion </p>
        <form action="/index.php?action=connexion" method="POST">
            <label>Email : <input type ="email" name="email" required/></label><p>
            <label>Password : <input type ="password" name="password" required/></label><p>
            <input type="submit" value="Connexion" />
        </form>
    </body>
</html>
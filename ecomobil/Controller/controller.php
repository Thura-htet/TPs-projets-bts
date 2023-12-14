<?php
require('Model/model.php');

function Login($email, $password):void
{
    $message = "";
    $user = GetUser($email);
    // if user does not exist
    if (!$user)
    {
        // create an account
        echo "L'utilisateur n'exsite pas. Merci de creer de <a href='/View/inscriptionView.php'>s'inscrire</a>.";
    }
    // if user already exists
    else
    {
        // check if user is already logged in
        if (isset($_SESSION["nom"]) && isset($_SESSION["prenom"])
            && !strcmp($_SESSION["nom"], $user["nom"])
            && !strcmp($_SESSION["prenom"], $user["prenom"]))
        {
            $message = "Vous êtes déjà connecté. Retour à l'<a href='/index.php'>accueil</a>.";
            require("View/connexionView.php");
        }
        elseif (password_verify($password, $user["motdepasse"]))
        {
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["prenom"] = $user["prenom"];
            setcookie('nom', $user["nom"], time() + 30*24*60*60);
            setcookie('prenom', $user["prenom"], time() + 30*24*60*60);
            echo "Connexion réussie ! Retour à l'<a href='/index.php'>accueil</a>.";
        }
        else
        {
            $message =  "Votre identifiant ou votre mot de passe n'est pas correct.";
            require("View/connexionView.php");
        }
    }
}

function SignUp($nom, $prenom, $email, $password)
{
    // vérifier si l'utilisateur est déjà existant
    if (empty(GetUser($email)))
    {
        $succes = InsertUser($nom, $prenom, $email, password_hash($password, PASSWORD_BCRYPT));
        if (!$succes)
        {
            $message = "Erreur d'inscription. Merci de ressayer.";
            require("View/inscriptionView.php");
        }
        else
        {
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            setcookie('nom', $nom, time() + 30*24*60*60);
            setcookie('prenom', $prenom, time() + 30*24*60*60);
            echo "Inscription réussie ! Retour à l'<a href='/index.php'>accueil</a>.";
        }
    }
    else
    {
        echo "L'utilisatuer est déjà inscrit. Merci de vous <a href='/index.php?action=connexion'>connecter</a>";
    }
}

// neiltujague.netlify.app
// lambourg.netlify.app
// chapron-paulin.netlify.app

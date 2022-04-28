<?php

//on demarre la session
session_start();

//quand la personne est connectée 
if (isset($_POST["form_connect"])) {
    //je vérifie si la personne a le droit de se connecter
    //pour le moment en dur dans le code, améliorable dès qu'on aura une BDD !
    var_dump($_POST);
    //si l'utilisateur est connu et que le mot de passe est reconnu
    if (isset($_POST["name"])) {
        //la personne s'est connectée : on enregistre ses identifiants de connexion dans $_SESSION

        $_SESSION["name"] = $_POST["name"];

        //on enregistre les identifiants de connexion dans un cookie utilisateur
        //ceux du formulaire, pas le mot de passe hashé !
        //fonction de création du cookie : un nom, une valeur, une date calculée en timestamp
        setcookie("name", $_POST["name"], time() + 60 * 60 * 24 * 30);

        if (empty($_COOKIE["victoires"])) {
            setcookie("victoires", 0, time() + 60 * 60 * 24 * 30);
        }

        //puis on redirige l'utilisateur vers la page de son compte
        header("location: reset.php");
        //exit va stopper l'exécution de ce fichier
        //donc si on est entré dans le if on ne redirigera pas vers index
        exit;
    }
}

//si on essaye de venir sur cette page sans poster le formulaire d'index.php
//ou si on a entré des identifiants non autorisés
//accès illégal, on renvoie vers le formulaire

header("location: inscription.php");

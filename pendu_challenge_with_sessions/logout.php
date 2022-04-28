<?php

//page qui gère la déconnexion de mon utilisateur et le renvoie à l'index

//TOUJOURS session_start au début du script quand vous allez manipuler des données de session sur la page
//même si c'est juste pour la détruire !
session_start();



//je désactive la session en détruisant absolument tout ce qu'elle contient
$_SESSION = null;
session_destroy();
unset($_SESSION);

//on redirige vers la page index.php
header("location: inscription.php");

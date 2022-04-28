<?php

session_start();

$_SESSION["random_word"] = "";
$_SESSION["essai_restant"] = 0;
$_SESSION["motCache"] = "";
$_SESSION["empty_table"] = [];
$_SESSION["available_letters"] =
    [
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m",
        "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    ];


header('Location: index.php');

//enlever header et inclure reset dans code de victoires ou defaites 

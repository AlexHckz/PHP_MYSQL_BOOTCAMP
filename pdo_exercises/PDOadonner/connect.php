<?php

require 'config/config.php';


$option = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //Je peux changer en FETCH_ASSOC ou un autre mode, ne pas oublier de changer la manière d'afficher les informations
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$pdo = new PDO($DB_dsn, $DB_user, $DB_pass, $option);

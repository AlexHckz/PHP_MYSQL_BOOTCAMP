<?php

require 'config/config.php';


// je crée mes options
$option = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];


$pdo = new PDO($DB_dsn, $DB_user, $DB_pass, $option);

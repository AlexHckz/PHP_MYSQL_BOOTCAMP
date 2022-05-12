<?php


require './config/config.php';
require './include/header.php';

$option = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //Je peux changer en FETCH_ASSOC ou un autre mode, ne pas oublier de changer la manière d'afficher les informations
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {

    // $email = $_POST['email'];
    $pdo = new PDO($DB_dsn, $DB_user, $DB_pass, $option);

    $email = $_POST["mail_user"];
    $password = $_POST["password_user"];
    $user_name = $_POST["nom_user"];

    $sql = "INSERT INTO user VALUES (NULL, '$email', '$password', '$user_name')";
    $query = $pdo->query($sql);

    $success_message = require('../components/successMessage.php');
} catch (PDOException $err) {

    echo "Erreur : " . $err;
    $error_message = require('../components/errorMessage.php');
};

if (isset($success_message)) {
    echo $success_message;
} else if (isset($error_message)) {
    echo $error_message;
};

require './include/footer.php';

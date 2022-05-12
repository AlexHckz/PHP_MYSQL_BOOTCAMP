<?php
require './connect.php';
require './include/head.php';

try {
    $pdo = new PDO($DB_dsn, $DB_user, $DB_pass, $option);

    $sql = 'UPDATE user 
    SET mail_user = :mail , password_user = :pass, nom_user = :nom 
    WHERE id_user = :id';

    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $_POST['id_user'],
        'pass' => $_POST['password_user'],
        'mail' => $_POST['mail_user'],
        'pass' => $_POST['password_user'],
        'nom' => $_POST['nom_user'],
    ]);
} catch (PDOException $err) {
    die("Erreur : " . $err->getMessage());
}

require './include/footer.php';

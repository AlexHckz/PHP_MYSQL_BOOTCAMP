<?php
require './connect.php';
require './include/head.php';

try {
    $pdo = new PDO($DB_dsn, $DB_user, $DB_pass, $option);

    $sql = 'DELETE FROM user 
    WHERE id_user = :id';

    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $_POST['id_user'],
    ]);
} catch (PDOException $err) {
    die("Erreur : " . $err->getMessage());
}

require './include/footer.php';

<?php
require 'config/config.php';

$option = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //Je peux changer en FETCH_ASSOC ou un autre mode, ne pas oublier de changer la manière d'afficher les informations
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try{
    $pdo = new PDO($DB_dsn, $DB_user, $DB_pass, $option);

    $sql = 'SELECT * FROM user WHERE id_user = :id';

    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $_GET['id']
    ]);

    $result = $query->fetch(PDO::FETCH_OBJ);
    if(!isset($_GET['id']) || $result->id_user === null):?>
    <?php header("Location: erreur404.php") ?>
    <?php else: ?>
    <form action="traitement/update.php?id=<?= htmlentities($result->id_user) ?>" method="POST">
        <input type="email" name="mail_user" value="<?= htmlentities($result->mail_user) ?>" id="mail_user">
        <input type="password" name="password_user" value="<?= htmlentities($result->password_user) ?>" id="password_user">
        <input type="text" name="nom_user" value="<?= htmlentities($result->nom_user) ?>" id="nom_user">
        <input type="submit" value="Valider">
    </form>
    <?php endif ?> 
<?php    
}catch(PDOException $err){
    die("Erreur : " .$err->getMessage());
}

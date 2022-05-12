<?php

require 'connect.php';

try {
    $pdo = new PDO($DB_dsn, $DB_user, $DB_pass, $option);

    $sql = 'SELECT * FROM user WHERE id_user = :id';

    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $_GET['id']
    ]);

    $result = $query->fetch(PDO::FETCH_OBJ);
    if (!isset($_GET['id']) || $result->id_user === null) : ?>
        <?php header("Location: erreur404.php") ?>
    <?php else : ?>

        <?php require 'include/head.php'; ?>

        <div class="container mt-5">

            <h1 class="mb-4">Editer le profil</h1>

            <form action="./update.php?id=<?= htmlentities($result->id_user) ?>" method="POST">

                <input type="email" name="mail_user" value="<?= htmlentities($result->mail_user) ?>" id="mail_user">
                <input type="password" name="password_user" value="<?= htmlentities($result->password_user) ?>" id="password_user">
                <input type="text" name="nom_user" value="<?= htmlentities($result->nom_user) ?>" id="nom_user">
                <input type="hidden" value="<?= $result->id_user ?>" name="id_user">
                <input type="submit" value="Valider">
            </form>

            <form action="./delete.php?id=<?= htmlentities($result->id_user) ?>" method="POST">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="delete_user" value="" id="delete_user">
                    <label class="form-check-label" for="defaultCheck1">
                        Supprimer le compte
                    </label>
                </div>
                <input type="hidden" value="<?= $result->id_user ?>" name="id_user">
                <input type="submit" value="Valider">
            </form>

        </div>

        <?php require 'include/footer.php'; ?>

    <?php endif ?>
<?php
} catch (PDOException $err) {
    die("Erreur : " . $err->getMessage());
}

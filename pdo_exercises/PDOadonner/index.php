<?php
require 'connect.php';
/* 
je vérifie si mon driver existe
phpinfo();
exit;
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/bootstrap.min.css">

    <style>
        #users,
        #inscription {
            padding-left: 2em;
        }

        h2 {
            padding: 1em 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#users">Liste des utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">S'inscrire</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="users">
        <h2>Liste des utilisateurs</h2>
        <?php
        try {
            $sql = "SELECT * FROM user";
            $query = $pdo->query($sql);
            // fetch_obj
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($data as $result) { ?>
                <ul>
                    <li><a href="updateUser.php?id=<?= $result->id_user ?>"><?= $result->nom_user ?></a></li>
                </ul>
        <?php }
        } catch (PDOException $err) {
            die("Erreur : " . $err->getMessage());
        } ?>
    </div>

    <!-- <div class="container-fluid" id="inscription">
        <h2>Formulaire utilisateur</h2>
        <a href="user.php">Ajouter un utilisateur</a>
    </div> -->

</body>


</html>
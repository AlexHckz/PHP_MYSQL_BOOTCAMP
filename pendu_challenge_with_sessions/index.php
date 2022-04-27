<?php

//TOUJOURS session_start au début du script quand vous allez manipuler des données de session sur la page
session_start();
//si on a pas d'utilisateur enregistré dans la session
if (!isset($_SESSION["name"])) {
    header("location: inscription.php");
}
include './pendu.php';

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My_Pendu</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <!-- Personnal CSS -->
    <link rel="stylesheet" href="./style.css">

</head>

<?php include './nav.html'; ?>

<body class="bg-dark bg-opacity-25">

    <div class="container-fluid">
        <div class="row">
            <div class="title-wrapper">
                <p><?php echo $_SESSION["name"]; ?> ! trouve le mot suivant ...</p>
            </div>

            <div class="word-wrapper">
                <p class="motCache"><?php echo $_SESSION["motCache"]; ?></p>
                <p>Il te reste encore
                    <span class=" badge rounded-pill bg-warning"><?php echo $_SESSION["essai_restant"]; ?></span>
                    essais !
                </p>
            </div>

            <div class="container pendu-wrapper mb-5 mt-5">
                <div>
                    <?php drawPendu($_SESSION["essai_restant"]); ?>
                </div>
            </div>

            <div class="form-wrapper col-6">
                <h4 class="mb-4">Choisir une lettre :</h4>
                <form action="index.php" method="POST" class="clavier">
                    <div class="mb-3">

                        <div class="form-check">
                            <?php
                            foreach ($_SESSION["available_letters"] as $key => $lettre) {
                                echo '  
                                    <input type="radio" class="btn-check" name="user_entry" id="' . $lettre . '" value="' . $lettre . '" autocomplete="off">
                                    <label class="btn btn-secondary" for="' . $lettre . '">' . $lettre . '</label>
                                    ';
                            }
                            ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Tester</button>
                </form>

                <?php
                if ($win == true) {
                    echo  '<div class="alert alert-success" role="alert">
                                        La lettre est dans le mot !
                                    </div>';
                }
                if ($loose == true) {
                    echo  '<div class="alert alert-danger" role="alert">
                                        Perdu ! Essaye une autre lettre !
                                    </div>';
                }
                ?>

                <div class="end_message">
                    <?php
                    if (isset($end_message)) {
                        echo $end_message;
                    }
                    ?>
                </div>



                <div class="word-wrapper">
                    <p>Tu as déjà gagné
                        <span class=" badge rounded-pill bg-warning"><?php echo $_COOKIE["victoires"]; ?></span>
                        fois
                    </p>
                </div>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
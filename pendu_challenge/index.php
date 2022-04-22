<?php
include './pendu.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
</head>

<body class="bg-dark bg-gradient bg-opacity-25">

    <div class="container-fluid">
        <div class="row">
            <div class="title-wrapper">
                <h1 class="display-1">Pendu !</h1>
                <p>trouve le mot suivant ...</p>
            </div>

            <div class="word-wrapper">
                <p><?= $motCache ?></p>
                <p>Il te reste encore
                    <span class=" badge rounded-pill bg-warning"><?php echo $essai_restant; ?></span>
                    essais !
                </p>
            </div>

            <div class="container pendu-wrapper">
                <div>
                    <?php drawPendu($essai_restant); ?>
                </div>
            </div>

            <div class="form-wrapper col-6">
                <h4>Choisir une lettre :</h4>
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="user_entry">
                            <option selected>Open this select menu</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                            <option value="d">d</option>
                            <option value="e">e</option>
                            <option value="f">f</option>
                            <option value="g">g</option>
                            <option value="h">h</option>
                            <option value="i">i</option>
                            <option value="j">j</option>
                            <option value="k">k</option>
                            <option value="l">l</option>
                            <option value="m">m</option>
                            <option value="n">n</option>
                            <option value="o">o</option>
                            <option value="p">p</option>
                            <option value="q">q</option>
                            <option value="r">r</option>
                            <option value="s">s</option>
                            <option value="t">t</option>
                            <option value="u">u</option>
                            <option value="v">v</option>
                            <option value="w">w</option>
                            <option value="x">x</option>
                            <option value="y">y</option>
                            <option value="z">z</option>
                        </select>
                    </div>
                    <input type="hidden" name="data_word" value="<?php echo $random_word; ?>">
                    <input type="hidden" name="data_try" value="<?php echo $essai_restant; ?>">
                    <input type="hidden" name="data_printed" value="<?php echo $printed; ?>">
                    <input type="hidden" name="data_answer" value="<?php echo $motCache; ?>">
                    <input type="hidden" name="data_table" value="<?php echo implode(" ", $empty_table); ?>">
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
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
                    <?php echo $end_message ?>
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
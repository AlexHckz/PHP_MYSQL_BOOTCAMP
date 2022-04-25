<?php
//on verifie que les donnees du formulaire ne sont pas vides 
if (!empty($_POST["message"]) && !empty($_POST["email"])) {
    $afficherMessage = $_POST["message"];
    $afficherEmail = $_POST["email"];
} else {
    $afficherMessage = "message incorrect";
    $afficherEmail = "email incorrect";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Alex C.</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/nav_and_footer.css">
    <link rel="stylesheet" href="./style/contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">

</head>

<body>
    <header>
        <h1 class="title_font">Alex C.</h1>
        <p>DEVELOPPEUR <b>FULLSTACK</b> JUNIOR</p>
    </header>

    <nav>
        <a href="./index.html#portfolio" class="btn btn-1 hover-filled-slide-down" id="button_experience">
            <span>Portfolio</span>
        </a>
        <a href="./index.html#experience" class="btn btn-1 hover-filled-slide-down" id="button_experience">
            <span>Expérience</span>
        </a>
        <a href="./index.html#formation" class="btn btn-1 hover-filled-slide-down" id="button_formation">
            <span>Formation</span>
        </a>
        <a href="contact.html" class="btn btn-1 hover-filled-slide-down" id="button_formation">
            <span>Contact</span>
        </a>
    </nav>

    <main class="container-fluid contact_main confirmation_main">

        <section class="middle-section">

            <div id="contact">

                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Confirmation</h1>
                        <p class="lead">
                            Vous avez envoyé le message suivant : <?= $afficherMessage ?>
                        </p>
                        <p class="lead">
                            Je vous recontacterai dès que possible à l'adresse : <?= $afficherEmail ?>
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <div>
            <h3>Contact</h3>
            <ul>
                <li><a href="mailto:alexandre.cuneo@gmail.com">alexandre.cuneo@gmail.com</a></li>
                <li><a href="tel:+33695885130">(+33) 06 95 88 51 30</a></li>
            </ul>
        </div>
        <div class="networks">
            <h3>Me suivre sur les réseaux</h3>
            <ul>
                <li>
                    <a href="https://github.com/AlexHckz">
                        <img src=".\src\fontawesome-free-6.1.1-desktop\svgs\brands\github-white.svg" class="networks_icons"></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/feed/" class="linkedin">
                        <img src=".\src\fontawesome-free-6.1.1-desktop\svgs\brands\linkedin-white.svg" class="networks_icons"></a>
                </li>
            </ul>
        </div>
        <div>
            <h3>Crédits</h3>
            <ul>
                <li><a href="#">Mentions légales</a></li>
                <li>Alex
                    <svg class="svg-inline--fa fa-copyright" aria-hidden="true" width="16px" height="16px" focusable="false" data-prefix="far" data-icon="copyright" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM255.1 176C255.1 176 255.1 176 255.1 176c21.06 0 40.92 8.312 55.83 23.38c9.375 9.344 24.53 9.5 33.97 .1562c9.406-9.344 9.469-24.53 .1562-33.97c-24-24.22-55.95-37.56-89.95-37.56c0 0 .0313 0 0 0c-33.97 0-65.95 13.34-89.95 37.56c-49.44 49.88-49.44 131 0 180.9c24 24.22 55.98 37.56 89.95 37.56c.0313 0 0 0 0 0c34 0 65.95-13.34 89.95-37.56c9.312-9.438 9.25-24.62-.1562-33.97c-9.438-9.312-24.59-9.219-33.97 .1562c-14.91 15.06-34.77 23.38-55.83 23.38c0 0 .0313 0 0 0c-21.09 0-40.95-8.312-55.89-23.38c-30.94-31.22-30.94-82.03 0-113.3C214.2 184.3 234 176 255.1 176z">
                        </path>
                    </svg> 2k22
                </li>
            </ul>
        </div>
    </footer>



</body>

</html>
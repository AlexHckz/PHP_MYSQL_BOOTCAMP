<?php


include './pendu_drawss.php';


//on met le nombre de victoires a 0
if (empty($_COOKIE["victoires"])) {
    setcookie("victoires", 0, time() + 60 * 60 * 24 * 30);
}

//on fait choisir un mot dans une liste à l'ordinateur 
$liste_mots = [
    "Blanc", "Podium", "Attirer", "Cablage", "Capitaine", "Nuage", "Ovni", "Humide", "Femmes",
    "Tremble", "Canal", "Menottes", "Artificiel", "Madone", "Bazooka", "Pression", "Multiplication", "Prix", "Plastique",
    "Religieuse", "Cible", "Soulevement", "Mediatrice", "Philosophe", "Bande", "Canada", "Ballon", "Volee", "Muet",
    "Parking", "Minuit", "Hiberner", "Loin", "Rabat", "Monarchie", "Spermatozoide", "Poisson", "Camarade", "Moche",
    "Vache", "Rapide", "Entrepot", "Feuille", "Campus", "Pornographie", "Bucheron", "IDE", "Orbite", "Planetes", "Salle",
    "Taxi", "Bronze", "Hydrogene", "Nouveaute", "Route", "Recipient", "Fossette", "Demander", "Terrain", "Aviateur",
    "Boussole", "Plomb", "Catapulte", "Recueillir", "Stimulateur", "Cardiaque", "Chant", "Brun", "Gribouiller", "Locomotive", "Chenil"
];

$table_size = sizeof($liste_mots);

if (empty($random_number)) {
    $random_number = rand(0, $table_size);
}

//on stocke le mot dans la session
if (empty($_SESSION["random_word"]) && empty($_SESSION["essai_restant"]) && empty($_SESSION["motCache"])) {

    $_SESSION["random_word"] = $liste_mots[$random_number];
    $_SESSION["essai_restant"] = 9;
    $_SESSION["motCache"] = "";
}

//on cree un tableau avec toutes les lettres de l'alphabet
if (empty($_SESSION["available_letters"])) {
    # code...
    $_SESSION["available_letters"] =
        [
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m",
            "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
        ];
}


//on decoupe le mot
$word_table = str_split($_SESSION["random_word"]);

//on cree un tableau avec des _ et on les concatene dans un mot crypté en _
$word_size = strlen($_SESSION["random_word"]);

if (empty($_SESSION["empty_table"])) {
    $_SESSION["empty_table"] = [];
}

if (empty($_SESSION["motCache"])) {
    for ($i = 0; $i < $word_size; $i++) {
        array_push($_SESSION["empty_table"], "_");
        $_SESSION["motCache"] .= $_SESSION["empty_table"][$i];
    }
}


//on definit le nombre d'essai max
$lettre_trouve = false;
$win = null;
$loose = null;


//on récupère la lettre choisie par user et on la compare avec les lettres cryptées du mot
if (isset($_POST["user_entry"])) {
    $user_choice = $_POST["user_entry"];

    for ($i = 0; $i < sizeof($word_table); $i++) {
        if ($user_choice == strtolower($word_table[$i])) {
            $_SESSION["empty_table"][$i] = $user_choice;
            $lettre_trouve = true;
        }
    }

    //on fait des actions en fonction du choix de la lettre  
    if ($lettre_trouve) {
        $win = true;
        $_SESSION["motCache"] = implode($_SESSION["empty_table"]);
    }
    if (!$lettre_trouve) {
        $loose = true;
        $_SESSION["essai_restant"]--;
    }

    //on enleve la lettre choisie du tableau 
    $search = array_search($user_choice, $_SESSION["available_letters"]);
    if ($search != null || $search === 0) {
        # code...
        unset($_SESSION["available_letters"][$search]);
    }
}



if ($_SESSION["essai_restant"] <= 0 && in_array("_", $_SESSION["empty_table"])) {
    //on affiche un message de défaite
    $end_message = '
                    <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Too bad!</h4>
                    <p>Le mot à deviner était ' . $_SESSION["random_word"] . '</p>
                    <hr>
                    <p class="mb-0">Tu as perdu la partie. Pour rejouer, actualise la page.</p>
                    </div>
                ';
} elseif (!in_array("_", $_SESSION["empty_table"]) && $_SESSION["essai_restant"] >= 0) {
    //on affiche un message de victoire
    $end_message = '
                    <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Bravo!</h4>
                    <p>Tu as gagné avec ' . $_SESSION["essai_restant"] . ' essais restants</p>
                    <hr>
                    <p class="mb-0">Tu as gagné la partie. Pour rejouer, actualise la page.</p>
                    </div>
                ';

    setcookie("victoires", $_COOKIE["victoires"] + 1, time() + 60 * 60 * 24 * 30);
}

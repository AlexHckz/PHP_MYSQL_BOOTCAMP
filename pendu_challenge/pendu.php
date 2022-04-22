<?php

include './pendu_drawss.php';

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



//on stocke le mot 

if (!empty($_POST["data_word"]) && !empty($_POST["data_try"])) {
    $random_word = $_POST["data_word"];
    $essai_restant = intval($_POST["data_try"]);
} else {
    $random_word = $liste_mots[$random_number];
    $essai_restant = 9;
}


//on decoupe le mot
$word_table = str_split($random_word);

//on cree un tableau avec des _ et on les concatene dans un mot
$word_size = strlen($random_word);
$empty_table = [];

if (empty($_POST["data_answer"])) {
    $motCache = "";
} else {
    $motCache = $_POST["data_answer"];
}

if (empty($_POST["data_table"])) {
    for ($i = 0; $i < $word_size; $i++) {
        array_push($empty_table, "_");
        $motCache .= $empty_table[$i];
    }
} else {
    $empty_table = explode(" ", $_POST["data_table"]);
}

if (empty($_POST["data_printed"])) {
    $printed = "9";
} else {
    $printed = $_POST["data_printed"];
}


//on definit le nombre d'essai max
$lettre_trouve = false;
$win = null;
$loose = null;


//on demande a l'utilisateur de choisir une lettre 

// do {
//     $user_entry = readline("Choisis une lettre >>");
//     $user_choice = strtolower($user_entry);
//     if (!ctype_alpha($user_entry)) {
//         echo "Seules les lettres sont acceptées.\n";
//     }
// } while (!ctype_alpha($user_entry));

if (isset($_POST["user_entry"])) {

    $user_choice = $_POST["user_entry"];

    if (!ctype_alpha($_POST["user_entry"])) {
        echo "Seules les lettres sont acceptées.\n";
    } else {
        //on compare la lettre avec le tableau de mot 
        for ($i = 0; $i < sizeof($word_table); $i++) {
            if ($user_choice == strtolower($word_table[$i])) {
                $empty_table[$i] = $user_choice;
                $lettre_trouve = true;
            }
        }

        if ($lettre_trouve) {
            $win = true;
            $motCache = implode($empty_table);
        }

        if (!$lettre_trouve) {
            $loose = true;
            $essai_restant--;
            // drawPendu($essai_restant);
        }
    }
}


if ($essai_restant <= 0 && in_array("_", $empty_table)) {
    $end_message = '
                    <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Too bad!</h4>
                    <p>Le mot à deviner était ' . $random_word . '</p>
                    <hr>
                    <p class="mb-0">Tu as perdu la partie. Pour rejouer, actualise la page.</p>
                    </div>
                ';
} elseif (!in_array("_", $empty_table) && $essai_restant >= 0) {
    $end_message = '
                    <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Bravo!</h4>
                    <p>Le mot à deviner était ' . $random_word . '</p>
                    <hr>
                    <p class="mb-0">Tu as gagné la partie. Pour rejouer, actualise la page.</p>
                    </div>
                ';
}

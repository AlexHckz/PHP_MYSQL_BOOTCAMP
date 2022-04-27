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
$random_number = rand(0, $table_size);

//on stocke le mot 
$random_word = $liste_mots[$random_number];

//on decoupe le mot
$word_table = str_split($random_word);

//on cree un tableau avec des _
$word_size = strlen($random_word);
$empty_table = [];

echo "\n trouve le mot suivant => ";
for ($i = 0; $i < $word_size; $i++) {
    array_push($empty_table, "_ ");
    echo $empty_table[$i];
}
//print_r($empty_table);

$essai_perdant = 0;

do {

    echo "\n\n######################\n";
    //on definit le nombre d'essai max
    $essai_restant = 9 - $essai_perdant;
    echo "Il te reste $essai_restant essais !\n";
    $lettre_trouve = false;

    //on demande a l'utilisateur de choisir une lettre 
    do {
        $user_entry = readline("Choisis une lettre >>");
        $user_choice = strtolower($user_entry);
        if (!ctype_alpha($user_entry)) {
            echo "Seules les lettres sont acceptées.\n";
        }
    } while (!ctype_alpha($user_entry));

    //on compare la lettre avec le tableau de mot 

    for ($i = 0; $i < sizeof($word_table); $i++) {
        if ($user_choice == strtolower($word_table[$i])) {
            $empty_table[$i] = $user_choice;
            $lettre_trouve = true;
        }
    }

    //print_r($empty_table);
    echo "\n trouve le mot suivant => ";
    foreach ($empty_table as $element) {
        echo $element;
    }
    echo "\n";

    if ($lettre_trouve) {
        echo "G-A-G-N-E !!! Le mot contient la lettre.\n";
    }

    if (!$lettre_trouve) {
        echo "P-E-R-D-U !!! La lettre n'est pas dans le mot.\n";
        $essai_perdant++;
        drawPendu($essai_perdant);
    }
} while ($essai_restant > 0 && in_array("_ ", $empty_table));

if (in_array("_ ", $empty_table)) {
    $display_end_message = true;
    $end_message = "\nLe mot à deviner était $random_word\nTu as perdu la partie. Pour rejouer, relance le jeu.\n";
} else {
    $end_message = "Bravo, tu as gagné la partie.\n";
}

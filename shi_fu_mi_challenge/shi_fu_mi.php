<?php

//fonction verification de l'entrée user

include 'functions.php';

//on créée un tableau de victoires 
$victoires_amir = [];
$victoires_ordi = [];

do {
    do {
        //on demande à amir de choisir 
        $amir_choix=readline("choisir entre pierre, feuille ou ciseaux?"); 
        $amir = strtolower($amir_choix);
        $test = verifyEntry($amir_choix);  
    } while (!$test) ;

    //on fait choisir a l'ordinateur 
    $ordi=rand(1, 3);
    $ordi_choix = match (true) {
        $ordi == 1 => "pierre",
        $ordi == 2 => "feuille",
        $ordi == 3 => "ciseaux",
    };

    //on affiche les 2 choix 
    echo "\nle choix de Amir est >> $amir\n";
    echo "le choix ordinateur est >> $ordi_choix\n";

    //on compare le choix ordinateur avec le choix utilisateur 
    
    if ($amir == $ordi_choix) {
        echo "égalité, personne ne gagne\n\n";
    }
    elseif ($amir=="pierre" && $ordi_choix=="ciseaux" or $amir=="feuille" && $ordi_choix=="pierre" or $amir=="ciseaux" && $ordi_choix=="feuille"
    ) {
        echo "amir a gagné\n";
        array_push($victoires_amir, "une victoire amir");
    }
    else {
        echo "ordinateur a gagné\n";
        array_push($victoires_ordi, "une victoire ordi");
    }

    // on affiche les tableaux de victoire pour controler
    echo "\nvictoires de amir\n";
    print_r($victoires_amir)."\n";

    echo "\nvictoires de ordinateur\n";
    print_r($victoires_ordi)."\n";
    echo "\n###########################\n\n";

} while (sizeof($victoires_amir)< 3 && sizeof($victoires_ordi) < 3);

//on affiche le gagnant du jeu
if (sizeof($victoires_amir)==3) {
    echo "Amir a gagné le jeu\n";
}
elseif (sizeof($victoires_ordi)==3) {
    echo "Ordinateur a gagné le jeu\n";
}




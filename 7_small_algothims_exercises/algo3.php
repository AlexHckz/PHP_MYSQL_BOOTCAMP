<?php
    echo "\n#########################\n";
    echo "BIGGEST_NUMBER\n";
    echo "##########################\n\n";

    //on demande a user de choisir un nb

     do {
        $tmp = readline("Choose a number >>");
        if (!is_numeric($tmp)) {
            echo "Not a number, try again\n";
        }
    }

    //on verifie que c'est un nombre entier
    while(!is_numeric($tmp));
    
    
    //on lui redemande 5 fois en stockant le plus grand des nb a chaque fois
    for ($i=0; $i < 5; $i++) { 
        $tmp2 = (float) readline("Choose another number >>");
        if ($tmp < $tmp2) {
            $tmp = $tmp2;
        }
    }
    
    //on affiche le plus grand nombre a la fin
    echo "The Biggest Number is >>$tmp";

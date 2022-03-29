<?php
    echo "\n#########################\n";
    echo "BIGGEST_NUMBER\n";
    echo "##########################\n\n";

    //on demande a user de choisir un nb
    $tmp = (float) readline("Choose a number >>");
    
    //on lui redemande 5 fois en stockant le plus grand des nb a chaque fois
    for ($i=0; $i < 5; $i++) { 
        $tmp2 = (float) readline("Choose a number >>");
        if ($tmp < $tmp2) {
            $tmp = $tmp2;
        }
    }
    
    //on affiche le plus grand nombre a la fin
    echo "The Biggest Number is >>$tmp";

<?php
    echo "\n####################\n";
    echo "SUM_UNTIL_A_NUMBER\n";
    echo "####################\n\n";

    //on demande a user un nb entre 1 et 100 et verifie que c'est un nombre entier
    do {
        $tmp = readline("Choose a number between 1 and 100 >>");
        if (!is_numeric($tmp) || $tmp > 101 || $tmp < 0) {
            echo "Not an int between 1 and 100, try again\n";
        }
    } while(!is_numeric($tmp) || $tmp > 101 || $tmp < 0);
    
    //on fait la somme des chiffres de 0 jusqu'au nb
    $sum = 0;
    for ($i=0; $i <= $tmp; $i++) { 
        $sum += $i;
    }

    //on affiche la somme  
    echo "Sum from 0 to $tmp is equal to >>$sum";
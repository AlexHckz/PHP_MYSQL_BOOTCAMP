<?php
    echo "\n####################\n";
    echo "SUM_UNTIL_A_NUMBER\n";
    echo "####################\n\n";

    //on demande a user un nb entre 1 et 100
    do {
        $tmp = readline("Choose a number between 1 - 100 >>");
        if ((!is_int($tmp)) || !($tmp<101 && $tmp>0) ) {
            echo "Not an int between 1 - 100, try again\n";
        }
    }

    //on verifie que c'est un nombre entier
    while((!is_int($tmp)) || !($tmp<101 && $tmp>0));
    
    //on fait la somme des chiffres de 0 jusqu'au nb
    $sum = (integer) 0;
    for ($i=0; $i <= $tmp; $i++) { 
        $sum += $i;
        $i++;
    }

    //on affiche la somme  
    echo "Sum from 0 to $tmp is equal to >>$sum";
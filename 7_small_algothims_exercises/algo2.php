<?php
    echo "\n####################\n";
    echo "SUM_UNTIL_A_NUMBER\n";
    echo "####################\n\n";

    //on demande a user un nb entre 1 et 100
    $tmp = (integer) readline("Choose a number between 1 - 100 >>");
    
    //on fait la somme des chiffres de 0 jusqu'au nb
    $sum = (integer) 0;
    for ($i=0; $i <= $tmp; $i++) { 
        $sum += $i;
        $i++;
    }

    //on affiche la somme  
    echo "Sum from 0 to $tmp is equal to >>$sum";
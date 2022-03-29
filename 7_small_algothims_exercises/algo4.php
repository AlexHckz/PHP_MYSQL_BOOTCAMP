<?php

    echo "\n#########################\n";
    echo "ORDERED_NUMBERS\n";
    echo "##########################\n\n";

    $user_entries = [];
    
    /* 
    on demande des nombres à l'utilisateur 
    et on les stocke dans un tableau 
    jusqu'à ce que l'utilisateur dise stop
    */

    do {
        $tmp = readline("Choose a number >>");
        if (is_numeric($tmp)) {
            array_push($user_entries, $tmp);
            var_dump($user_entries);
        }
        else { 
            echo "Not a number!\n"; 
        }
    } while ($tmp !== "stop");


    //on trie le tableau

    asort($user_entries, SORT_NUMERIC);
    print_r($user_entries);

    //on affiche la reponse ordonnee
    echo "L'utilisateur a rentré les valeurs suivantes, triées dans l'ordre croissant >>\n";
    $i = 1;
    foreach ($user_entries as $user_entry) {
        echo "Entree $i >> $user_entry\n";    
        $i++;
    }


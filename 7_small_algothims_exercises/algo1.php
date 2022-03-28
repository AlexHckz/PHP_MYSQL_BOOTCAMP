<?php
    //on initialise un nombre mystere
    $mystery_number = rand(0, 100);
    echo "le nombre mystere est >> $mystery_number\n";
    
    //on repete ce bloc jusqu'à ce que l'utilisateur trouve la reponse
    do {
        $tmp = readline("Guess the number : ");
        readline_add_history($tmp);
        echo "la reponse user est >> $tmp\n";

        //on verifie que la reponse user est un nombre et on la compare avec le nombre mystere
        if(is_numeric($tmp)){
            if($tmp > $mystery_number){
                echo "less b*tch!\n";
            }
            elseif($tmp < $mystery_number){
                echo "more b*tch!\n";
            }

            //si bonne reponse, on la stocke dans une variable
            else {$good_answer = $tmp;}
        }

        else {echo "not a number b*tch!\n";}
    }
    
    while ($mystery_number != $tmp);

    if ($mystery_number == $good_answer){
        echo "Gagné b*tch!\n";}


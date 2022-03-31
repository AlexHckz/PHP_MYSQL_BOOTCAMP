<?php 
    echo "\n#########################\n";
    echo "TRYING_TO_GUESS_YOUR_NUMBER\n";
    echo "##########################\n\n";

    echo "Choose a number between 1 and 100 and keep it for yourself !\n";
    $computer_proposition = null;
    $min = 0;
    $max = 100;
    
    //on essaye de deviner le nombre 5 fois 

    do {
        # code...
    } while ($i < 6 || $solution == "equal");
    
    for ($i=1; $i < 6 || $solution == "equal" ; $i++) { 
        
        $solution = false;
        //on fait une proposition a l'utilisateur 
        $computer_proposition = rand($min, $max);

        //on demande a l'utilisateur plus, moins ou egal 
        $tmp = readline("Is your number $computer_proposition ?(Answer less/more/equal)");
        echo "\n";

        
        //si la réponse est égale, on sort de la boucle
        if ($tmp == "equal") {
            $solution = "equal";
        }
        //si la réponse est plus, on borne au minimum
        elseif ($tmp == "more") {
            $min = $computer_proposition;
        }
        //si la réponse est moins, on borne au maximum
        elseif ($tmp == "less") {
            $max = $computer_proposition;
        }
    }

    if ($solution = true) {
        echo "C'est gagné bravo!!!";
    }
    else {
        echo "J'ai perdu !!!";
    }



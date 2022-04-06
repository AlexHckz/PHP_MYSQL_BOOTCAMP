<?php
// Exercice d'évaluation préalable à l'embauche - Poste intégrateur Front-end

// Exercice 1
function operation_basique(string $operation, int $premierNb, int $deuxiemeNb)
{
    $resultat = 0;

    //controle du signe
    if ($operation != "+" && $operation != "-" && $operation != "*" && $operation != "/") {
        echo "Signe operatoire invalide\n";
        return $resultat;
    }

    //calcul
    switch ($operation) {
        case "+":
            $resultat = $premierNb + $deuxiemeNb;
            break;
        case "-":
            $resultat = $premierNb - $deuxiemeNb;
            break;
        case "*":
            $resultat = $premierNb * $deuxiemeNb;
            break;
        case "/":
            $resultat = $premierNb / $deuxiemeNb;
            break;
    }

    return $resultat;
}

echo "\nExercice 1 - operation basique\n";
echo operation_basique('-', 7, 4) . "\n";
echo "\n##############################\n";

//Exercice 2

function repetition_chaine(int $nbRepetition, string $chaineRepetition)
{
    $resultat = "";
    for ($i = 0; $i < $nbRepetition; $i++) {
        $resultat .= $chaineRepetition;
    }
    return $resultat;
}

echo "\nExercice 2 - repetition chaine\n";
echo repetition_chaine(4, 'code') . "\n";
echo "\n##############################\n";


//Exercice 3 - remplacement de chaine 

$input = "The sunset sets at twelve o\'clock";

function alphabet_position(string $input)
{
    $loweredInput = strtolower($input);
    $tableauInput = str_split($loweredInput);
    print_r($tableauInput);

    $lettres = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $chiffres = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24"];

    foreach ($tableauInput as $unChar) {

        if (in_array($unChar, $lettres)) {
            $output = str_replace($lettres, $chiffres, $unChar) . " ";
        } else {
            $output = "";
        }
        echo $output;
    }
}

alphabet_position($input);

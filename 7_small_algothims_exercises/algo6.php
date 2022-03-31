<?php
    echo "\n#########################\n";
    echo "PRIME_NUMBERS\n";
    echo "##########################\n\n";

    do {
        $tmp = readline("Choose a number greater than 1>>"); 
        if (!ctype_digit($tmp) || $tmp <= 1) {
            echo "An integer, greater than 1, please !! \n";
        }
    } while(!ctype_digit($tmp) || $tmp <= 1);

    $root = sqrt($tmp);
    $multiples = [];

    for ($i=2; $i < $tmp ; $i++) { 
        $modulo = $tmp % $i;
        if ($modulo == 0) {
            array_push($multiples, $i);
        }
    }

    array_push($multiples, $tmp);
    array_unshift($multiples, 1);


    if (sizeof($multiples) == 2) {
        echo "$tmp is a prime number, it can be divided by 1 and itself";
    }
    else {
        echo "$tmp is not a prime number, it can be divided by >>\n";
        foreach ($multiples as $multiple) {
            echo $multiple."\n";
        }
    }

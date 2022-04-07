<?php
function nbEntier()
{
    do {
        $tmp = readline("Entez un nombre entier plus grand que 0 >>");
    } while (!ctype_digit($tmp));

    if ($tmp <= 1) {
        return 1;
    } else {
        return $tmp;
    }
}
echo nbEntier();

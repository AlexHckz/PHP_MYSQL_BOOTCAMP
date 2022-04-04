<?php

//Exo 1 - Compter le nombre de caracteres dans un string 

function compterCaracteres(string $chaineCaractere)
{
    $nbCaracteres = strlen($chaineCaractere);
    echo "Le nombre de caracteres est $nbCaracteres";
    return $nbCaracteres;
}
compterCaracteres("undeuxtrois");


function miseEnformeChaine(string $chaineCaractere)
{
    $chaineMinuscule = strtolower($chaineCaractere);
    $tableauChaine = str_split($chaineMinuscule);
    $tableauChaine[0] = strtoupper($tableauChaine[0]);
    $miseEnForme = implode("", $tableauChaine);
    return $miseEnForme;
}

echo miseEnformeChaine("azetaeztrAAZEAZEAZ123 3333 ,;:");

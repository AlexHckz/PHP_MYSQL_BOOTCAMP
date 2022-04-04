<?php

//Exo 1 - Compter le nombre de caracteres dans un string 
function compterCaracteres(string $chaineCaractere)
{
    $nbCaracteres = strlen($chaineCaractere);
    return $nbCaracteres;
}
echo "Le nombre de caracères de ma chaine est " . compterCaracteres("undeuxtrois");



//Exo 2 - Mettre en forme une chaine avec la premiere lettre en MAJ
function miseEnformeChaine(string $chaineCaractere)
{
    $chaineMinuscule = strtolower($chaineCaractere);
    $tableauChaine = str_split($chaineMinuscule);
    $tableauChaine[0] = strtoupper($tableauChaine[0]);
    $miseEnForme = implode("", $tableauChaine);
    return $miseEnForme;
}

echo "Ma chaîne mise en forme retourne " . miseEnformeChaine("TesT DE miSe En FoRMe");

<?php

//Exo 1 - Compter le nombre de caracteres dans un string 
function compterCaracteres(string $chaineCaractere)
{
    $nbCaracteres = strlen($chaineCaractere);
    return $nbCaracteres;
}
//echo "Le nombre de caracères de ma chaine est " . compterCaracteres("undeuxtrois");



//Exo 2 - Mettre en forme une chaine avec la premiere lettre en MAJ
function miseEnformeChaine(string $chaineCaractere)
{
    $chaineMinuscule = strtolower($chaineCaractere);
    $tableauChaine = str_split($chaineMinuscule);
    $tableauChaine[0] = strtoupper($tableauChaine[0]);
    $miseEnForme = implode("", $tableauChaine);
    return $miseEnForme;
}

//echo "Ma chaîne mise en forme retourne " . miseEnformeChaine("TesT DE miSe En FoRMe");

//Exo 3 - Fonction Touché Coulé 


function toucheCoule(string $coordX, string $coordY)
{
    $coord = $coordX . $coordY;
    $patternX = "#^[A-J]$#";
    $patternY = '#^[0-9]$#';
    $testX = preg_match($patternX, $coordX);
    $testY = preg_match($patternY, $coordY);
    $touche = ["F3", "F4", "F5", "I5", "I6", "C9", "D9", "E9", "F9"];
    $testTouche = in_array($coord, $touche);

    if (!$testX || !$testY) {
        return "hors-jeu!";
    } elseif ($testX && $testY) {
        if ($testTouche) {
            return "touché!\n";
        } else {
            return "coulé!\n";
        }
    }
}

echo toucheCoule("Z", 35);

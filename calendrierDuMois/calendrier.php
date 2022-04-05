<?php

$monthDays = date('t');
setlocale(LC_ALL, 'fr_FR');
echo "Le mois de " . date("F Y", $mois) . " possède " . date("t", $mois) . " jours";
$nombreDeJours = intval(date("t", $mois));

<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}


$elem = readline("De quel élément voulez-vous chercher les occurrences :");

$occ = array_filter($tab, fn ($n) => $n === $elem);
echo ("Voici les occurrences de " . $elem . " : \n");
print_r($occ);

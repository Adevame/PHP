<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$r = readline("Quel élément voulez-vous modifier :");
$rep = readline("Par quoi voulez-vous le remplacer :");
$i = array_search($r, $tab);
array_splice($tab, $i, 1, array($rep));
print_r($tab);

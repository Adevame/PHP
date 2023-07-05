<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$val = readline("Saisir une valeur :");
$occ = array_count_values($tab)[$val];

echo ("L'élément " . $val . " apparaît " . $occ . " fois.");

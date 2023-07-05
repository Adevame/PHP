<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$val = readline("Saisir une valeur à mettre en fin de tableau :");

array_push($tab, $val);
print_r($tab);

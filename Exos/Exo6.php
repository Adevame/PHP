<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$val = readline("Saisir une valeur :");

echo ("La première occurrence de " . $val . " dans le tableau est à l'index : \n");

print_r(array_search($val, $tab));

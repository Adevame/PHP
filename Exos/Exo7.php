<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$val = readline("Saisir une valeur :");
$occ = array_filter($tab, fn ($n) => $n === $val);

echo ("La dernière occurrence de " . $val . " dans le tableau est à l'index : \n");
print_r(array_key_last($occ));

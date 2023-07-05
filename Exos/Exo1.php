<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = intval(readline("Valeur " . $i . " : "));
    $tab[$i] = $n;
}
print_r($tab);

$somme = array_sum($tab);
echo ("La somme des réels du tableau est : " . $somme);

<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$val = readline("Quelle valeur doit-être supprimée :");

$rem = $val - 1;
array_splice($tab, $rem, 1);
print_r($tab);

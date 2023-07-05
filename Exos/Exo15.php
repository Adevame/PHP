<?php

$tab1 = [];
$tabL1 = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL1; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab1[$i] = $n;
}

$tab2 = [];
$tabL2 = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL2; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab2[$i] = $n;
}

print_r($tab1);
print_r($tab2);

$tabm = array_merge($tab1, $tab2);
print_r($tabm);

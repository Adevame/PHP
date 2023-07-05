<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

array_rev
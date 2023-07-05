<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$key = intval(readline("Entrez la clé de la valeur recherchée :"));
$val = $tab[$key] ?? null;
echo ("La valeur correspondante à cette lé est : " . $val . ".");

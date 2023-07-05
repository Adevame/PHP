<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Eléments " . $i . " : ");
    $tab[$i] = $n;
}
print_r($tab);

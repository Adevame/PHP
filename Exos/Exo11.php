<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = readline("Valeur " . $i . " : ");
    $tab[$i] = $n;
}

$dec = intval(readline("Où voulez-vous insérer un élément : \n 1-Au début \n 2-A la fin \n 3-Au milieu"));

if ($dec === 1) {
    $val = readline("Saisir une valeur à mettre au début du tableau :");
    array_splice($tab, 0, 0, $val);
    print_r($tab);
} else if ($dec === 2) {
    $val = readline("Saisir une valeur à mettre en fin de tableau :");
    array_push($tab, $val);
    print_r($tab);
} else if ($dec === 3) {
    $val = readline("Saisir une valeur à mettre au milieu de tableau :");
    $ind = $tabL / 2;
    array_splice($tab, $ind, 0, $val);
    print_r($tab);
} else {
    readline("Réponse inorrecte !");
}

<?php

$tab = [];
$tabL = intval(readline("Saisir une taille de tableau : "));

for ($i = 0; $i < $tabL; $i++) {
    $n = intval(readline("Valeur " . $i . " : "));
    $tab[$i] = $n;
}
print_r($tab);

$somme = array_sum($tab);
$moyenne = $somme / $tabL;
$produit = array_product($tab);

echo ("La somme du tableau est : " . $somme . " \n" . " La moyenne du tableau est : " . $moyenne . " \n" . "Le produit du tableau est :" . $produit);

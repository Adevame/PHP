<?php

$nbcoups = 1;
$nbgen = rand(1, 100);
$nbsaisi = intval(readline("Sasissez un nombre entre 1 et 100 : "));

while ($nbsaisi != $nbgen) {
    $nbcoups = $nbcoups + 1;
    if ($nbsaisi > $nbgen) {
        $nbsaisi = intval(readline("Saisissez un nombre plus petit : "));
    } else {
        $nbsaisi = intval(readline("Sasissez un nombre plus grand : "));
    }
}

echo ("Bravo, vous avez trouvé en " . $nbcoups . " coups");

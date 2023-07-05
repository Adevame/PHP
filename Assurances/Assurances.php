<?php

$age = intval(readline("Saisissez votre âge : "));
$tpsPermis = intval(readline("Saisir depuis combien d'années possédez-vous le permis : "));
$fid = intval(readline("Sasir depuis combien d'années êtes-vous assuré chez nous : "));
$nbAccidents = intval(readline("Combien d'accidents avez-vous causé : "));
$cas0 = ("Vous ne pouvez pas être assuré chez nous.");
$cas1 = ("Vous êtes elligible au tarif rouge.");
$cas2 = ("Vous êtes elligible au tarif orange.");
$cas3 = ("Vous êtes elligible au tarif vert.");
$cas4 = ("Vous êtes elligible au tarif bleu.");

if ($age < 25 && $tpsPermis < 2) {
    if ($nbAccidents === 0) {
        $rep = $cas1;
    } else {
        $rep = $cas0;
    }
}
if (($age < 25 && $tpsPermis >= 2) || ($age >= 25 && $tpsPermis < 2)) {
    if ($nbAccidents === 0) {
        $rep = $cas1;
    } else if ($nbAccidents < 2) {
        $rep = $cas2;
    } else {
        $rep = $cas0;
    }
} else {
    if ($nbAccidents === 0) {
        $rep = $cas3;
    } else if ($nbAccidents === 1) {
        $rep = $cas2;
    } else if ($nbAccidents < 3) {
        $rep = $cas1;
    } else {
        $rep = $cas0;
    }
}
if ($fid >= 5 && $rep != $cas0) {
    if ($rep == $cas1) {
        $rep = $cas2;
    } else if ($rep == $cas2) {
        $rep = $cas3;
    } else {
        $rep = $cas4;
    }
}

echo $rep;

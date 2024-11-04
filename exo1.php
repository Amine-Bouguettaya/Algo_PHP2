<h1>Exercice 1</h1>

<p>Créer une fonction parsonnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.</p>

<h2>Résultat</h2>

<style>
    .red {
        color : red;
    }
</style>

<?php

$texte = "Mon texte en paramètre";

echo convertirMajRouge($texte);
function convertirMajRouge($texte) {
    $texte = mb_strtoupper($texte);
    $texte = "<p class='red'>$texte</p>";
    return $texte;
}
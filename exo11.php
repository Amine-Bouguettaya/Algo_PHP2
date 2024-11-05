<h1>Exercice 10</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’unechaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php


echo formaterDateFr("2018-02-23");

function formaterDateFr($date) {
    // $date = date_create($date);
    // $result = date_format($date, 'l d F o');
    setlocale(LC_TIME, "fr_FR");
    $result = strftime("%A %d %B %G", strtotime($date));
    return $result;
}
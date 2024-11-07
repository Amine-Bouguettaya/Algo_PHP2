<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’unechaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php


$jours = [
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday" => "Vendredi",
    "Saturday" => "Samedi",
    "Sunday" => "Dimanche" 
];

$month = [
    "January" => "Janvier",
    "February" => "Février",
    "March" => "Mars",
    "April" => "Avril",
    "May" => "Mai",
    "June" => "Juin",
    "July" => "Juillet",
    "August" => "Aout",
    "September" => "Septembre",
    "October" => "Octobre",
    "November" => "Novembre",
    "December" => "Décembre" 
];

echo traduction_date(formaterDateFr("2018-02-23"), $jours, $month);

function traduction_date($date, $jour, $mois) {
    foreach ($jour as $jour_en => $jour_fr) {
        $date = str_replace($jour_en, $jour_fr, $date);
    }
    foreach ($mois as $mois_en => $mois_fr) {
        $date = str_replace($mois_en, $mois_fr, $date);
    }
    return $date;
}

function formaterDateFr($date) {
    $date = date_create($date);
    $result = date_format($date, 'l d F o');
    return $result;
}
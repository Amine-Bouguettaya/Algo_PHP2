<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur", "Madame", "Mademoiselle").</p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

echo afficherRadio($nomsRadio);

function afficherRadio($nomsRadio) {
    $result = "<select action='exo9.php' multiple='false'>";
    foreach ($nomsRadio as $civilite) {
        $result .= "<input type='radio' id=$civilite name=$civilite value=$civilite><label for=$civilite>$civilite</label><br>";
    }
    $result .= "</select>";
    return $result;
}
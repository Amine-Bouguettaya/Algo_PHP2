<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements) {
    $result = "<select name'civilite'>";
    foreach ($elements as $civilite) {
        $result .= "<option value=$civilite>$civilite</option>";
    }
    $result .= "</select>";
    return $result;
}

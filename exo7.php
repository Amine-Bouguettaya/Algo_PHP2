<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements = [
    "choix 1" => "",
    "choix 2" => "checked",
    "choix 3" => ""
];

echo genererCheckbox($elements);

function genererCheckbox($elements) {
    $result = "";
    foreach ($elements as $choice => $ischeck) {
        if ($ischeck == "checked") {
            $result .= "<input type='checkbox' id=$choice name=$choice value=$choice checked><label for=$choice>$choice</label><br>";
        }
        else {
            $result .= "<input type='checkbox' id=$choice name=$choice value=$choice><label for=$choice>$choice</label><br>";
        }
    }
    return $result;
}
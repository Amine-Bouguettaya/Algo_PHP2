<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];

echo afficherInput($nomsInput);

function afficherInput($nomsInput) {
    $result = "<form action='exo5.php' method='POST'>";
    foreach($nomsInput as $content) {
        $result .= "$content:<br><input type='text' name=$content><br>";
    }
    return $result;
}
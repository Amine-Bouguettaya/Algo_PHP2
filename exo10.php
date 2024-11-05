<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>

<h2>Résultat</h2>

<?php

$elements = ["Nom", "Prénom", "Adresse", "e-mail", "ville"];
$civilite = ["Masculin", "Féminin", "Autre"];
$intituler = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

echo afficherForm($elements, $civilite, $intituler);

function afficherForm($elements, $civilite, $intituler) {
    $result = "<form action='exo5.php' method='POST'>";
    foreach($elements as $content) {
        $result .= "$content:<br><input type='text' name=$content><br><br>";
    }
    $result .= "<select name'civilite'>";
    foreach ($civilite as $contenu) {
        $result .= "<option value=$contenu>$contenu</option>";
    }
    $result .= "</select><br><br>";
    $result .= "<select name'Intituler'>";
    foreach ($intituler as $attribut) {
        $result .= "<option value=$attribut>$attribut</option>";
    }
    $result .= "</select><br><br><br><input type='submit'>";
    return $result;
}
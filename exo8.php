<h1>Exercice 8</h1>

<p>Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>

<h2>Résultat</h2>

<?php

$url = "https://my.mobirise.com/data/userpic/764.jpg";

echo repeterImage($url, 4);

function repeterImage($url, $n) {
    $result = "";
    while ($n != 0) {
        $result .= "<img src=$url alt='image'>";
        $n -= 1;
    }
    return $result;
}
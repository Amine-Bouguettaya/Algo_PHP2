<h1>Exercice 4</h1>

<p>À partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<h2>Résultat</h2>

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

asort ($capitales);
echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>
                <tbody>";
    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                        <td><a href='https://fr.wikipedia.org/wiki/".$capitale."' target='_blank'>lien</a></td>
                    </tr>";
    }
    $result .= "</tbody></table>";
    return $result;
}

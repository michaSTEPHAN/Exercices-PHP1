<h1>Exercice13</h1>
<p>SCalculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.<br></p>
<h2>Résultat</h2>

<?php

$notes = [12,15,12,10.5,18,12.55];

$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

for ($i = 0; $i < $nbNotes; $i++) { 
    $sesnotes .= "$notes[$i] ";
}

echo "Les notes obtenues par l’élève sont : $sesnotes<br>";
echo "Sa moyenne générale est donc de : $moyenne<br>";

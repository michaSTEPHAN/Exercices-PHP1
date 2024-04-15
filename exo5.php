<h1>Exercice5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.<br></p>
<h2>Résultat</h2>

<?php

$montant_F = 100;
$montant_E = round($montant_F / 6.55957,2);

echo "Montant en francs : $montant_F<br>";
echo "$montant_F francs = $montant_E € <br>";

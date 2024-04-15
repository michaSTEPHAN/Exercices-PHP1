<h1>Exercice8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre.<br></p>
<h2>Résultat</h2>

<?php

$Nbre = 5;

echo "SOLUTION 1 = FOR<br>";
echo "Table de $Nbre : <br>";

for($i = 1; $i <= 10; $i++) {
    $calcul = $Nbre * $i;
    echo "$i x $Nbre = $calcul<br>";
}

echo "<br>SOLUTION 2 = WHILE<br>";
echo "Table de $Nbre : <br>";

$j = 1;
while($j <= 10) {
    $calcul = $Nbre * $j;
    echo "$j x $Nbre = $calcul<br>";
    $j++;
}

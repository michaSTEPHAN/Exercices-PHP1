<h1>Exercice11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
<h2>Résultat</h2>

<?php

$marques = ["Dacia", "Mercedes", "Toyota", "BMW"];
$nbMarques = count($marques);

echo "Il y a $nbMarques marques de voitures dans le tableau :<br><ul>"; 

// for($i = 0; $i < $nbMarques; $i++) {
//     // echo "$marques[$i]<br>";
//     echo "<li>$marques</li>";
// }
foreach ($marques as $marque) {;
    echo "<li>$marque</li>";
}
echo "</ul>";

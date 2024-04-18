<h1>Exercice14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).<br></p>
<h2>Résultat</h2>

<?php

// $date = new DateTime(); 
// echo "$date<br>";
// echo "age de la personne <br>";

$dateNaissance = new DateTime('1975-04-14');
//$now = new DateTime('2018-05-21');
$now = new DateTime();

// ->diff(param DateTime) retourne un objet DateInterval retourné par la fonction diff de l'objet DateTime
// utilisable dans les deux sens ($now->...)
$diff = $dateNaissance->diff($now);

echo "Age de la personne " . $diff->format("%y ans %m mois %d jours");
<h1>Exercice1</h1>
<p>Soit la phrase « Notre formation DL commence aujourd'hui ».<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).<br></p>
<h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";   // string

// Compter le nombre de caractères (espaces inclus !)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase « $chaineDeCaracteres » contient $nbCaracteres caractères.<br>";

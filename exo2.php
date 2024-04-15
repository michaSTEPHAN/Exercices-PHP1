<h1>Exercice2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.<br></p>
<h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";   // string

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase « $chaineDeCaracteres » contient $nbMots mots.<br>";

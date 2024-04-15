<h1>Exercice4</h1>
<p>Soit la phrase « Notre formation DL commence aujourd'hui ».<br>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.<br></p>
<h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Engage le jeu que je le gagne"; 

// Vérifier qu'une phrase est un palindrome
$chaineDeCaracteres_SE = strtolower(str_replace(' ', '', $chaineDeCaracteres));
$PhraseInverse = strtolower(strrev($chaineDeCaracteres_SE));

// echo "$chaineDeCaracteres_SE<br>";
// echo "$PhraseInverse<br>";

if ($chaineDeCaracteres_SE == $PhraseInverse) {
    echo "La phrase « $chaineDeCaracteres » est un palindrome.<br>";
} else {
echo "La phrase « $chaineDeCaracteres » n'est pas un palindrome.<br>";
}

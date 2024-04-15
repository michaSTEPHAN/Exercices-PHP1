<h1>Exercice3</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.<br></p>
<h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";   // string

// On remplace aujourd'hui par demain
$nvMot = str_replace("aujourd'hui", "demain", $chaineDeCaracteres);

echo "Ancienne phrase : « $chaineDeCaracteres ».<br>";
echo "Nouvelle phrase : « $nvMot ».<br>";

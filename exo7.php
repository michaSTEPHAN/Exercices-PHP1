<h1>Exercice7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
  - Poussin : entre 6 et 7 ans<br>
  - Pupille : entre 8 et 9 ans<br>
  - Minime : entre 10 et 11 ans<br>
  - Cadet : à partir de 12 ans<br>
  - Si la catégorie n’est pas gérée, merci de le préciser.<br></p>
<h2>Résultat</h2>

<?php

$AgeEnfant = 15;

if($AgeEnfant >= 12) {
    $Categorie = "Cadet";
} elseif ($AgeEnfant >= 10) {
    $Categorie = "Minime";
} elseif ($AgeEnfant >= 8) {
    $Categorie = "Pupille";
} elseif ($AgeEnfant >= 6) {
    $Categorie = "Poussin";
} elseif ($AgeEnfant < 6) {   
    $Categorie = "Aucune";
}

if ($Categorie == "Aucune") {
    echo "L'enfant qui a $AgeEnfant ans appartient à aucune catégorie.<br>";
} else {
    echo "L'enfant qui a $AgeEnfant ans appartient à la catégorie $Categorie.<br>";
}

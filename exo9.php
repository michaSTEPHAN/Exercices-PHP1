<h1>Exercice9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br><br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).<br></p>
<h2>Résultat</h2>

<?php

$Sexe = "H";
$Age  = 40;

echo "Age : $Age<br>";
echo "Sexe : $Sexe<br>";

//-------------------------------------------------------
// VERSION 1 : SANS BOOLEENS
//-------------------------------------------------------
if( $Sexe == "H" && $Age > 20 || $Sexe == "F" && $Age > 17 && $Age < 36) {
    echo "La personne est imposable.";
} else {
    echo "La personne n'est pas imposable.";  
}

//-------------------------------------------------------
// VERSION 2 : AVEC BOOLEENS
//-------------------------------------------------------
// $imposable = false;
// if($Sexe == "H" and $Age > 20) {
//     $imposable = true;
// } 
// if($Sexe == "F" and $Age > 17 and $Age < 36) {
//     $imposable = true;
// }
// if ($imposable == true) {
//     echo "La personne est imposable.";
// } else {
//     echo "La personne n'est pas imposable.";  
// }

<h1>Exercice6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2).<br></p>
<h2>Résultat</h2>

<?php

$PrixUnit = 9.99;
$Qty = 5;
$Tx_TVA = 0.2;
// $Mt_Facture = ($PrixUnit * $Qty ) * 1.2;
$Mt_Facture = ($PrixUnit * $Qty ) * (1 + $Tx_TVA);

echo "Prix unitaire de l'article : $PrixUnit €<br>";
echo "Quantité : $Qty<br>"; 
echo"Taux de TVA : $Tx_TVA<br>";
echo"Le montant de la facture à régler est de : $Mt_Facture €<br>";

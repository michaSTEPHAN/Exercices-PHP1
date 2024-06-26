<h1>Exercice10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.<br></p>
<h2>Résultat</h2>

<?php

$MontantaPayer = 152;
$MontantVersé  = 200;
$MontantaRendre = $MontantVersé - $MontantaPayer;

echo "Montant à payer : $MontantaPayer €<br>";
echo "Montant versé : $MontantVersé €<br>";
echo "A rendre : $MontantaRendre €<br>";
echo "********************************************<br>";

//--------------------------------------------------------------------------
// VERSION AVEC INTDIV
//--------------------------------------------------------------------------
$NbBillet10 = 0;
$NbBillet5  = 0;
$NbPiece2   = 0;
$NbPiece1   = 0;

if (intdiv($MontantaRendre,10) > 0) {
    $NbBillet10 = intdiv($MontantaRendre,10);
    $MontantaRendre -= ($NbBillet10*10);
}
if (intdiv($MontantaRendre,5) > 0) {
    $NbBillet5 = intdiv($MontantaRendre,5);
    $MontantaRendre -= ($NbBillet5*5);
}
if (intdiv($MontantaRendre,2) > 0) {
    $NbPiece2 = intdiv($MontantaRendre,2);
    $MontantaRendre -= ($NbPiece2*2);
}
elseif (intdiv($MontantaRendre,1) > 0) {
    $NbPiece1 = intdiv($MontantaRendre,1);
    $MontantaRendre -= ($NbPiece1*1);
}
echo "Rendu de monnaie :<br>";
echo "$NbBillet10 billets de 10 € - $NbBillet5 billets de 5 € - $NbPiece2 pièces de 2 € - $NbPiece1 pièces de 1 €<br>";    

//--------------------------------------------------------------------------
// "MA" VERSION AVEC WHILE
//--------------------------------------------------------------------------
// if ($MontantaRendre <= 0) {
//     echo "Il n'y a pas de monnaie à rendre <br>";
// } else {
//     $NbBillet10 = 0;
//     $NbBillet5  = 0;
//     $NbPiece2   = 0;
//     $NbPiece1   = 0;

//     while ($MontantaRendre > 0) {
//         if ($MontantaRendre > 10) {
//             $NbBillet10++;
//             $MontantaRendre-=10;
//         } elseif ($MontantaRendre > 5) {
//             $NbBillet5++;  
//             $MontantaRendre-=5; 
//         } elseif ($MontantaRendre > 2) {
//             $NbPiece2++;
//             $MontantaRendre-=2; 
//         } else {
//             $NbPiece1++; 
//             $MontantaRendre-=1; 
//         }    
//     }
//     echo "Rendu de monnaie :<br>";
//     echo "$NbBillet10 billets de 10 € - $NbBillet5 billets de 5 € - $NbPiece2 pièces de 2 € - $NbPiece1 pièces de 1 €<br>";    
// }

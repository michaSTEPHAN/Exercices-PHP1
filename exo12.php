<h1>Exercice12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)<br></p>
<h2>Résultat</h2>

<?php

$langues = [
    "Louis" => "FRA",
    "Pablo" => "ESP",
    "Bryan" => "ENG",
    "Peter" =>  "ALL",
    "Ming"  => "CHI"
];

// ksort    -> trier sur la clé (A à Z)
// krsort   -> trier sur la clé (Z à A) r = reverse
// asort    -> trier sur la valeur (A à Z)
// arsort   -> trier sur la valeur (Z à A)
ksort($langues);

foreach($langues as $prenom => $langue) {
    // echo "$prenom $langue <br>";
    echo RenvoiBonjour($langue)." ".$prenom."<br>";
}

function RenvoiBonjour($langue) {
    // echo "entree fonction : $langue<br>";
    // echo $bonjour[$langue];

    $bonjour = [
        "FRA" => "Salut ", 
        "ESP" => "Hola ", 
        "CHI" => "Nǐ Hǎo",
        "ENG" => "Hello ",
        "ALL" => "Hallo "
    ];

    $MessBonjour = $bonjour[$langue];

    // if ($langue == "FRA") {
    //     $MessBonjour = "Bonjour";    
    // } elseif ($langue == "ESP") {
    //     $MessBonjour = "Hola";
    // } elseif ($langue == "ENG") {
    //     $MessBonjour = "Hello";
    // } else {
    //     $MessBonjour = "Hallo";    
    // }    
    
    return $MessBonjour;
}

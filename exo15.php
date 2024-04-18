<h1>Exercice15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;<br></p>
<h2>Résultat</h2>

<?php

// Création de la classe Personne
class Personne {

    // Déclaration des attributs
    private $_nom;
    private $_prenom;
    private $_dateNaissane;

    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //                       Dans la suite du code on utilisera "$this->_nom" pour tester/renvoyer "STEPHAN" 
    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
    }

    // METHODE calculerAge qui renvoi l'age de la personne
    public function calculerAge() {
        // $dateNaissance = "15-06-1995";
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($this->_dateNaissance), date_create($aujourdhui));
        return $diff->format('%y');
    }

    // METHOSE genereInfos : Créer la chaine de caractère à renvoyer
    public function genereInfos(): string {
        $age = $this->calculerAge();
        return $this->_prenom.' '.$this->_nom." a ".$age." ans";
    }

    // METHODE __toString()
    // La méthode magique __toString() va être appelée dès que l’on va traiter 
    // un objet comme une chaine de caractères (par exemple lorsqu’on tente d’echo un objet).
    public function __toString() {
        return $this->genereInfos();
    }

}

$p1 = new Personne("STEPHAN","Pauline","2015-04-06");
$p2 = new Personne("STEPHAN","Marion","2012-05-23");
$p3 = new Personne("STEPHAN","Isabelle","1984-02-19");
$p4 = new Personne("STEPHAN","Mickael","1975-04-14");
echo $p1."<br>";
echo $p2."<br>";
echo $p3."<br>";
echo $p4;
<?php

class Compteur{
    public static $nbInstanceClass = 0;
    // propriété appartenant à la classe
    public $nbInstanceObjet = 0;
    // propriété appartenant à l'objet

    public function __construct(){
        ++self::$nbInstanceClass;
        // on incrémente $nbInstanceClass à chaque instanciation de la classe
        // équivaut à faire $self::$nbInstanceClass + 1
        ++$this->nbInstanceObjet; 
        // on incrémente $nbInstanceObjet dans l'objet en cours à chaque création d'objet
        // équivaut à faire $this->nbInstanceObjet + 1
    }

}

// -----------------------

$c1 = new Compteur; //nbInstanceClass = 1 - nbInstanceObjet = 1
$c2 = new Compteur; //nbInstanceClass = 2 - nbInstanceObjet = 1
$c3 = new Compteur; //nbInstanceClass = 3 - nbInstanceObjet = 1
$c4 = new Compteur; //nbInstanceClass = 4 - nbInstanceObjet = 1
$c5 = new Compteur; //nbInstanceClass = 5 - nbInstanceObjet = 1

// On a créé 5 objets issus de la classe Compteur.
// Donc le constructeur a été exécuté 5 fois.

echo "Nombre de fois que la classe a été instanciée : " . Compteur::$nbInstanceClass . ". <br>";
// Affiche 5. La classe a été instanciée 5 fois.

echo "Nombre de fois que l'objet a été instancié : " . $c5->nbInstanceObjet . ". <br>"; 
// Affiche 1. L'objet en cours n'a été instancié qu'une fois. 

/*

    A retenir :
        La classe a "produit" 5 objets.
        Chaque objet a été "produit" 1 fois. 
        
    Une classe peut produire plusieurs objets mais un objet ne peut venir que d'une classe. 
*/

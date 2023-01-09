<?php

class Vehicule{
    private static $marque = "BMW";
    private $couleur = "noire";

    // getter pour propriété non statique
    public function getCouleur(){ 
        return $this->couleur;
    }

    // getter pour propriété statique
    public function getMarque(){
        return self::$marque;
    }

    // setter pour propriété non statique
    public function setCouleur($arg){
        $this->couleur = $arg;
    }

    // setter pour propriété statique
    public function setMarque($arg){
        self::$marque = $arg;
    }

}

// ------------------------------

$vehicule1 = new Vehicule;
echo "Vehicule1 est de marque " . $vehicule1->getMarque() . " et de couleur " . $vehicule1->getCouleur() . ".<br>";

$vehicule2 = new Vehicule;
echo "Vehicule2 est de marque " . $vehicule2->getMarque() . " et de couleur " . $vehicule2->getCouleur() . ".<br>";

// Exercice : créez un troisième véhicule et définissez sa couleur comme rouge. Vérifiez grâce à un affichage que ça a bien fonctionné. 

$vehicule3 = new Vehicule;
$vehicule3->setCouleur('rouge');
echo "Vehicule3 est de marque " . $vehicule3->getMarque() . " et de couleur " . $vehicule3->getCouleur() . ".<br>";


$vehicule4 = new Vehicule;
echo "Vehicule4 est de marque " . $vehicule4->getMarque() . " et de couleur " . $vehicule4->getCouleur() . ".<br>";
// Dans ce quatrième objet on revient bien à la couleur noire, donc on a bien modifié la couleur uniquement pour l'objet 3



// Exercice : créez un cinquième véhicule et changez sa marque. Vérifiez avec un affichage que ça a bien fonctionné. 

$vehicule5 = new Vehicule;
$vehicule5->setMarque('Peugeot');
echo "Vehicule5 est de marque " . $vehicule5->getMarque() . " et de couleur " . $vehicule5->getCouleur() . ".<br>";



$vehicule6 = new Vehicule;
echo "Vehicule6 est de marque " . $vehicule6->getMarque() . " et de couleur " . $vehicule6->getCouleur() . ".<br>";
// Quand on change un élément appartenant à la classe, les objets suivants sont impactés. A partir du vehicule6, la marque sera "peugeot" et plus "BMW" par défaut


// A retenir : une propriété statique est toujours modifiée définitivement et pas uniquement au sein de l'objet en cours. 
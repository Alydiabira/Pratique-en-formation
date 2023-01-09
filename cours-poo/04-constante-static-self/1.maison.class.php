<?php

class Maison{
    private static $nbPieces = 7; //appartient à la classe
    public static $espaceTerrain = '500m²'; //appartient à la classe
    public $couleur = "blanc"; //appartient à l'objet
    private $nbPortes = 10; // appartient à l'objet

    const HAUTEUR = '10m'; //appartient à la classe
    // pour créer une constante dans la classe, on utilise le mot clé const, en procédural on utilise la fonction prédéfinie define(NOM DE CONSTANTE, valeur);

    public static function getNbPieces(){
        return self::$nbPieces;
        // self permet d'accéder à la classe (équivalent pour la classe de $this) et :: est le symbole utilisé avec la classe (équivalent de la flèche)
        // getter pour une propriété statique (qui appartent à la classe)
    }

    public function getNbPortes(){
        return $this->nbPortes;
        // getter pour une propriété non statique (qui appartient à l'objet)
    }

}



$maison1 = new Maison;

// echo $maison1->espaceTerrain;
// Met une erreur. On ne peut pas accéder à une propriété statique à travers l'objet.

echo "Nombre de pièces : " . Maison::getNbPieces() . ".<br>";
// Je passe par la classe pour accéder au nombre de pièces

echo "Espace terrain : " . Maison::$espaceTerrain . ".<br>";

echo 'Hauteur : ' . Maison::HAUTEUR . ".<br>";


// echo Maison::$couleur;
// erreur, je ne peux pas appeler une propriété publique en passant par la classe

// echo Maison::getNbPortes();
// erreur, je ne peux pas appeler une méthode publique en passant par la classe

echo $maison1::$espaceTerrain;
// Ça devrait donner une erreur (on utilise :: sur un objet et pas sur la classe) mais ça marche. C'est une des failles de PHP. 


/*
    Opérateurs :
        $objet-> élément d'un objet à l'extérieur de la classe
        $this-> élement d'un objet à l'intérieur de la classe
        class:: élément d'une classe à l'extérieur de la classe
        self:: élément d'une classe à l'intérieur de la class

    Différence entre define() et const :
        define() permet de créer des constantes dans l'espace global
        const permet de créer des constantes de classe
    
    Différence entre constante et static :
        Les deux appartiennent à la classe
        La constante ne changera pas de valeur. 
        La statique peut changer de valeur. 

*/
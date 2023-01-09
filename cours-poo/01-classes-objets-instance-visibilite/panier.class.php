<?php

// Les fichiers en .class.php contiennent uniquement la classe et n'ont pas de html/css dedans

// Pour rappel : Une classe est un modèle, l'objet est construit grâce à ce modèle (classe : plan de construction/ objet : maison). Une classe peut "enfanter" plusieurs objets. Un objet ne peut être issu que d'une classe. 

class Panier{
    public $nbProduits;
    // propriété avec visibilité publique

    public function ajouterArticle(){
        // méthode avec visibilité publique
        return 'L\'article a été ajouté';
    }

    protected function retirerArticle(){
        // méthode avec visibilité protected
        return 'L\'article a été retiré';
    }

    private function afficherArticle(){
        // méthode avec visibilité private
        return 'Voici les articles';
    }
}


// A noter : dans un fichier de classe réel (et pas étudiant) on ne met rien d'autre dedans que la classe. Ici, on va faire des tests pour le cours. 

$panier1 = new Panier;
// new = instancie la classe. Ici, on crée un premier objet $panier1 issu de la classe Panier.

var_dump($panier1);
// affiche le nom de la classe, la référence de l'objet (ici 1) et les propriétés publiques contenues. On ne peut pas voir les méthodes grâce au var_dump

var_dump(get_class_methods($panier1));
// get_class_methods() permet d'accéder aux méthodes publiques contenues dans la classe dont est issu l'objet. 

echo "<br>";

$panier1->nbProduits = 5;
// On affecte 5 à nbProduits dans notre objet

echo "Panier1 : " . $panier1->nbProduits . ' produits <br>';
// Pour accéder à la valeur contenue dans une propriété de l'objet on passe par l'objet pour l'afficher

echo 'Panier1 : ' . $panier1->ajouterArticle() . "<br>";
// De même, pour utiliser une méthode publique, on passe directement par l'objet. 

// echo 'Panier1 : ' . $panier1->retirerArticle() . "<br>";
// Affiche une erreur. Un élément protected est accessible uniquement dans la classe où il a été déclaré et dans ses classes héritières

// echo 'Panier1 : ' . $panier1->afficherArticle() . "<br>";
// Affiche une erreur. Un élément private n'est accessible que dans la classe où il a été déclaré. 



// ------------------------

/*

    A retenir :
        Niveaux de visibilité :
            - Public : accessible de partout
            - Protected : accessible uniquement dans la classe et dans ses classes héritières
            - Private : accessible uniquement dans la classe

        Divers :
            - New est un mot-clé permettant d'effectuer une instanciation
            - Une classe peut produire plusieurs objets. 
            - $panier1 représente l'objet issu de la classe Panier

*/
<?php


class Personne{
    public $prenom;
    private $nom;


    // Le setter permet de modifier la valeur d'une propriété private
    public function setNom($nom){
        if(is_string($nom)){
            // is_string() est une fonction prédéfinie qui vérifie si la valeur contenue dans une variable est bien une chaine de caractères
            $this->nom = $nom;
            // $this représente l'objet en cours
            // ici, on vérifie que le nom envoyé est bien une chaine de caractère, si ça l'est, on affecte à la variable $nom contenue dans l'objet en cours, la valeur envoyée.
        }
    }

    // Le getter permet d'accéder à la valeur d'une propriété private
    public function getNom(){
        return $this->nom;
        // Je fais un return de la valeur de la propriété contenue dans l'objet en cours
    }

}


// --------------------

$personne1 = new Personne;

$personne1->prenom = "Magali";
echo $personne1->prenom . "<br>";

// $personne1->nom = "Milbergue";
// echo $personne1->nom . "<br>";
// On ne peut pas modifier ou accéder à la propriété "nom" en direct vu qu'elle est private. On va devoir créer des getters et des setters

$personne1->setNom('Milbergue');
// le setter met permet de changer le nom contenu dans mon objet
echo $personne1->getNom() . "<br>";
// le getter me permet d'accéder au nom contenu dans mon objet


// ---------------

$personne2 = new Personne;
echo $personne2->prenom . "<br>";
// Cette ligne ne donne aucun résultat parce que c'est un nouvel objet donc la propriété est toujours nulle.

echo $personne2->getNom() . "<br>";
// Cette ligne ne donne aucun résultat parce qu'on a réinstancié l'objet donc la propriété est nulle.

//-------------------------

/*
    A retenir :
        - $this représente l'objet en cours. 
        - les getters (voir) et setters (affecter) permettent de contrôler l'intégrité des données, de les protéger. 

        - Mettre les attributs en private permet d'éviter qu'ils soient modifiés dans le code sans vérification (il s'agit d'une bonne contrainte)

*/
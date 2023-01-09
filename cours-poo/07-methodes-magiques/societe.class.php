<?php

class Societe{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct()
    {
        echo "Coucou ! <hr>";
    }
    // Le constructeur (voir fichier 3.etudiant.class.php dans dossier /02/) est une méthode magique qui s'exécute automatiquement à la création d'un objet. Ici, à chaque nouvel objet, on affichera "coucou !". (On peut mettre tout ce qu'on veut dans la méthode __construct())

    public function __set($name, $value)
    {
        echo "La propriété $name n'existe pas, la valeur $value n'a donc pas pu être affectée ! <hr>";
    }

    // La méthode magique __set() va empêcher la création d'une nouvelle propriété dans l'objet quand on essaie d'affecter une valeur à une propriété qui n'existe pas. Elle va ensuite nous permettre d'afficher un message d'erreur personnalisé, plus propre et plus compréhensible. 


    public function __get($name)
    {
        echo "La propriété $name n'existe pas, on ne peut donc pas l'afficher. <hr>";
    }

    //la méthode magique __get() va nous permettre d'afficher un message d'erreur personnalisé en cas de tentative d'affichage d'une propriété inexistante. 

    public function __call($name, $arguments)
    {
        echo "Tentative d'exécution de la méthode $name. Cette méthode n'existe pas. (Arguments : " . implode(", ", $arguments) . ") <hr>";
        // Rappel : implode() = méthode prédéfinie qui permet de récupérer les valeurs contenues dans un tableau (array) et de les afficher sous forme de chaîne de caractère, en séparant chaque valeur avec un séparateur (premier argument)
        //Ici, les arguments de la méthode sont donnés sous forme de tableau donc on a besoin d'implode pour y accéder. 
    }

    // La méthode magique __call() va nous permettre d'afficher un message d'erreur personnalisé en cas de tentative d'exécution d'une méthode inexistante. 


}


$societe1 = new Societe;

// $societe1->villes = "Paris";

// echo "<pre>";
// print_r($societe1);
// echo "</pre>";
// 1er test : lorsque nous tentons d'affecter une valeur à une propriété inexistante, ça fonctionne et ça ajoute la propriété ainsi que la valeur associée à l'objet. C'est un comportement anormal et problématique. 

// echo $societe1->titre;
// 2eme test : lorsque nous tentons d'afficher une valeur contenue dans une propriété inexistante, ça ne marche pas. C'est un comportement normal, mais l'erreur affichée est une erreur adressée aux professionnel·les et pas aux visiteuses et visiteurs. 

// echo $societe1->methode();
// 3eme test : lorsque nous tentons d'exécuter une méthode inexistante, ça ne marche pas, on a une erreur fatale. C'est un comportement normal, mais l'erreur affichée n'est pas propre pour des visiteurs ou visiteuses.


// Test d'affection d'une valeur à une propriété inexistante --- avec méthode magique __set()
$societe1->pays = "France";


// Test d'affichage d'une propriété inexistante --- avec méthode magique __get()
echo $societe1->rue;


// Test d'exécution d'une méthode inexistante --- avec méthode magique __call()
echo $societe1->email("argument 1", "argument 2");



/*

    D'autres méthodes magiques existent :
        - __callStastic($name, $argument) : pour les méthodes statiques
        - __isset($name) : se lance lors d'une condition isset/empty sur une propriété
        - __destruct() : se lance à la fin de l'exécution du script. Pratique pour fermer la connexion à la BDD ou fermer un fichier en écriture. 
        - __toString() : se lance lorsqu'un objet tente d'être affiché par un echo. 
        - Et d'autres : __wakeup(), __clone(), __sleep(), invoke()...

    N'hésitez pas à aller voir dans la documentation pour plus d'informations sur les méthodes magiques existantes. 

*/
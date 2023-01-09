<?php

trait TPanier{
    public $nbProduits;
    
    public function affichageProduits(){
        return "On affiche les produits <br>";
    }
}

trait TMembre{
    public function affichageMembres(){
        return "On affiche les membres <br>";
    }
}

class Site{
    use TPanier, TMembre;
    // use est le mot clé nous permettant d'utiliser des traits dans une classe
}

// ------------
$site = new Site;

echo $site->affichageProduits();
echo $site->affichageMembres();
$site->nbProduits = 5;
echo $site->nbProduits;
// Une fois les traits utilisés dans ma classe, on peut utiliser les méthodes et les propriétés de façon normale.

var_dump($site);
var_dump(get_class_methods($site));

// ---------------
//Un trait peut utiliser un autre trait

trait TA{
    public function a(){
        return "a <br>";
    }
}

trait TB{
    use TA;
    public function b(){
        return "b <br>";
    }
}

class Test{
    use TB;
}

$objet = new Test;
echo $objet->a();
echo $objet->b();
// Ca fonctionne bien donc on peut bien utiliser un trait dans un trait ! 


// ----------------

trait TMonTrait{
    public function direBonjour(){
        echo "Hello ! <br>";
    }
}


class MaClasse{
    use TMonTrait;
    public function direBonjour()
    {
        echo "Bonjour ! <br>";
    }
}

$objet = new Maclasse;
$objet->direBonjour();

// Si dans ma classe je redéfinis une méthode qui existe déjà dans le trait utilisé, alors c'est ma redéfinition qui prend la priorité, il n'y aura pas de conflit. 


/*

    A retenir :
        - Un trait est un regroupement de méthodes et de propriétés pouvant être importées au sein d'une classe.
        - Un trait n'est pas instanciable.
        - Une classe peut importer plusieurs traits à la fois.
        - Un trait peut importer un trait lui-même.

*/
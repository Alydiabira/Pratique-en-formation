<?php

// Le Singleton est un design pattern permettant de créer une classe qui ne pourra "produire" qu'un seul objet unique

class Singleton{
    // Ici ce qu'on veut personnaliser dans le Singleton
    public $numero = 20;

    // Le code du design pattern permettant de forcer cette classe à ne produire qu'un seul objet
    private static $instance = null;
    private function __construct(){}
    // la classe n'est pas instanciable normalement car le constructeur est privé ! (il doit toujours être en public)
    private function __clone(){}
    // __clone() est une méthode magique qui permet de cloner un objet
    // ici comme on l'a mise en private, on ne peut pas l'utiliser donc l'objet ne sera pas clonable
    public static function getInstance(){
        if(is_null(self::$instance)){ //si $instance est null
            self::$instance = new Singleton();
            // On instancie la classe dans la propriété $instance
        }
        return self::$instance;
        // dans tous les cas je retourne ma propriété instance à l'utilisation de la méthode getInstance()

        // La méthode ne créera un objet Singleton qu'une fois puisque l'objet est affecté à $instance. Donc la première fois qu'on instancie la classe, $instance sera à null et on entrera dans la condition. Mais toute autre tentative n'entrera pas dans la condition puisqu'une fois la classe instanciée une fois, $instance contient l'objet et n'est donc plus null. 
    }
}

// $objet = new Singleton;
// Erreur. On ne peut pas créer notre objet comme on le ferait habituellement (parce qu'on a mis le constructeur en privé)

$objet1 = Singleton::getInstance();
var_dump($objet1);
// objet1 est la référence 1 de l'objet issu de la classe Singleton

$objet2 = Singleton::getInstance();
var_dump($objet2);
// objet2 est la référence 1 de l'objet issu de la classe Singleton

$objet3 = Singleton::getInstance();
var_dump($objet3);
// objet3 est la référence 1 de l'objet issu de la classe Singleton

$objet2->numero = 21;
// j'affecte 21 (et plus 20) à ma propriété numero de l'objet2
echo "objet 2 : " . $objet2->numero . "<br>";
echo "objet 3 : " . $objet3->numero . "<br>";
echo "objet 1 : " . $objet1->numero . "<br>";

// Tous les représentants de l'objet ont maintenant la valeur 21 dans la propriété $numero, preuve qu'ils sont bien tous le même objet. 

/*

    A retenir :
        Singleton est un design pattern. Un design pattern permet d'offrir une solution à un problème récurrent. 

        Un patron de conception (design pattern) est un arrangement de caractériques de modules, reconnu comme bonne pratique en réponse à un problème de conception de logiciel (de site). Il décrit une solution standard, utilisable dans la conception de différents logiciels (sites). 

        Singleton : permet de réstreint l'instanciation d'une classe à un seul objet. Il est utilisé lorsque l'on a besoin d'exactement un objet pour coordonner les opérations dans un système. A utiliser uniquement si plusieurs instanciations de la classe provoqueraient un dysfonctionnement. 

        Dans notre exemple : $objet1, $objet2 et $objet3 représentent le même objet ayant la référence 1
        En réalité l'objet n'est pas recréé, on return l'objet déjà créé dans la variable. 
        Cette classe n'est instanciable qu'une seule fois. Aucun risque de créer plusieurs objets Singleton.

        L'implémentation d'une telle structure est très rapide et simple à mettre en place (quelques lignes de codes, qui peuvent être copiées collées).

        Il est possible par exemple d'utiliser ce Singleton pour gérer la connexion au serveur de base de données. (afin d'éviter toute erreur de connexion à la suite de création de plusieurs objets)

*/
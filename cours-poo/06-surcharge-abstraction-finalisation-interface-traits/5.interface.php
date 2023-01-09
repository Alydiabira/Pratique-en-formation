<?php

interface Mouvement{
    public function deplacement();
    // dans une interface, on crée une méthode sans corps. 
}

class Bateau implements Mouvement{
    public function deplacement(){
        return "Un bateau navigue. <br>";
    }
}

// $mouvement = new Mouvement;
// Erreur, on ne peut pas instancier une interface

$bateau = new Bateau;
echo $bateau->deplacement();


// -------------------------
// Exemple : implémentation de plusieurs interfaces dans une même classe


interface iA{
    public function test1();
}

interface iB{
    public function test2();
}


class A implements iA, iB{
    // Attention : si vos interfaces ont des méthodes qui ont le même nom ça créera un bug si on essaie de les implémenter ensemble. (deux méthodes ne peuvent pas être nommées pareil dans un même espace)

    public function test1()
    {
        return "test 1 okay ! <br>";
    }

    public function test2(){
        return "test 2 okay ! <br>";
    }
}

$a = new A;
echo $a->test1();
echo $a->test2();
// Ca fonctionne, on peut implémenter deux interfaces dans une même classe !


// --------------------

// héritage entre interfaces

interface iC{
    public function test3();
}

interface iD{
    public function test4();
}

interface iE extends iC, iD{
    //on peut hériter de plusieurs interfaces contrairement aux classes
    public function test5();
}

class B implements iE{
    public function test3(){}
    public function test4(){}
    public function test5(){}
}

// Si la class B ne redéfinit pas les classes contenues dans iC, iD et iE, alors il y a un bug. C'est bien qu'en implémentant iE, la classe B hérite ausi de iC et iD

// ---------
// héritage + implémentation


class C{
    public $test = "test<br>";
}

class D extends C implements iA{
    public function test1(){
        return "test 1 okay ! <br>";
    }
}

$d = new D;
echo $d->test . $d->test1();
// Ca fonctionne correctement donc on peut bien mélanger héritage de classe et implémentation de traits. 


/*
    A retenir :
        class extends class => héritage (unique seulement)
        interface extends interface => héritage (peut être multiple)
        class implements interface => implémentation (peut être multiple)

        - Une interface est une liste de méthodes sans contenu/sans corps devant obligatoirement être rédéclarées dans les classes qui implémentent l'interface
        - Les interfaces permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter
        - Toutes les méthodes déclarées dans une interface doivent être publiques et redéfinies dans la classe qui les implémentent
        - Lorsque je souhaite me servir d'une interface, j'utilise le mot clé "implements"
        - Une interface n'est pas instanciable
        - Une interface va représenter un point commun entre plusieurs classes, mais ne lie pas ces classes par héritage. 
        - Pour créer une interface on réfléchit en terme de comportement et non d'entité
        - On ne peut pas avoir des propriétés ou des méthodes avec contenu dans une interface (mais on peut y déclarer des constantes)

*/
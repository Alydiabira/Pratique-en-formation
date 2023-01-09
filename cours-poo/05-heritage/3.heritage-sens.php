<?php

class A{
    public function test1(){
        return "Test 1 <br>";
    }
}

class B extends A{
    public function test2(){
        return "Test 2 <br>";
    }
}

class C extends B{
    public function test3(){
        return "Test 3 <br>";
    }
}


// -----------------

$c = new C;

echo $c->test1();
echo $c->test2();
echo $c->test3();
// C hérite de B qui hérite de A donc C hérite de B et de A. 


echo "<pre>";
print_r(get_class_methods("C"));
echo "</pre>";
// Retourne bien les trois méthodes, C contient bien les trois méthodes. 


/*
    A retenir :
        L'héritage est :
            - Non réflextif : class D extends D metttrait une erreur, une classe ne peut pas hériter d'elle-même.
            - Non symétrique : C hérite de B mais B n'hérite pas de C.
            - Sans cycle : class Y extends X puis class X extends Y ne fonctionnerait pas. Il n'est pas possible de forcer une symétrie/boucle. 
                (on ne peut pas être à la fois la mère et la fille dans une relation)
            - Pas d'héritage multiple : class G extends I, J mettrait une erreur. On n'hérite que d'une seule classe (on n'a qu'une seule classe mère)
*/
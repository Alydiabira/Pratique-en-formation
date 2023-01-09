<?php

require_once('autoload.php');
//pour pouvoir utiliser l'autoload il faut bien sûr l'importer dans ma page.


$a = new A;
// Grâce aux échos et au constructeur contenu dans A, on peut voir que notre autoload fonctionne.

$b = new B;
$c = new C;
$d = new D;


//en temps normal pour tester si mon autoload fonctionne bien, il suffira de tester avec un var_dump()

var_dump($c);


/*
    A retenir :
        L'autoload permet de simplifier le code et d'éviter les erreurs.
        Sur une même page on peut utiliser beaucoup de classes différentes, sans autoload on risque d'oublier un import.

        L'autoload nous permet de gagner du temps et d'avoir accès à toutes les classes sans avoir à prévoir lesquelles seront utiles sur la page ou non. 
        
*/
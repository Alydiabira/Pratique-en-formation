<?php

class A{
    public function direBonjour(){
        return "Bonjour ! <br>";
    }
}

class B{
    public $maVariable;

    public function __construct()
    {
        $this->maVariable = new A;
        // On affecte dans l'objet en cours à $maVariable un nouvel objet issu de A
    }

    public function uneMethode(){
        return $this->maVariable->direBonjour();
        // dans mon objet en cours ($this) je vais chercher mon objet $mavariable (qui contient l'objet issu de A) et dedans je vais chercher la méthode direBonjour() pour l'exécuter
    }
}

$b = new B;
echo $b->maVariable->direBonjour();
// on peut le faire en direct, ça fonctionne !

var_dump($b);
// $b est un objet de la classe B qui contient une propriété $maVariable qui contient un objet de la classe A

echo $b->uneMethode();


/*
    Nous avons un objet dans un objet, il n'y a pas d'héritage. 

    Rappel : quand nous avons étudié PDO en PHP procédural, nous avons déjà croisé ce cas. 
        Quand on envoie via l'objet PDO une requête SQL (avec la méthode query() ou la méthode exec() ou la méthode prepare()...), on nous retourne les résultats sous forme d'objet issu non pas de la classe PDO mais de la classe PDOStatement. 
*/
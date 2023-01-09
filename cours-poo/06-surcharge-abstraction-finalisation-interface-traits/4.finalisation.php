<?php

final class Application{
    public function lancementApplication(){
        return "L'appli se lance correctement ! <br>";
    }
}


// class Extenssion extends Application{

// }
// Si on essaie de créer une classe qui hérite de la classe finale Application, une erreur s'affiche.
// Une classe finale ne peut pas être héritée


// --------------

$app = new Application;
var_dump($app);
// La classe finale peut être instanciée comme n'importe quelle classe.

//-------------

class Application2{
    final public function lancementApplication(){
        return "L'application se lance correctement ! <br>";
    }
}

class Extension2 extends Application2{
    // public function lancementApplication(){
    //     return "test <br>";
    // }

    // Erreur. Une méthode finale ne peut pas être redéfinie ou surchargée.
    // Si on veut forcer une utilisation d'une méthode sans la modifier, on peut la définir comme finale. 
}

$ext2 = new Extension2;
echo $ext2->lancementApplication(); 
// Affiche bien ce qui se trouve dans la méthode finale dans la classe dont on hérite.



/*
    A retenir :
        - Une classe finale ne peut pas être héritée
            - Ses méthodes ne pourront pas être surchargées ou redéfinies. 
            - Elle peut comporter des méthodes normales (mais ça n'a pas d'interêt particulier puisque de toute fdaçon on ne peut en hériter donc elles ne pourront pas être redéfinies)
            - Une méthode private avec le mot clé final n'a aucun intérêt (car on ne peut modifier une méthode private qu'à l'intérieur de sa classe, donc on ne peut pas la redéfinir ou la surcharger dans une classe héritière)
        - Une classe finale est instanciable normalement
        - Une méthode finale peut être présente dans une classe normale (et ne sera pas surchargeable ou redéfinissable)
        - L'intérêt est de "verrouiller" la méthode pour empêcher toute modification

*/
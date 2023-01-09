<?php


class A{
    public function calcul(){
        return 10;
    }
}


class B extends A{
    public function calcul(){
        // on redéfinit notre méthode calcul héritée de la classe A

        $nb = parent::calcul();
        // surcharge (override) : j'inclus dans cette nouvelle méthode calcul() ce qui se trouve dans la méthode calcul() de la classe parente
        // parent permet d'accéder aux méthodes d'une classe parente lors d'une surcharge.
        // si j'utilisais $this à la place, ça créerait une récursion, c'est à dire que la méthode s'appellerait en boucle au sein d'elle-même (boucle sans fin, on casse le code)

        if($nb <= 100){
            return "$nb est inférieur ou égal à 100. <br>";
        }
        else{
            return "$nb est supérieur à 100. <br>";
        }
    }

    public function autreCalcul(){
        $nb = parent::calcul();
        // il est possible d'atteindre une méthode du parent sans faire une redéfinition et une surcharge
        return $nb;
    }
}

$objetB = new B;
echo $objetB->calcul();
// J'ai redéclaré la méthode calcul() de la classe A dans la classe fille B, cela s'appelle une surcharge. Je modifie légèrement le comportement de la méthode initiale contenue dans la classe mère (A) via la classe fille (B)

echo $objetB->autreCalcul();
// affiche bien 10 donc ça fonctionen bien même sans surcharge et redéfinition


/*

    A retenir :
        - Surcharge est aussi appelée override
        - Une surcharge permet de prendre en compte le comportement de la méthode héritée afin d'en bénéfiicier tout en apportant un traitement complémentaire

        Différence entre self et parent :
            - Lorsqu'on utilise self on demande d'uitliser ce qui est dans la classe courante ou ce que l'on hérité sans l'avoir redéfini dans notre classe. Et il faut que ça appartienne à la classe (statique, constante...)
            - Lorsqu'on on utilise parent on demande d'utiliser des éléments de la classe dont on hérite. 

*/
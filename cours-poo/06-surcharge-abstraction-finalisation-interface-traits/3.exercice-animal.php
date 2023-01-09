<?php

/*
    Consignes :
        1. Créez une classe Animal qui ne sera jamais instanciée et qui contient des méthodes dormir() (qui retourne "l'animal dort"), manger() (qui retourne "l'animal mange") et une méthode pelage qui varira selon l'animal.
        2. Créez des classes qui héritent d'Animal : Chat, Moineau, Crocodile.
        3. Créez un objet issu de chaque classe puis affichez les return issus des méthodes. 
        4. Trouvez un moyen simple et efficace pour qu'au lieu de "l'animal" dans les returns des méthodes dormir() et manger() on affiche le nom de l'animal (donc par exemple "le chat dort" ou "le moineau mange")
        5. Testez en faisant un nouvel affichage
        6. Créez une classe Meduse qui hérite de la classe Animal
        7. Les méduses ne dorment pas, faites en sorte de refléter cette réalité. Testez avec un affichage.
        8. créez une méthode commune aux classes qui permette de ne pas avoir à écrire manuellement le code pour l'affichage des returns. Cette méthode doit s'exécuter automatiquement à la création d'un nouvel animal. 

*/


//consigne 1


abstract class Animal{

    public $animal;


    public function __construct()
    {
        echo $this->manger() . $this->dormir() . $this->animal . " dit : \" " . $this->pelage() . " \". <br>";
    }


    public function dormir(){
        return $this->animal . " dort. <br>";
    }

    public function manger(){
        return $this->animal . " mange. <br>";
    }

    abstract public function pelage();
}


// consigne 2

class Chat extends Animal{

    public $animal = "Le chat";

    public function pelage(){
        return "J'ai un pelage doux.";
    }
}


class Moineau extends Animal{

    public $animal = "Le moineau";

    public function pelage(){
        return "Je n'ai pas de pelage mais des plumes !";
    }
}



class Crocodile extends Animal{

    public $animal = "Le crocodile";

    public function pelage()
    {
        return "Je n'ai pas de pelage mais des écailles !";
    }
}


class Meduse extends Animal{
    public $animal = "La méduse";

    public function pelage(){
        return "Je n'ai pas de pelage mais de la peau ! ";
    }

    public function dormir()
    {
        return $this->animal . " ne dort pas, elle n'en a pas besoin ! <br>";
    }
}


//consigne 3

$leChat = new Chat;
// echo $leChat->manger() . $leChat->dormir() . $leChat->animal . " dit : \"" . $leChat->pelage() . "\".<br>";


$leMoineau = new Moineau;
// echo $leMoineau->manger() . $leMoineau->dormir() . $leMoineau->animal . " dit : \"" . $leMoineau->pelage() . "\".<br>";

$leCrocodile = new Crocodile;
// echo $leCrocodile->manger() . $leCrocodile->dormir() . $leCrocodile->animal . " dit : \"" . $leCrocodile->pelage() . "\".<br>";

$laMeduse = new Meduse;
// echo $laMeduse->manger() . $laMeduse->dormir() . $laMeduse->animal . " dit : \"" . $laMeduse->pelage() . "\".<br>";


$leChat2 = new Chat;
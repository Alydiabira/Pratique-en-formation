<?php

class Etudiant{

    private $prenom;

    public function __construct($arg)
    {
        // __construc() : méthode magique appelée automatiquement lors de l'instanciation. On ne peut pas déclarer deux constructeurs dans une même classe en PHP. 
        echo "Instanciation, nous avons reçu l'information suivante : $arg. <br>";
        $this->setPrenom($arg);
    }

    public function setPrenom($arg){
        $this->prenom = $arg;
    }

    public function getPrenom(){
        return $this->prenom;
    }

}

// -----------------

$etudiant1 = new Etudiant('Sabrina');
// Comme le constructeur est appelé automatiquement et demande un argument, nous devons envoyer cet argument au moment de l'instanciation de classe. 

echo "Prénom de la première étudiante : " . $etudiant1->getPrenom() . "<br>";


$etudiant1->__construct('Céline');
// le constructeur peut aussi être appelé comme n'importe quelle méthode de la classe

echo "Prénom de la première étudiante : " . $etudiant1->getPrenom() . "<br>";
<?php

abstract class Joueur{
    public function seConnecter($arg){
        return $this->etreMajeur($arg);
    }

    abstract public function etreMajeur($arg);
    // Une méthode abstraite n'a pas de corps/de contenu. 
    abstract public function devise();
}

// ------------------

class JoueurFr extends Joueur{

    // Je suis obligée de redéfinir mes méthodes abstraites de la classe mère dans la classe qui en hérite (on ne peut pas laisser une méthode sans corps)
    public function etreMajeur($arg)
    {
        if($arg > 17){
            return "Ok. <br>";
        }else{
            return "Attention, mineur·e ! <br>";
        }
    }

    public function devise()
    {
        return "€";
    }
}

class JoueurUS extends Joueur{
    public function etreMajeur($arg)
    {
        if($arg > 20){
            return "Ok. <br>";
        }else{
            return "Attention, mineur·e ! <br>";
        }
    }

    public function devise()
    {
        return "$";
    }
}

// ------------------------

// $joueur = new Joueur;
// Erreur ! On ne peut pas instancier une classe abstraite !  C'est une sorte de modèle pour des classes héritières mais pas une classe qu'on utilise en direct

$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter(19);
echo $joueurFr->seConnecter(15);
echo "Cette personne jouera avec des " . $joueurFr->devise() . "<br>";
//On peut créer des objets à partir des classes héritières d'une classe abstraite.

$joueurUS = new JoueurUS;
echo $joueurUS->seConnecter(18);
echo $joueurUS->seConnecter(36);
echo "Cette personne jouera avec des " . $joueurUS->devise() . "<br>";


/*

    A retenir :
        - Une classe abstraite ne peut pas être instanciée
        - Pour définir une méthode comme abstraite, il faut absolument que la classe elle-même soit abstraite
        - Une classe abstraite n'est pas forcément uniquement composée de méthodes abstraites
        - Les méthodes abstraites n'ont pas de corps
        - QUand on hérite de méthodes abstraites, il faut absolument les redéfinir puisqu'elles n'ont pas de corps.
    
    La classe abstraite devient une sorte de modèle, de "contrainte". On force toutes les classes qui en héritent à redéfinir les méthodes abstraies selon leurs règles. On l'utilisera dans des cas où on n'a pas de cas général et donc de toute façon les méthodes seraient à redéfinir dans chaque classe héritière. 

*/
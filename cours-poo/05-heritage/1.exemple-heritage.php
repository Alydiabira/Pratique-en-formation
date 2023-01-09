<?php

class Membre{
    public $id;
    public $pseudo;
    public $mdp;

    public function __construct()
    {
        echo "Création d'un compte membre ! <br>";
    }

    public function inscription(){
        return "Je m'inscris. <br>";
    }

    public function connection(){
        return "je me connecte <br>";
    }
}

class Admin extends Membre{
    //extends : héritage. Admin hérite des caractéristiques de Membre.

    public function accesBackOffice(){
        return "J'ai accès au backoffice ! <br>";
    }

}

// --------------------------

$admin = new Admin;
// Affiche "Création d'un compte membre !" donc on hérite bien de ce qui se trouve dans la classe Membre

echo $admin->connection();
$admin->id = 99;
echo $admin->id . "<br>";

$membre = new Membre;
// echo $membre->accesBackOffice();
// Erreur. Admin hérite de membre mais membre n'hérite pas d'Admin. 


// ----------------------------

/*
    L'héritage est un des fondements les plus importants de la programmation orientée objet. 

    Sur un site web, un·e Admin est avant tout membre
        L'admin peut également se connecter, s'inscrire etc et possède un pseudo, un mot de passe, un id... La seule différence est que l'admin a des droits en plus ! 
    
    Rappel : 
        public : accessible de partout
        protected : accessible seulement dans la classe de création ou sa classe fille
        private : accessible uniquement dans la classe de création


*/
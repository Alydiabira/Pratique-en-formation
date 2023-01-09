<?php

class Membre{
    private $pseudo;
    private $mdp;

    public function setPseudo($pseudo){

        if(is_string($pseudo) && strlen($pseudo) > 2 && strlen($pseudo) < 16){
            // strlen() = fonction prédéfinie de PHP qui vérifie la longueur d'une chaîne de caractères
        $this->pseudo = $pseudo;
        }

    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setMdp($mdp){
        $this->mdp = $mdp;
    }

    public function getMdp(){
        return $this->mdp;
    }
}


/*

Exercice :
    1. A partir de cette classe, faites en sorte qu'on puisse renseigner les propriétés pseudo et mdp et qu'on puisse les afficher. 
    2. Créez un objet issu de cette classe et tester l'affectation des propriétés et leur affichage.
    3. Ajouter une vérification sur le pseudo : il doit être une chaîne de caractères, et cette chaîne doit être comprise entre 3 et 15 caractères. Tester votre code. 

*/


$membre1 = new Membre;
$membre1->setPseudo('Daisy');
$membre1->setMdp('djhzbn78f');

echo "Pseudo : " . $membre1->getPseudo() . "<br>";
echo "Mot de passe : " . $membre1->getMdp() . "<br>";


// --------------
// Test des contraintes

$membre2 = new Membre;

$membre2->setPseudo(88458);
echo "Pseudo : " . $membre2->getPseudo() . "<br>";
// la contrainte n'est pas respectée donc le pseudo ne s'affiche pas

$membre2->setPseudo("MonPseudo");
echo "Pseudo : " . $membre2->getPseudo() . "<br>";

$membre2->setPseudo("a");
echo "Pseudo : " . $membre2->getPseudo() . "<br>";
// la contrainte n'a pas été respectée donc le pseudo n'a pas été changé, il reste à "MonPseudo".
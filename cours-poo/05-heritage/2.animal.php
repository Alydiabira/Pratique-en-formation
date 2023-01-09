<?php

class Animal{
    protected function deplacer(){
        return "Je me déplace. <br>";
    }

    public function manger(){
        return "Je mange. <br>";
    }
}

class Elephant extends Animal{
    public function quiSuisJe(){
        return "Je suis un éléphant et " . $this->deplacer();
    }
}

class Chien extends Animal{
    public function quiSuisJe(){
        return "Je suis un chien. <br>";
    }

    public function manger(){
        // On redéfinit la classe manger() dans notre classe fille
        return "Je mange comme un chien. <br>";
    }

}
// -------------------------

$elephant = new Elephant;
echo "L'éléphant dit : " . $elephant->manger();
echo "Léléphant dit : " . $elephant->quiSuisJe();
// Ca fonctionne, on peut utiliser la méthode protected de la classe dont on hérite (quiSuiSJe()) si on la récupère au sein de la classe fille. 

// echo $elephant->deplacer();
// Erreur. Comme deplacer() est protected je ne peux pas y accéder directement à travers mon objet de la classe enfant, je peux y accéder cependant au sein de la classe enfant


//----------------

$chien = new Chien;
echo "Le chien dit : " . $chien->manger();
// Affiche "je mange comme un chien" et non "je mange" car la méthode a été redéfinie dans la classe Chien. 
//l'interpréteur PHP cherche d'abord dans la classe dont est issu l'objet, s'il ne trouve pas ce qu'on lui demande, alors il ira chercher dans la classe mère.



/*

    A retenir :
        Lorsqu'on appelle une méthode sur un objet, l'interpréteur priorise la classe dont est issu l'objet puis va chercher dans la classe dont elle hérite s'il n'a pas trouvé. 
        Il n'y a donc pas de risque de conflit.

        On peut redéfinir une méthode pour lui donner un fonctionnement différent pour une des classes héritières. 

*/
<?php

/* UML (langage de modélisation unifié) : modélisation pour visualiser/schématiser les objets. C'est utilisé en entreprise pour schématiser grâce souvent à des outils avancés. Ici, nous faisons un UML manuellement très simplifié. 

---------------------
|    Vehicule		|
---------------------
|	$litresEssence	|
---------------------
|setLitresEssence() |
|getLitresEssence()	|
---------------------



---------------------
|    Pompe   		|
---------------------
|	$litresEssence	|
---------------------
|setLitresEssence() |
|getLitresEssence()	|
|donnerEssence()	|
---------------------

*/

/*------------------------------------------------
            CONSIGNE
--------------------------------------------------

1. Création des classes Vehicule et Pompe grâce à l'UML. 
2. Création d'un véhicule
3. Attribuer un nombre de litres d'essence au vehicule : 5
4. Afficher le nombre de litres d'essence du vehicule
5. Création d'une pompe
6. Attribuer un nombre de litres d'essence à la pompe : 800
7. Afficher le nombre de litres d'essence de la pompe
8. La pompe1 donne 50L au vehicule1
9. Afficher le nombre de litres d'essence pour la voiture1 après ravitaillement
10. Afficher nombre de litres d'essence restant pour la pompe1 
11. Faire en sorte que le véhicule ne puisse pas contenir plus de 50L d'essence (limite reservoir).


*/

// Correction 1

class Vehicule{
    private $litresEssence;

    public function setLitresEssence($nbr){
        if(is_int($nbr)){
            // on ajoute une contrainte de vérification, on veut que ce soit un integer (nombre entier)
            $this->litresEssence = $nbr;
        }
    }

    public function getLitresEssence(){
        return $this->litresEssence;
    }
}

class Pompe{
    private $litresEssence;

    public function setLitresEssence($nbr){
        if(is_int($nbr)){
            // on ajoute une contrainte de vérification, on veut que ce soit un integer (nombre entier)
            $this->litresEssence = $nbr;
        }
    }

    public function getLitresEssence(){
        return $this->litresEssence;
    }

    public function donnerEssence(Vehicule $v){
    	//$v représente un objet issu de la classe Vehicule, c'est ce qui vous permet d'impacter un objet externe dans cette méthode

        // ------------------------------
        // correction 8 - Sans la contrainte de capacité de réservoir
        // On enlève 50L à la pompe
        // $this->setLitresEssence($this->getLitresEssence() - 50);
        // je vais affecter à $litresEssence contenu dans mon objet en cours la valeur qui était en cours (grâce au get) à laquelle j'enlève les 50 litres que je vais donner au véhicule

        // On donne 50L au véhicule
        // $v->setLitresEssence($v->getLitresEssence()+ 50);
        // On affecte à notre objet issu de la classe véhicule la valeur qui était en cours (grâce au get) à laquelle on ajoute les 50L de la pompe

        // -------------------------------------

        // Correction 10 - avec la contrainte de ne pas dépasser 50L dans le réservoir du véhicule
        $this->setLitresEssence($this->getLitresEssence() - (50 - $v->getLitresEssence()));
        // On part du principe qu'on fait le plein à chaque fois. Donc on donne à la voiture 50 litres - ce qu'elle possède déjà pour atteindre le maximum de 50. 

        $v->setLitresEssence(50);
        // Comme on veut mettre au maximum (50) le contenu du réservoir du véhicule, on n'a plus besoin de calculer, on peut directement lui affecter la valeur 50. 

    }
}


// Correction du 2
$vehicule1 = new Vehicule;

// correction du 3
$vehicule1->setLitresEssence(5);

// correction 4
echo 'Le véhicule possède ' . $vehicule1->getLitresEssence() . " litres d'essence. <br>";

// correction 5
$pompe1 = new Pompe;

//correction 6
$pompe1->setLitresEssence(800);

//correction 7
echo 'La pompe possède ' . $pompe1->getLitresEssence() . " litres d'essence. <br>";

//correction 9
$pompe1->donnerEssence($vehicule1);

echo "Après ravitaillement, le véhicule1 possède : " . $vehicule1->getLitresEssence() . " litres d'essence. <br>";

echo "Après ravitaillement, la pompe1 possède : " . $pompe1->getLitresEssence() . " litres d'essence. <br>";


//test consigne 10

$vehicule2 = new Vehicule;

$vehicule2->setLitresEssence(30);
echo 'Le véhicule possède ' . $vehicule2->getLitresEssence() . " litres d'essence. <br>";

$pompe1->donnerEssence($vehicule2);

echo "Après ravitaillement, le véhicule2 possède : " . $vehicule2->getLitresEssence() . " litres d'essence. <br>";

echo "Après ravitaillement, la pompe1 possède : " . $pompe1->getLitresEssence() . " litres d'essence. <br>";
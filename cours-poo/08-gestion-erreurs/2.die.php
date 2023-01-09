<?php

// Pour ce cours nous n'utiliserons pas de classe, on travaillera en procédural sur une fonction pour la démonstration de comment fonctionne die()

function recherche($tab, $elem){
    // On veut pouvoir chercher un élément ($elem) dans un tableau array ($tab)

    if(!is_array($tab)){
        //is_array() = fonction prédéfinie qui vérifie de $tab est bien un array
        //si tab n'est pas un array, alors on rentre dans cette condition
        die('Vous devez envoyer un ARRAY !');
    }

    $position = array_search($elem, $tab);
    // array_search() = fonction prédéfinie qui permet de chercher un élément ($elem) dans un tableau ($tab). Ca nous retourne l'indice auquel l'élément se trouve.
    //Ici, $position contiendra donc l'indice où se trouve l'élément.

    return $position;

}


$liste = array('orange', 'cerise', "fraise");


// Test avant l'ajout de die()
//echo recherche($liste, "cerise") . "<hr>"; // retourne 1
//echo recherche($liste, 'poire') . "<hr>"; // retour vide
//array_search() retourne FALSE si l'élément n'est pas trouvé dans l'array. Du coup ici l'echo est vide. 
//echo recherche("blabla", "poire") . "<hr>";
// comme mon argument n'est pas un array, j'ai une erreur de PHP, ce qui est normal. Mais mon erreur n'est pas propre. 


// Test avec die()
echo recherche("sjdfhsdofh", "tada");
echo "traitement test";
// Ce dernier echo ne s'affiche pas parce que die arrête le traitement complet de la page.

// die() considère qu'il n'y a pas de raison de continuer les traitements de la page si l'un d'entre eux dysfonctionne. Les prochains traitements seraient sûrement dépendants des dysfonctionnants et donc faussés/bugués. Du coup avec die() on arrête tout au premier bug. 
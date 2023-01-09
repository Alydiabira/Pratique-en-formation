<?php

// De nouveau, on va fonctionner en procédural sur cette partie du cours pour la démonstration, mais utiliser des classes prédéfinies pour créer nos exceptions. 


function recherche($tab, $elem){
    // On fait la même fonction que dans le fichier précédent qui va chercher un élément dans un tableau et nous retourner l'indice auquel se trouve l'élément dans la variable $position

    if(!is_array($tab)){
        throw new Exception('Vous devez envoyer un ARRAY ! <br>');
        // throw est le mot clé qui nous permet d'arrêter l'exécution du code une fois l'erreur attrapée
    }

    if(sizeof($tab) <= 0){
        // rappel : sizeof() = fonction prédéfinie qui affiche le nombre de lignes dans un array. 
        // Ici si l'array est vide (n'a pas de ligne), alors on affiche un erreur
        throw new Exception('Vous devez envoyer un ARRAY avec du contenu. <hr>');
    }



    $position = array_search($elem, $tab);
    return $position;
}


$liste = array("orange", "myrtilles", "pamplemousse");
$tab = array();

try{
    // try = bloc d'essai. On va essayer les instructions suivantes : 
    echo recherche($liste, "myrtilles") . "<hr>";
    echo recherche($liste, "orange") . "<hr>";
    echo recherche('ksjdfsh', "orange") . "<hr>"; 
    // tout ce qui sera exécuté après la première erreur ne marchera pas, le try arrête l'exécution à la première erreur.  
    echo recherche ($tab, "pomme") . "<hr>"; //pas exécuté
    echo recherche($liste, "pamplemousse"); //pas exécuté non plus
}catch(Exception $e){
    //catch = bloc de capture. On va "attraper" les exceptions. Try et catch fonctionnent toujours ensemble. 
    // On symbolise dans le bloc catch l'exception par la variable $e (on pourrait l'appeler autrement)

    echo "Message d'erreur : " . $e->getMessage() . "<br>";
    // getMessage() est une méthode de la classe Exception qui va me permettre d'afficher un message d'erreur.

    // Grâce à des méthodes de la classe Exception on peut se créer des messages d'erreur beaucoup plus précis pour pouvoir débuguer le code plus facilement 

    echo "<hr>Informations : <br> Code : " . $e->getCode() . "<br>Message : " . $e->getMessage() . "<br>Fichier : " . $e->getFile() . "<br>Ligne : " . $e->getLine() . "<hr>";
    echo "Trace : ";
    print_r($e->getTrace());
    echo "<hr> getPrevious : " . $e->getPrevious() . "<hr>";
    echo "getTraceAsString : " . $e->getTraceAsString() . "<hr>";

}


echo "Est-ce qu'on peut continuer l'exécution du code en dehors des blocs try/catch ??";
// Cet echo s'affiche bien. Contrairement au die(), l'exception n'arrête que l'exécution du bloc try quand elle attrappe une erreur, le reste de la page n'est pas impacté. 


/*
    A retenir :
        Exception permet de centraliser les erreurs en cas de mauvais traitement, de les gérer proprement et d'arrêter l'exécution du code en try. 
        Différent du die() parce qu'on ne peut mettre qu'un seul message d'erreur dans le die()

            - Exception est une classe prédéfinie
            - Une exception est une erreur que l'on peut attraper grâce à un bloc try et un bloc catch
            - Throw perrmet d'arrêter l'exécution du try et de rentrer dans le catch. 
            - Try et catch permettent d'avoir deux blocs d'instructions distincts
            - Le reste du code n'est pas impacté et continue à s'exécuter. 

*/

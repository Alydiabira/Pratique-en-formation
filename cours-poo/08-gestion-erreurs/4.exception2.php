<?php

set_error_handler("exception_error_handler");
// pour utiliser ErrorException, il faut d'abord utiliser la fonction prédéfinie set_error_handler() à laquelle on envoie commme argument le nom de la fonction qu'on va créer pour gérer les exceptions.
// On peut nommer cette fonction utilisateur·rice comme on le souhaite, souvent on va l'appeler comme ci-dessus

function exception_error_handler($errno, $errstr, $errfile, $errline){
    // on passe en argument de notre fonction des arguments que l'on devra utiliser pour notre classe ErrorException (on n'a pas le choix, il faut toujours passer ces arguments)

    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
        // on met toujours les arguments dans cet ordre là autrement ça ne marchera pas. 
}


try{
    $prenom = "Magali";
    echo $prnom . "<br>";
}catch(ErrorException $e){
    // echo "<pre>";
    // print_r(get_class_methods($e));
    // echo "</pre>";
    // On a été chercher les méthodes existantes dans l'objet $e pour savoir comment afficher le message

    echo "La variable n'existe pas <br>" . $e->getMessage() . " sur le fichier " . $e->getFile() . " à la ligne " . $e->getLine();
}

// Avec cette façon de faire on peut créer des messages d'erreurs plus ou moins adaptés à toutes les erreurs possibles. 
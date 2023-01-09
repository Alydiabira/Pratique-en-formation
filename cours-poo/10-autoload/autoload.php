<?php

// Un autoload permet de charger (require/include) automatiquement une classe dans la page si on fait une instanciation de cette classe.
//On n'a pas à faire un require de 15 classes différentes si on crée des objets issus de 15 classes différentes dans notre fichier, on fera juste un require de l'autoload et il se chargement d'importer les classes

// Pour que l'autoload suivant (sans code ajouté pour le complexifier) fonctionne, il faut :
//      - Que les classes aient la même convention de nommage
//      - Que les classes se trouvent toutes dans le même répertoire



function inclusionAutomatique($nomDeLaClasse){
    // on crée une fonction personnalisée qu'on aurait pu nommer autrement

    include_once($nomDeLaClasse . ".class.php");
    // Grâce à cet include_once() on automatise l'inclusion via le chemin vers la classe requise.

    // on vérifie que ça fonctionne bien (à mettre en commentaire une fois que c'est vérifié)
    echo "require_once($nomDeLaClasse.class.php); <br>";
    echo "Ca fonctionne bien !<hr>";
}


// ------------------------


spl_autoload_register('inclusionAutomatique');
// spl_autoload_register() est la fonction prédéfinie permettant d'exécuter la fonction qu'on passe en argument (notre fonction personnalisée) lorsque l'interpréteur voit passer un "new" dans le code. 
// Le nom suivant le "new" (qui est toujours le nom de la classe) est alors récupéré et transmis automatique en argument de notre fonction utilisateur.


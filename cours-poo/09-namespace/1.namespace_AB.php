<?php

// Quand on veut créer des namespaces (espaces de nom) il faut leur créer un fichier à eux dans lequel on ne met pas d'autre code (ni avant, ni après)

//ici, pour tester notre namespace on utilisera le fichier 1.appel1.php

//Encapsulation : regroupement de données et du code qui les utilise au sein d'une même unité. En général, afin de protéger les données en forçant l'utilisatrice ou l'utilisateur à utiliser des méthodes définies pour les manipuler

// Un espace de nom (namespace) est une méthode permettant d'encapsuler des éléments. Un dossier contenant des fichiers peut être considéré comme un espace de nom. Le fichier 1.namespace_AB.php pourrait exister à la fois dans le dossier 09-namespace et dans le dossier 05-heritage par exemple mais ne peut pas exister deux fois dans le même dossier. C'est pareil en dev web. En PHP on ne peut pas avoir deux fonction qui ont le même nom dans le même espace de nom... 


namespace A{
    // On peut aussi créer son espace de nom sans les accolades. Mais cette écriture n'est pas conseillée parce qu'elle porte à confusion. 

    function ville(){
        return "Paris<br>";
    }
    // on peut créer une fonction utilisateur·rice dans un namespace

    function strlen(){
        return "Ceci est la fonction strlen() du namespace A. <br>";
    }
    //Comme on est dans un espace de nom différent, on peut réutiliser le nom d'une fonction qui éxiste déjà dans le global, ici le nom d'une fonction prédéfinie par exemple

    // echo __NAMESPACE__;
    // Nous dit bien qu'on est dans l'espace de nom A.

}


// On peut faire autant d'espaces de nom dans un même fichier. 

namespace B{
    function ville(){
        return "Lyon <br>";
    }
    
    function strlen(){
        return "Ceci est la fonction strlen() du namespace B. <br>";
    }

    // echo __NAMESPACE__;

}

// On définit nos espaces de nom dans un fichier puis, si on veut les utiliser, il faudra les appeler dans un autre fichier de code.

//NB : On peut aussi enregistrer des classes et des constantes dans nos namespaces. 
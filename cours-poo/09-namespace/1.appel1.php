<?php

require_once('1.namespace_AB.php');
// Pour pouvoir accéder aux espaces de nom, on commence par inclure leur fichier

echo A\strlen() . "<hr>";

// Pour accéder à un élément du namespace, il faut utiliser le symbole \

echo B\ville() . "<hr>";

// echo ville();
// Met une erreur. La fonction n'est pas définie dans le global, pour pouvoir accéder à la fonction il faut toujours aller la chercher dans son bon espace de nom. 

echo strlen('test') . "<hr>";
// La fonction prédéfinie strlen() de l'espace global n'entre pas en conflit avec les strlen() créées dans les namespaces A et B. Chaque espace de nom peut avoir ses fonctions différentes sans problème. 


echo __NAMESPACE__;
// constante magique qui nous permet de savoir dans quel espace de nom nous nous trouvons.
// Quand nous sommes dans le global, ça nous retourne une réponse vide

//Ici, nous sommes bien dans le global même si nous avons inclus les namespaces A et B grâce au require_once(). Le lien entre les deux fichiers nous permet d'aller piocher dans les deux espaces de nom mais on reste dans notre espace de nom par défaut. 
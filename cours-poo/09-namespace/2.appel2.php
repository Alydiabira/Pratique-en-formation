<?php

require_once("2.namespace_commerce.php");


$test = new commerce1\Commande;

var_dump($test);
// On voit qu'on a bien réussi à instancier la classe Commande qui appartient à un autre namespace.

echo "<hr>";

echo $test->strlen('dksjfhskjbfh00') . "<hr>";
// On peut maintenant accéder à ce qui se trouve dans l'objet de façon classique. L'objet a été créé dans le global, il n'appartient pas à l'espace Commerce1

/*

    1. Créez dans le namespace commerce2 une classe Inscription.

    2. Dans cette classe, créez une méthode permettant de tester la longueur du mot de passe. S'il fait moins de 8 caractères, un message s'affiche disant qu'il faut choisir un mot de passe plus sécurisé. S'il fait au moins 8 caractères, un message s'affiche disant que le mot de passe est validé. 

    3. Dans cette classe, créez une méthode permettant de tester si l'email contient bien un @ . Si non, retournez une erreur demandant d'écrire une adresse email valide. Si oui, confirmez la validité de l'email.

    4. Testez vos nouvelles méthodes (avec tous les cas de figures possibles.)

    5. Votre email doit absolument être valide, autrement le reste de votre code sera impacté. Utilisez un outil de gestion des erreurs vous permettant d'arrêter l'exécution du reste du code en cas d'erreur.

    6. Testez plusieurs cas de figure

    7. Faites en sorte de pouvoir tester plusieurs mots de passe d'affilée et qu'à la première erreur les tests s'arrêtent. Créez un message d'erreur automatisé précis qui aidera la développeuse ou le développeur à trouver quelle ligne pose problème. 

    8. Testez plusieurs cas de figure

*/



$inscription = new Commerce2\Inscription;

var_dump($inscription);

// echo $inscription->mdpLen('test');
// echo $inscription->mdpLen('sdkfhsfhszfvde');
// echo $inscription->validEmail('magali');
// echo $inscription->validEmail('maga@mail.fr');

// Test avec le die() --- (mis en commentaire pour pouvoir faire la suite des exercices)
// echo $inscription->validEmail("magali@mail.fr");
// echo $inscription->validEmail("klsfhsoifh");
// echo "Est-ce que le die fonctionne correctement ?";

try{
    echo $inscription->mdpLen('djgfsdighde');
    echo $inscription->mdpLen('zedzdizeudfhzef');
    echo $inscription->mdpLen('izudehqzidhqzisbh');
    echo $inscription->mdpLen('dh');
    echo "Si ce message s'affiche, i y a un souci dans le code";
}catch(Exception $e){
    echo $e->getMessage() . "<br>";
    echo "Infos pour les devs : " . $e->getTraceAsString() . "<hr>";
}

echo "Si ce message s'affiche c'est bon !";
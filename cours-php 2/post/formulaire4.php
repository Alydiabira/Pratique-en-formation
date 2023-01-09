<?php

var_dump($_POST);

// Enregistrement des données envoyées dans le formulaire en page formulaire3.php dans un fichier texte

$f = fopen("liste.txt", "a");
// fopen() permet d'ouvrir un ficher, avec l'argument "a" en plus, il crée le fichier si celui-ci n'existe pas

    fwrite($f, $_POST['pseudo'] . " - ");
    // fwrite() permet d'écrire dans le fichier (représenté par $f)
    fwrite($f, $_POST['email'] . "\n");
    // \n permet de forcer un retour à la ligne dans un ficher txt (comme <br> en HTML)

$f = fclose($f);
// fclose() permet de fermer le fichier. 

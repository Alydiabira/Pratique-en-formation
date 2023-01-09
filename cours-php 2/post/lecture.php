<?php

// Comme nous avons paramétré un enregistrement des données du formulaire de la page formulaire3.php dans un document txt, on voudrait maintenant afficher ces données dans cette page web.

$nomFichier = "liste.txt";
// On crée une variable qui prend en valeur le chemin du fichier qu'on veut afficher

$fichier = file($nomFichier);
// file() est une fonction prédéfinie qui va faire tout le travail. Elle va retourner chaque ligne du fichier à un indice différent d'un tableau array


echo '<pre>';
print_r($fichier);
echo '</pre>';

// On veut maintenant afficher correctement les données contenues dans le tableau array

foreach($fichier as $ligne){
    echo $ligne . "<br>";
}
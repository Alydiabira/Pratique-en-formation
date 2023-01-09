<!-- EXERCICE : faites un formulaire qui permette d'entrer l'adresse d'une personne (avec chaque type de donnée dans un champs différent). 
    1. Ecrivez le code qui permette d'afficher le dernier envoi de formulaire au-dessus de celui-ci.
    2. bonus pour ceux qui ont le temps : Pouvez-vous trouver une façon automatisée d'afficher ce qui a été envoyé dans le formulaire ?  -->


<?php

// Affichage "manuel"

if($_POST){
    echo "Nom : " . $_POST['nom'] . "<br>";
    echo "Adresse : " . $_POST['numero'] . " " . $_POST['rue'] . "<br>";
    echo "Code postal : " . $_POST['cp'] . "<br>";
    echo "Ville : " . $_POST['ville'] . "<br>";
}

echo "<hr>";


// Automatisation de l'affichage

if($_POST){
    foreach($_POST as $indice => $valeurSaisie){
        echo $indice . " : " . $valeurSaisie . "<br>";
    }
}


?>



<hr>
<h1>Formulaire</h1>

<form action="" method="post">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom">
    <br>
    <label for="numero">Numéro de rue :</label>
    <input type="number" name="numero" id="numero">
    <br>
    <label for="rue">Rue : </label>
    <input type="text" name="rue" id="rue">
    <br>
    <label for="cp">Code postal :</label>
    <input type="number" name="cp" id="cp">
    <br>
    <label for="ville">Ville : </label>
    <input type="text" name="ville" id="ville">
    <br>
    <input type="submit" value="Envoyer !">

</form>
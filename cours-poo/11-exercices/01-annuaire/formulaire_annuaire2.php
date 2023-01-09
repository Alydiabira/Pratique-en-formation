<form action="" method="post">
    <!-- Attention : pour pouvoir récupérer les données et les manipuler, ne pas oublier d'ajouter method="post" -->

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>
    <br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>
    <br>

    <label for="genre">Genre : </label>
    <input type="radio" name="genre" id="genre" value="homme"> Homme
    <input type="radio" name="genre" id="genre" value="femme"> Femme
    <input type="radio" name="genre" id="genre" value="personne non-binaire"> Personne non-binaire 
    <br>

    <label for="num_rue">Numéro de rue :</label>
    <input type="number" name="num_rue" id="num_rue" required>
    <br>

    <label for="nom_rue">Nom de rue :</label>
    <input type="text" name="nom_rue" id="nom_rue" required>
    <br>

    <label for="cp">Code postal : </label>
    <input type="number" name="cp" id="cp" required>
    <br>

    <label for="ville">Ville : </label>
    <input type="text" name="ville" id="ville" required>
    <br>

    <label for="tel">Téléphone : </label>
    <input type="text" name="tel" id="tel" required>
    <br>

    <label for="email">Email : </label>
    <input type="email" name="email" id="email" required>
    <br>

    <label for="commentaire">Commentaire : </label>
    <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
    <br>

    <input type="submit" value="Envoyer ! ">


</form>


<?php

require_once('Annuaire.class.php');

$annuaire = new Annuaire;

$annuaire->envoyerForm();
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 1</title>
</head>

<body>

    <?php

    var_dump($_POST);
    // Le var_dump de POST nous permet de voir que POST récupère les données envoyées dans le dernier formulaire validé. 
    // ATTENTION : il n'y a pas d'enregistrement de ces données. Si on réexécute le code, les données sont perdues ou écrasées par d'autres. (pour enregistrer les données, il nous faudra des BDD)

    if ($_POST) { //comme pour GET, pour éviter les erreur si POST est vide, il faut toujours d'abord utiliser cette condition
        echo "prénom : " . $_POST['prenom'] . "<br>";
        echo "message : " . $_POST['message'] . "<br>";
    }



    ?>

    <hr>

    <h1>Formulaire</h1>


    <form action="" method="post">
        <!-- method : précise la méthode d'envoi des données. Ici, on demande à ce que les données soient envoyées dans le POST -->
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom">
        <!-- c'est l'attribut name qui permet de définir l'indice auquel sera enregistrée la donnée envoyée dans le champ -->
        <br>
        <label for="message">Message : </label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Envoyer !">
    </form>


</body>

</html>
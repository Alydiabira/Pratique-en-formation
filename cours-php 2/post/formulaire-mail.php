<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test envoi de mail</title>
</head>
<body>


    <form action="" method="post" enctype="multipart/form-data">

        <label for="expediteur">Expediteur</label>
        <input type="text" name="expediteur" id="expediteur">
        <br>

        <label for="sujet">Sujet :</label>
        <input type="text" name="sujet" id="sujet">
        <br>

        <label for="message">Message :</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" value="Envoi !">

    </form>


    <?php

        if($_POST){
            $_POST['expediteur'] = "From " . $_POST['expediteur'];
            // on change la valeur à l'indice expediteur en from + information envoyée dans le formulaire

            mail("magali.milbergue@gmail.com", $_POST['sujet'], $_POST['message'], $_POST['expediteur']);

            // mail() reçoit toujours 4 arguments qui doivent être dans le bon ordre : destinataire, sujet, message, expéditeur
            // C'est cette fonction qui fera l'envoi du mail. 
        }

    ?>

    
</body>
</html>
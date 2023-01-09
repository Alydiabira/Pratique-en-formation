<?php

/*	Exercice : Création d'un espace de dialogue (tchat, livre d'or, module commentaire à la YT)

	Etapes :
		1.		Création de la BDD :
					BDD : dialogue
					Table : commentaire
							id_commentaire 		// INT(3) PK - AI
							pseudo 		   		// VARCHAR(20)
							message		   		// TEXT
							dateEnregistrement	// DATETIME

		2. 		Connexion à la BDD

		3.		Création d'un formulaire HTML (pour l'ajout de messages) (apparaîtront uniquement le champ pseudo et le champ message)
        
		4.		Requête SQL d'enregistrement dans la BDD (non-préparée)

        5. 		Injection SQL + moyen de contrer

        6.      Affichage des messages

		7.		Problème des apostrophes + moyen de contrer

		8.		Attaque XSS + moyen de contrer

        9.		Amélioration de l'affichage : date au format français



        A RETENIR :
            INJECTION SQL : 
                Utilisation d'une requête SQL à travers un formulaire pour agir de façon malveillante sur la BDD du site.
                Par exemple : ok'); DELETE FROM commentaire; ( permet de supprimer les informations enregistrées dans la table. 
                Pour s'en prémunir il faut faire des requêtes préparées.

            ATTAQUES XSS : 
                Envoi de css (avec les balises style) ou de javascript (avec les balises script) dans la BDD pour qu'à l'affichage la demande css ou js soit prise en compte par le navigateur.
                Par exemple : 
                    <style>
                        body{
                        display: none;
                        }
                    </style>
                    (affiche une page blanche)

                    <script type="text/javascript">
                        var point = true;
                        while(point == true)
                        alert("bonjour")
                    </script>
                    (crée une boucle sans fin qui fait planter le navigateur)
                
                Pour s'en prémunir on va utiliser des fonctions prédéfinies de PHP à l'affichage


*/



// ----------- 2. Connexion à la BDD

$pdo = new PDO('mysql:host=localhost; dbname=dialogue', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// var_dump($pdo);
// Grâce au var_dump() de $pdo je peux voir que ma connexion a bien fonctionné !



// --------------- 4. Envoi des données (sans préparer)

if($_POST){// on entre dans la condition uniquement si le formulaire a été envoyé

    // ---- 7. problème des apostrophes + moyen de contrer

    // Quand on fait une requête simple, l'envoie d'un mot avec apostrophe génère une erreur. Du coup, pour réparer, il faut préparer les données grâce à une fonction prédéfinie qui s'appelle addslashes()

    // $_POST['pseudo'] = addslashes($_POST['pseudo']);
    // $_POST['message'] = addslashes($_POST['message']);
    // on passe nos valeurs qui sont aux index pseudo et message dans la fonction prédéfinie addslashes() ce qui ajoutera des \ à chaque apostrophe trouvée pour les échapper
    // rappel : avec une requête préparée on n'a pas besoin de cette étape, c'est fait dans la requête préparée !

    // $r = $pdo->query("INSERT INTO commentaire (pseudo, dateEnregistrement, message) VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]' )");
    // (mis en commentaire pour pouvoir faire la requête préparée en 5)

    //on insère les valeurs récupérées dans le formulaire via POST
    // NOW() est une fonction SQL permettant d'accéder à la date et l'heure, ici ça prendra automatiquement la date et l'heure de l'envoi du formulaire. 



// -------------5. INJECTION SQL + MOYEN DE CONTRER (requête préparée)

    $r = $pdo->prepare("INSERT INTO commentaire (pseudo, dateEnregistrement, message) VALUES (:pseudo, NOW(), :message)");
    // on fait notre requête avec nos marqueurs nominatifs

    $r->bindValue(':pseudo', $_POST['pseudo']);
    $r->bindValue(':message', $_POST['message']);
    $r->execute();



}





?>






<!-- ------------3. Ajout du formulaire  -->

<form action="" method="post">

    <label for="pseudo">Pseudo : </label>
    <input type="text" name="pseudo" id="pseudo">
    <br>

    <label for="message">Message : </label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <br>

    <input type="submit" value="Envoyer ! ">

</form>



<?php

// --------------- 6. AFFICHAGE

$resultat = $pdo->query("SELECT pseudo, message, DATE_FORMAT(dateEnregistrement, '%d/%m/%Y') AS datefr, DATE_FORMAT(dateEnregistrement, '%H:%i:%s') AS heurefr FROM commentaire ORDER BY dateEnregistrement DESC");
// Je classe mes résultats par date d'enregistrement du plus récent au plus ancien

echo "<h1>" . $resultat->rowCount() . " commentaires.</h1>";
// j'affiche le nombre de commentaires grâce à rowCount() qui compte le nombre de lignes en résultats

while($commentaire = $resultat->fetch(PDO::FETCH_ASSOC)){
    // je fais une boucle pour afficher chaque ligne de résultat de cette façon : 
    echo "<strong>Par " . htmlspecialchars($commentaire['pseudo'])  . ", le " . $commentaire['datefr'] . " à " . $commentaire['heurefr'] . " : </strong><br>";
    echo htmlspecialchars($commentaire['message'])  . "<hr>";
}

// ----------------- 8. Attaque XSS + moyen de contrer
// voir ligne au-dessus, on passe nos valeurs récupérées du formulaire dans la fonction prédéfinie htmlspecialchars()
// htmlspecialchars() transforme les chevrons (< et >) en caractères spéciaux. Le navigateur affiche bien les chevrons dans le message mais ne les assimile plus à du HTML donc plus d'attaque javascript ou css possible ! 


// ----------------- 9. Amélioration de l'affichage : date au format français
// Pour afficher notre date au format français, d'abord on doit agir sur la requête sql d'affichage
// Dans la requête, on passe dateEnregistrement dans la fonction SQL DATE_FORMAT() qui permet de formater une date et/ou une heure. On la passe dedans deux fois, la première pour récupérer la date au format français, qu'on met sous l'alias "datefr" et la seconde pour récupérer l'heure qu'on met sous l'alias 'heurefr'.
// Ensuite, il ne nous reste plus qu'à accéder à ces alias dans l'affichage pour afficher la date et l'heure correctement sur notre page. 

?>
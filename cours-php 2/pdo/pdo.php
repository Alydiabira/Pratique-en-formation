<style>
	h2 {
		text-align: center;
		font-size: 25px;
		font-weight: bold;
		color: white;
		background-color: purple;
	}
	h3 {
		text-align: center;
		font-size: 20px;
		color: goldenrod;
	}
</style>


<?php 

// PDO = PHP Data Object
// PDO est une classe PHP qui va nous permettre de manipuler les données en base de donnée


echo '<hr><h2> 01. PDO : connexion </h2>';

// On va instancier un nouvel objet issu de la classe PDO pour se connecter à la base de données
$pdo = new PDO('mysql:host=localhost; dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// arguments : 1 (serveur + nom de la base de données), 2 (pseudo), 3 (mot de passe), 4 (options - ici traitement des erreurs + encodage)

var_dump($pdo);
// si la connexion à la BDD est valide, le var_dump() affiche l'objet (sans afficher ce qu'il contient)

// on fait toujours un var_dump() de notre objet pdo pour vérifier que la connexion à la BDD est correcte !


echo "<pre>";
print_r(get_class_methods($pdo));
echo "</pre>";

// get_class_methods() est une fonction prédéfinie qui permet d'accéder aux méthodes contenues dans un objets (sans accéder à leur fonctionnement)

//--------------------------------

echo '<hr><h2> 02. PDO : EXEC - INSERT, UPDATE, DELETE </h2>';


// $resultat = $pdo->exec('INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ("test", "test", "M", "test", "2017-02-08", 500)');
// on utilise la méthode exec() contenue dans PDO pour envoyer une requête SQL d'insertion

// mise en commentaire parce que l'insert se fait à chaque actualisation de la page/exécution du code, donc on aurait beaucoup trop de lignes insérées à la fin du cours

$resultat = $pdo->exec('UPDATE employes SET salaire = 750 WHERE id_employes=991');

// on peut aussi envoyer des requêtes d'UPDATE avec la méthode exec()
// ici à chaque exécution du code, on fait cette modification

$resultat = $pdo->exec('DELETE FROM employes WHERE id_employes = 993');

// on peut aussi envoyer des requêtes de DELETE avec la méthode exec()



/*
    A RETENIR : 
        La méthode exec() est utilisée pour la formulation de requêtes SQL ne retournant pas de résultat (INSERT INTO, UPDATE, DELETE...)
*/



//--------------------------------

echo '<hr><h2> 03. PDO : QUERY - SELECT + FETCH_ASSOC (1 seul résultat) </h2>';


$resultat = $pdo->query("SELECT * FROM employes WHERE prenom = 'Emilie'");

var_dump($resultat);
// on peut voir que le résultat de notre query() est un objet issu de PDOSTATEMENT
// On n'a donc pas accès aux résultats de notre requête directement, on va devoir manipuler l'objet pour accéder aux données. 

echo "<pre>";
print_r(get_class_methods($resultat));
echo "</pre>";
// On peut voir que l'objet PDOSTATEMENT ne contien pas uniquement nos données mais contient aussi des méthodes

$employe = $resultat->fetch(PDO::FETCH_ASSOC);
// fetch() est une méthode de PDOSTATEMENT qui nous permet d'aller chercher les données reçues grâce à notre requête SELECT
// PDO::FETCH_ASSOC permet de traiter ces données et de nous les renvoyer sous forme d'array avec en indice le nom de la colonne et en valeur la valeur récupérée

echo "<pre>";
print_r($employe);
echo "</pre>";

echo 'Bonjour ' . $employe['prenom'] . " " . $employe['nom'] . ' Bienvenue et bon travail dans votre service de ' . $employe['service'] . '.';
// Quand on a une seule ligne en retour (un seul résultat) une fois les données traitées avec FETCH_ASSOC, on peut accéder aux données de manière assez simple comme dans n'importe quel array.


/*

    A RETENIR :
        $pdo représente un objet[1] issu de la classe prédéfinie PDO

        Quand on exécute une requête de sélection via la méthode query() sur l'objet PDO :
            On obtient un nouvel objet[2] issu de la classe PDO_STATEMENT. Cet objet a donc des méthodes et des propriétés différentes de l'objet PDO

        INFO : On peut aussi envoyer des requêtes INSERT INTO / UPDATE / DELETE grâce à query(). 

*/


// ---------- AUTRES POSSIBILITES DE TRAITEMENT DES DONNEES :

// INFO : les lignes suivantes sont commentées parce qu'on ne peut pas faire plusieurs traitements à un même objet PDOSTATEMENT

// $emp = $resultat->fetch(PDO::FETCH_ASSOC);
// var_dump($emp);
// FETCH_ASSOC donne un tableau indexé par le nom des champs

// $emp = $resultat->fetch(PDO::FETCH_NUM);
// var_dump($emp);
// FETCH_NUM donne un tableau indexé numériquement

// $emp = $resultat->fetch(PDO::FETCH_BOTH);
// var_dump($emp);
// FETCH_BOTH donne un tableau indexé et par les champs et numériquement

// $emp = $resultat->fetch(PDO::FETCH_OBJ);
// var_dump($emp);
// FETCH_OBJ retourne un objet avec les noms des champs comme propriétés publiques



//--------------------------------

echo '<hr><h2> 04. PDO : QUERY - WHILE + FETCH_ASSOC (plusieurs résultats) </h2>';


$result = $pdo->query("SELECT * FROM employes");

echo "Nombre d'employes : " . $result->rowCount() . "<br>";
// rowCount() est une méthode de PDOSTATEMENT qui permet de compter le nombre de lignes retournées par la requête (par exemple, c'est ce qui nous permettrait d'annoncer un nombre de résultats de recherche)

// Comme on a plusieurs résultats, on va devoir utiliser une boucle pour naviguer dans ces résultats

while($employes = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<ul>";
    echo "<li>" . $employes['id_employes'] . "</li>";
    echo "<li>" . $employes['prenom'] . "</li>";
    echo "<li>" . $employes['nom'] . "</li>";
    echo "<li>" . $employes['sexe'] . "</li>";
    echo "<li>" . $employes['service'] . "</li>";
    echo "<li>" . $employes['date_embauche'] . "</li>";
    echo "<li>" . $employes['salaire'] . "</li>";
    echo "</ul>";
}

// Le while permet de faire le même traitement à chaque ligne de résultat. La boucle s'arrête quand je suis arrivée au bout de mes résultats. 


/*
    A RETENIR :
        Quand on fait une requête qui retourne plusieurs résultats :
            - Il n'y a pas un tableau ARRAY avec tous les résultats mais un tableau ARRAY par ligne de résultat
            - Votre requête sort plusieurs résultats ? => on fait une boucle ! 
            - Votre requête ne sort qu'un résultat ? => Pas de boucle ! 
            - Votre requête pour l'instant ne sort qu'un résultat mais pourrait en sortir plusieurs ? => Une boucle ! 
*/


//--------------------------------

echo '<hr><h2> 05. PDO : QUERY - FETCHALL + FETCH_ASSOC (plusieurs résultats) </h2>';


$resultat = $pdo->query('SELECT * FROM employes');

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($donnees);
echo "<pre>";
// fetchAll() retourne les données sous forme de tableau multidimensionnel

// AFFICHAGE DES DONNEES :

foreach ($donnees as $indice => $contenu){
    // $contenu représente le tableau ARRAY qui contient les données / le tableau ARRAY de second niveau
    echo "<ul>";
        foreach ($contenu as $indice2 => $contenu2){
            echo "<li> $indice2 : $contenu2 </li>";
        }
    echo "</ul>";
}

// comme c'est un tableau multidimensionnel, on devra faire des foreach imbriqués pour accéder aux données ! 


//--------------------------------

echo '<hr><h2> 06. PDO : QUERY - FETCH + SHOW DATABASES</h2>';

// Exercice : affiche sur la page web la liste des BDD contenues dans votre PHPMYADMIN sous forme de liste (ul/li) grâce à une requête SQL (SHOW DATATABSES;) et query() et fetch(PDO::FETCH_ASSOC)

$resultat = $pdo->query("SHOW DATABASES");

echo "<ul>";
    while($bdd = $resultat->fetch(PDO::FETCH_ASSOC)){
        // print_r($bdd);
        // on voit que les résultats sont mis à l'index "database" du coup on va utiliser cet index pour afficher nos valeurs
        echo "<li>" . $bdd['Database'] . "</li>";
    }
echo "</ul>";

//--------------------------------

echo '<hr><h2> 07. PDO : QUERY - TABLE</h2>';

// Nous allons reproduire notre table employes sous forme de tableau HTML pour simplifier la lecture. 

// on fait notre requête
$resultat = $pdo->query("SELECT * FROM employes");

// --------le tableau

echo "<table border=5> <tr>";
// on ouvre le tableau et on ouvre la ligne de titres 
for($i=0; $i<$resultat->columnCount() ; $i++){
    // columnCount() permet de compter le nombre de colonnes dans notre tableau. Tant que $i est en dessous de ce nombre, on continue les tours de boucle

    $colonne = $resultat->getColumnMeta($i);
    // getColumnMeta() permet de récupérer les méta données associées aux colonnes de la table sous forme d'ARRAY

    echo "<th>" . $colonne['name'] . "</th>";
    // Nous récupérons à chaque tour de boucle le nom de la colonne concernée en utilisant l'indice "name"
}
echo "</tr>";
// on ferme la ligne de titres

while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    // à chaque ligne de résultat on navigue dans l'ARRAY correspondant
    echo "<tr>";
    // on ouvre une ligne de résultats

    foreach ($ligne as $information ){
        // on navigue dans chacun des tableaux $ligne grâce à notre foreach
        echo "<td> $information </td>";
        // chaque valeur est mise dans une cellule (td) qui composera la ligne
    }

    echo "</tr>";
    // on ferme une ligne de résultats
}

echo "</table>";
// on ferme le tableau


//--------------------------------

echo '<hr><h2> 08. PDO : PREPARE + BINDPARAM + EXECUTE</h2>';

// Les requêtes préparées permettent de sécuriser les données (c'est le strict minimum), elles permettent aussi de répéter certaines requêtes sans avoir à répéter le code

$nom = "Blanchet";

$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom');
// :nom = marqueur nominatif

$resultat->bindParam(':nom', $nom, PDO::PARAM_STR);
// bindparam() reçoit forcément une variable
// bindparam() lie le premier argument (marqueur nominatif) au second (variable) selon un type de paramètre (ici chaine de caractère)
$resultat->execute();
// execute() envoie la requête dans la BDD 

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
// une fois la requête exécutée, on traite les données comme dans une requête simple

echo implode(' - ', $donnees);
// rappel : implode() est une fonction prédéfinie qui permet d'afficher les valeurs d'un tableau dans une même chaine séparée par le séparateur passé en premier argument


//--------------------------------

echo '<hr><h2> 08. PDO : PREPARE + BINDVALUE + EXECUTE</h2>';

$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom');

$resultat->bindValue(':nom', 'Martin', PDO::PARAM_STR);
// bindValue fonctionne comme bindParam sauf qu'on peut y envoyer soit une variable soit une valeur directement à lier au marqueur nominatif

$resultat->execute();

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);

echo implode(' - ', $donnees);






















echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
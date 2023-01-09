<style>
	h2 {
		text-align: center;
		font-size: 25px;
		font-weight: bold;
		color: white;
		background-color: green;
	}
	h3 {
		text-align: center;
		font-size: 20px;
		color: goldenrod;
	}

	ol{
		text-align: center;
	}

	ol a{
		text-decoration: none;
		color: palevioletred;
		font-weight: bold;
		font-size: 20px;
	}

	ol a:hover{
		color: orangered;
		font-style: italic;
	}
</style>

<ol>
			<li><a href="#part1">Ecriture et affichage</a></li>
			<li><a href="#part2">Variables : Types / Déclaration / Affectation</a></li>
			<li><a href="#part3">Concaténation</a></li>
			<li><a href="#part4">Guillemets et Quotes</a></li>
			<li><a href="#part5">Constantes et Constantes magiques</a></li>
			<li><a href="#part6">Opérateurs arithmétiques</a></li>
			<li><a href="#part7">Structures conditionnelles (if/else) - opérateurs de comparaisons</a></li>
			<li><a href="#part8">Condition Switch</a></li>
			<li><a href="#part9">Fonctions prédéfinies</a></li>
			<li><a href="#part10">Fonctions utilisateur</a></li>
			<li><a href="#part11">Structures itératives : boucles</a></li>
			<li><a href="#part12">Inclusions de fichiers</a></li>
			<li><a href="#part13">Tableaux de données ARRAY</a></li>
			<li><a href="#part14">Boucle FOREACH pour les tableaux ARRAY</a></li>
			<li><a href="#part15">Tableaux mlitidimensionnels</a></li>
			<li><a href="#part16">Classes et Objets </a></li>
			<li><a href="#part17">Superglobales</a></li>
			<li><a href="#part18">GET</a></li>
			<li><a href="#part19">POST</a></li>
			<li><a href="#part20">COOKIES</a></li>
			<li><a href="#part21">SESSION</a></li>
			<li><a href="#part22">PDO</a></li>
		</ol>

<hr><h2 id="part1"> 1. Ecriture et affichage </h2>

<!-- Nous pouvons écrire du HTML dans un fichier avec extension .php . L'inverse n'est pas vrai ! -->

<!-- Pour écrire du PHP, il faut utiliser les balises PHP : -->


<?php
// balise ouvrante PHP

// Ceci un commentaire sur une ligne
/* Ceci est un commentaire sur plusieurs 
            Lignes ! */
# Ceci est aussi un commentaire sur une seule ligne

echo 'Hello World !';
// echo est une instruction qui permet d'effecture un affichage dans le navigateur

echo '<br>';
// on peut intégrer du html dans un echo

echo 'Bienvenue ! ';
// Si on regarde le code source dans le navigateur, on ne voit rien du PHP parce que le langage est interprété

echo '<br>';
// Tout au long du cours on utilisera les br pour la mise en page (pour rendre plus lisible), ça n'a rien à voir avec PHP, c'est juste une question pratique


// balise fermante PHP
?>

<?= "Allo ???" ?>
<!-- Cette écriture simplifiée permet de faire un echo sans avoir à ouvrir les balises PHP -->

<?= "<br>" ?>
<!-- Cette écriture ne fonctionne pas dans les balises php -->

<?php
// Quand on sait qu'on ne fera que du PHP dans un document, on peut ouvrir la balise sans la fermer

print 'Nous sommes lundi';
// Print est une autre instruction d'affichage. A notre niveau, print et echo sont totalement interchangeables. (dans les faits, echo serait un peu plus performant)
print '<br>';

// D'autres instructions d'affichages existent : print_r() et var_dump() en particulier. Mais on verra ça plus tard dans le cours, ce sont des outils de dev et pas des outils pour afficher pour les utilisatrices et utilisateurs.


// --------------------------------

echo '<hr><h2 id="part2"> 2. Variables : Types / Déclaration / Affectation </h2>';

// variable = espace nommé permettant de conserver une valeur

$a = 127; 
// Déclaration de la variable $a à laquelle on a affecté la valeur 127

$variable = '';
// On peut aussi déclarer une variable sans lui affecter de valeur, en la laissant "vide"

echo $a;
// pour afficher la variable on utilise un echo

echo "<br>";

echo gettype($a);
// gettype() est une fonction prédéfinie de PHP nous permettant d'accéder au type d'une variable. Ici, il s'agit d'un entier : integer

echo "<br>";

$b = 1.5;
echo gettype($b); //un nombre à virgule (double)

echo "<br>";

$c = "Nous apprenons PHP 🐘";
echo gettype($c); // une chaine de caractères (string)

echo "<br>";

$d = '127';
echo gettype($d); //une chaine de caractères aussi

echo "<br>";

$a2 = TRUE;
echo gettype($a2); // un booléen (boolean)

echo "<br>";


$b2 = FALSE;
echo gettype($b2); // un booléen aussi

echo "<br>";

// ATTENTION : les variables sont sensibles à la casse. $bonjour et $Bonjour sont deux variables différents
// On peut mettre des chiffres dans nos noms de variables, mais jamais commencer par un chiffre
// L'utilisation du camelCase est recommandée : $cetteVariableEstEnCamelCase
// Pour que votre code soit clair, essayez en général de nommer vos variables selon ce qu'elles contiennennt : $age, $prix...


// --------------------------------


echo '<hr><h2 id="part3"> 3. Concaténation </h2>';


$x = "Bonjour ";
$y = "tout le monde ! ";

echo $x . $y . "<br>";
// point de concaténation (équivalent à dire "suivi de")

echo "coucou" , " 🌼", "<br>";
// la virgule peut aussi servir pour la concaténation

// --------------------------------

// Concaténation lors de l'affectation

$prenom1 = "Tic";
$prenom1 = "Tac";
echo $prenom1 . "<br>";
// En PHP on peut réaffecter une nouvelle valeur à une variable à tout moment. C'est la dernière valeur affectée qui compte dans l'ordre chronologique

$prenom2 = "Tic";
$prenom2 .= " Tac";
// on peut "ajouter" une valeur à la précédente grâce à la concaténation lors de l'affectation

echo $prenom2 . "<br>"; // affiche Tic Tac

// --------------------------------


echo '<hr><h2 id="part4"> 4. Guillemets et Quotes </h2>';

$message = "aujourd'hui";
$message = 'aujourd\'hui';
// si on veut avoir une apostrophe dans notre chaine de caractère, il faut soit utiliser les guillemets (plus simple), soit les apostrophes mais en échappant l'apostrophe du mot grâce à un antislash

$txt = "bonjour";

echo $txt . " tout le monde ! <br>";
// la variable affiche sa valeur comme on a vu plus haut

echo "$txt tout le monde ! <br>";
// Affichage avec les guillemets, la variable est évaluée, on affiche sa valeur

echo '$txt tout le monde ! <br>';
// Affichage avec les apostrophoes/quotes, la variable n'est pas évaluée, on affiche son nom


// --------------------------------


echo '<hr><h2 id="part5"> 5. Constantes et Constantes magiques </h2>';

// une constante c'est comme une variable : un espace nommé qui contient une valeur, sauf que contrairement à la variable, cette valeur ne peut pas changer. 

define("CAPITALE", "Paris");
// Pour créer une constante, on utilise la fonciton prédéfinie define() à laquelle on envoie deux arguments : le nom de la constante (par convention, en majuscules) et la valeur qu'on lui affecte

echo CAPITALE . "<br>";


// constantes magiques

echo __FILE__ . "<br>"; // affiche le chemin complet vers le fichier où on se trouve
echo __LINE__ . "<br>"; // affiche la ligne à la quelle on se trouve dans le fichier


// Il y a 9 constantes magiques en PHP, pour en savoir plus : https://www.php.net/manual/fr/language.constants.magic.php


// --------------------------------


echo '<hr><h2 id="part6"> 6. Opérateurs arithmétiques </h2>';


$f = 10;
$g = 2;

echo $f + $g . "<br>"; //affiche 12

echo $f - $g . "<br>"; //affiche 8

echo $f * $g . "<br>"; //affiche 20

echo $f / $g . "<br>" ; //affiche 5

echo $f % $g . "<br>"; // (modulo = reste d'une division) affiche 0

echo $f ** $g . "<br>"; // (opérateur d'exponentation = affiche le résultat d'une puissance) affiche 100


// opérations par affectation

$f += $g; // équivaut à faire $f = $f + $g
echo $f . "<br>"; // à partir de là, $f vaut 12

$f -= $g;
echo $f . "<br>"; // $f revient à 10

$f *= $g;
echo $f . "<br>"; // $f vaut 20

$f /= $g;
echo $f . "<br>"; // $f vaut 10 à nouveau


// --------------------------------


echo '<hr><h2 id="part7"> 7. Structures conditionnelles (if/else) - opérateurs de comparaison </h2>';



// Isset & Empty
// isset() teste si la variable existe  et empty() teste si la variable est vide.

$var1 = 0;
$var2 = "";

if (empty($var1)) echo "0, vide, false ou non définie. <br>";
// comme $var1 vaut 0, on rentre bien dans la condition donc la chaine de caractère s'affiche bien

if (isset($var2)) echo "var2 existe bien ! <br>";


//---------------

//if, else elseif et opérateurs de comparaison

$h = 10;
$i = 5;
$j = 2;

if ($h > $i){ // si h est supérieure à i
	echo "h est bien supérieure à i <br>";
}else{ // sinon, h n'est pas supérieure à i
	echo "non c'est i qui est supérieure à h <br>";
}


if ($h < $i){
	echo "h est inférieure à i <br>";
} elseif ($i < $j){
	echo "i est inférieure à j <br>";
} else{
	echo "j est le plus petit nombre <br>";
}

if ($h > $i && $i > $j){
	echo "Okay pour les deux conditions <br>";
}
// && = AND, les deux conditions doivent être vraies pour que la condition soit valide

if ($h == 9 || $i > $j){
	echo "okay pour au moins l'une des deux conditions <br>";
}

// || = OR, au moins une des deux conditions (ou les deux) doit être vraie pour que le if soit valide

if ($h == 10 xor $j == 6){
	echo "okay pour la condition exclusive <br>";
}
// xor, condition exclusive, uniquement une des deux conditions doit être juste pour que le if soit valide (jamais les deux)


// ----------------------
// Forme contractée : l'écriture ternaire

echo ($h == 10) ? "h est égal à 10 <br>" : "h n'est pas égal à 10 <br>";
// l'avantage de l'écriture ternaire : on peut la faire directement dans un echo
//  ? remplace le if et : remplace le else


// ------------------

$varA = 1;
$varB = "1";


if ($varA == $varB){
	echo "il s'agit de la même chose";
}

// avec le double égal, PHP nous dit que les deux variables sont identiques. Avec le triple égal, PHP nous dit qu'elles sont différentes. Le double égal teste uniquement la valeur (ici, 1) et le triple égal teste la valeur (1) et le type (integer pour varA et string pour varB)


/* /❗\ Récapitulatif des opérateurs :
= 	 	Affectation (ceci n'est pas un opérateur de comparaison !)

== 	 	Comparaison des valeurs
!=		est différent de  (en terme de valeur)
===  	Comparaison des valeurs et du type
!==		est strictement différent de (en terme de valeur et/ou type)
>		est strictement supérieur à
<		est strictement inférieur à
>=		est supérieur ou égal à
<=		est inférieur ou égal à

*/


// --------------------------------


echo '<hr><h2 id="part8"> 8. Condition switch </h2>';


$couleur = "jaune";

switch ($couleur){
	case 'bleu':
		echo "Vous aimez le bleu. <br>";
		break; // on fait un break pour sortir du switch si on est entré dans un des cases
	case 'rouge':
		echo "Vous aimez le rouge <br>";
		break;
	case 'vert':
		echo "Vous aimez le vert <br>";
		break;
	default: // le cas par défaut, si on n'entre dans aucun cas précédent
		echo "Vous n'aimez ni le bleu, ni le rouge, ni le vert... <br>";
		break;
}



//------------------------------------------------------

	// EXERCICES

//------------------------------------------------------

echo'<hr> <h3> Exercice Comparaisons</h3>';


// EXERCICE : Je veux personnaliser le message d'accueil selon le prénom contenu dans ma variable $prenom. Mon message sera sur la forme "Bonjour" + prénom. Les personnes inscrites sur mon site sont : Farah, Sabrina et Jonathan. Au cas où on aurait un petit nouveau dans les inscrits, je vais mettre aussi un message possible "Bonjour nouvel-le inscrit-e !". 
// Vous pouvez utiliser le switch ou le if selon votre envie (et si vous avez le temps, faites les deux !)
// NB : en vrai développement web, on utiliserait une fonction utilisateur pour ça, mais comme on n'a pas encore vu, on utilise ce qu'on connaît !

$prenom = "Sabrina";

switch ($prenom){
	case "Farah":
		echo "Bonjour Farah <br>";
		break;
	case "Sabrina":
		echo "Bonjour Sabrina <br>";
		break;
	case "Jonathan":
		echo "Bonjour Jonathan <br>";
		break;
	default:
		echo "Bonjour nouvel-le inscrit-e ! <br>";
		break;
}


if($prenom == "Farah"){
	echo "Bonjour Farah <br>";
}elseif($prenom == "Sabrina"){
	echo "Bonjour Sabrina <br>";
}elseif($prenom == "Jonathan"){
	echo "Bonjour Jonathan <br>";
}else{
	echo "Bonjour nouvel-le inscrit-e ! <br>";
}

// en simplifiant ! 
if($prenom == "Farah" || $prenom == "Sabrina" || $prenom == 'Jonathan'){
	echo "Bonjour $prenom <br>";
}else{
	echo "Bonjour nouvel-le inscrit-e ! <br>";
}


// --------------------------------


echo '<hr><h2 id="part9"> 9. Fonctions prédéfinies </h2>';


// --------------------------------
// Affichage de la date

echo "<br> Date: <br>";
echo date("d/m/Y") . "<br>";
// la fonction prédéfinie date() permet d'accéder à un élément lié à la date selon les arguments qu'on lui envoie.
// Ici d = le jour (19), m = le mois (12), Y = l'année (2022)


// Par défaut, date() affiche les éléments de date du moment où le code est exécuté. 
// Pour en savoir plus : https://www.php.net/manual/fr/function.date.php





// --------------------------------
// Traitement des chaines


$email1 = "contactd-aly@outlook.fr";

echo strpos($email1, "@") . "<br>";
// indique 7 (on commence à 0)

// strpos() permet de chercher la position d'une chaine dans une autre chaine


$email2 = "bonjour";

echo strpos($email2, "@");
// rien ne s'affiche parce qu'il n'y a pas d'arobase dans "bonjour"

var_dump(strpos($email2, "@"));
// grâce au var_dump() on peut voir qu'en fait la fonction renvoie bien une valeur. Elle renoie un booléen FALSE et pas juste aucun valeur. 
// var_dump() est une instruction d'affichage améliorée qu'on utilise UNIQUEMENT en phase développement 

// var_dump() affiche les informations d'une variable (dont le type et la valeur)

echo "<br>";


// --------------------------------
// Traitement des chaines 2


$phrase = "Ceci est une phrase ! ";

echo strlen($phrase) . "<br>"; //affiche 22

// strlen() compte le nombre de caractères dans une chaine



// --------------------------------


echo '<hr><h2 id="part10"> 10. Fonctions utilisateurs </h2>';

// les fonctions utilisateur ne sont pas prédéfinies dans le langage et son déclarées puis exécutées par l'utilisatrice ou l'utilisateur



// déclaration

function separation(){
	echo "<hr><hr><hr>";
}
// la fonction separation() permet d'afficher trois traits de séparations à son exécution, elle ne demande pas d'argument


//exécution 

separation();
// pour exécuter une fonction il suffit de la nommer dans le document après l'avoir déclarée.


// --------------------------------
// fonction avec argument(s) : les arguments sont des paramètres fournis à la fonction et lui permettent de compléter ou modifier son comportement initialement prévu


// déclaration

function bonjour($nom){ //$nom est une variable de réception. Elle permet de symboliser le comportement que la fonction aura avec l'argument. (elle peut être nommée n'importe comment tant qu'on reste cohérents)
	return "Bonjour $nom. <br>";
}


$prenom = "Monica";

//exécution
echo bonjour("Rachel");
// s'il y a un return dans la fonction, il faudra l'exécuter dans un echo pour avoir un affichage
echo bonjour('Phoebe');
echo bonjour($prenom);
// on peut bien sûr envoyer une variable en argument

// --------------------------------

function appliqueTVA($prix){
	return $prix * 1.2;
}

echo appliqueTVA(90) . "<br>";


//------------

//Exercice : Pourriez-vous améliorer cette fonction afin que l'on puisse calculer un nombre avec les taux de notre choix (19.6%, 5.5%, 7%). (Testez votre fonction avec plusieurs valeurs pour vérifier que ça fonctionne !)
// Pour cela créez une fonction appliqueTVA2()

function appliqueTVA2($prix, $taux = 20){ // argument initalisé par défaut si l'on ne l'envoie pas - on le rend optionnel
	return $prix * $taux/100 + $prix;
}

echo "10 euros avec une tva de 20% font : " . appliqueTVA2(10, 20) . ".<br>";
echo "75 euros avec une tva de 5.5% font : " . appliqueTVA2(75, 5.5) . ".<br>";
echo "10 euros avec une tva de 20% font : " . appliqueTVA2(10) . ".<br>";

// Attention : on a nommé notre fonction appliqueTVA2() parce que deux fonctions ne doivent pas posséder le même nom. 

// --------------------

function jourSemaine(){
	$jour = "mardi";
	return $jour;
}

echo jourSemaine() . "<br>"; //affiche bien mardi
// echo $jour; //fait une erreur, la variable n'est pas définie

// $jour est une variable locale, elle est accessible uniquement dans la fonction où elle a été déclarée. Pour accéder à sa valeur, il faut forcément passer par une exécution de la fonction.

$pays = "France"; // variable globale

function affichagePays(){
	global $pays;
	// pour utiliser une variable globale dans le local (la fonction), il faut utiliser le mot clé global pour appeler la variable
	echo $pays . "<br>";
}

affichagePays(); 
// affiche bien le contenu de la variable grâce au mot clé global


// ----------------

function identite(string $nom, int $age){
	return $nom . " a " . $age . " ans ! <br>";
}

echo identite("Magali", 35);

// On peut préciser en amont le type obligatoire des valeurs entrantes dans les arguments. C'est une bonne habitude à prendre pour la sécurisation des données ! Ici, si je mets un chiffre à la place du nom, j'ai une erreur. 



// --------------------------------


echo '<hr><h2 id="part11"> 11. Structures itératives : Boucles</h2>';


// itération = action de répéter une action en mathématiques


// boucle while

$i = 0;

while ($i < 3){ // tant que $i est inférieure à 3
	echo "$i..."; //on affiche la valeur de $i
	$i++; // on incrémente $i ( c'est à dire, on augmente $i de 1, $i++ revient à faire $i = $i + 1)
}

// Quand $i passe à trois, on ne peut plus valider la condition de la boucle, donc on arrête le traitement

echo "<br>";


// -----------------

// boucle for 


for ($j = 0; $j < 16; $j++){
	// valeur de départ ; condition d'entrée dans la boucle ; sens (incrémentation ou décrémentation)
	echo $j . "<br>";
}

?>

<!-- Démo d'un select pour l'exercice suivant -->

<select>
	<option>1</option>
	<option>2</option>
	<option>3</option>
</select><br>


<?php

// Exercice : afficher 31 options dans un select (de 0 à 30) via une boucle. 

echo '<select>';

for($j = 0; $j < 31; $j++){
	echo "<option>$j</option>";
}

echo '</select><br>';

// ----------------

// Exercice : Faites une boucle qui affiche de 9 à 0 sur une même ligne

$i = 9;

while ($i >= 0){
	echo $i . " ";
	$i--;
}

// Exercice : Faites une boucle qui affiche de 0 à 9 sur une même ligne dans une table HTML

?>

<!-- exemple de table HTML -->

<table border="1">
	<tr>
		<td>cellule 1</td>
		<td>cellule 2</td>
		<td>cellule 3</td>
	</tr>
	<tr>
		<td>cellule 4</td>
		<td>cellule 5</td>
		<td>cellule 6</td>
	</tr>
</table>

<?php


echo '<table border="1"><tr>';

for ($i = 0; $i <= 9; $i++){
	echo '<td>' . $i . '</td>';
}

echo '</tr></table><br>';

// -------------

// Exercice : Faire la même chose en allant de 0 à 99 sur plusieurs lignes sans faire une boucle par ligne. (Il faut faire le moins de boucles possibles. )


// Boucle imbriquée -- méthode 1


$z = 0;

echo '<table border="2">';

for ($ligne = 0; $ligne < 10; $ligne++){ //on crée les lignes du tableau grâce à cette boucle
	echo "<tr>"; //à chaque tour de cette boucle, on crée une ligne puis on essaie d'entrer dans la deuxième boucle
	for ($cellule = 0; $cellule < 10; $cellule++){ //la deuxième boucle crée les cellules dans chaque ligne
		echo "<td> $z </td>";
		$z++;
		// a chaque création de cellule, on affiche la valeur de $z puis on l'incrémente
	}
	echo "</tr>";
}

echo '</table><br>';



// boucle imbriquée -- méthode 2

echo '<table border ="2">';

for ($ligne = 0; $ligne < 10; $ligne++ ){//on crée nos lignes comme dans la boucle précédente
	echo "<tr>";
		for ($cellule = 0; $cellule < 10; $cellule++ ){//on crée nos cellules aussi de la même façon
			echo "<td>" . (10 * $ligne + $cellule) . "</td>";
			// on accède au contenu en faisant un calcul : 10 * la valeur de la ligne + la valeur de cellule. 
		}
	echo "</tr>";
}

echo '</table><br>';


// boucle imbriquée -- méthode

$i = 0;

echo '<table border="2">';

while ($i < 99){
	echo "<tr>";
		for ($k = 0; $k <= 9; $k++ ){
			echo "<td>$i</td>";
			$i++;
		}
	echo "</tr>";
}

echo '</table><br>';


// Exercice affichage :

// Créez un dossier /img/ dans votre dossier de cours. Dedans, vous allez enregistrer 5 images qui auront la même extension (.jpg par exemple) et que vous appellerez image1.jpg, image2.jpg etc. 
// Créez un affichage automatisé de ces images dans ce document. (deux lignes de code)

for($i = 1; $i < 5; $i++){
	echo '<img src="img/image' . $i . '.jpg" alt="" width="150px">';
}


// --------------------------------


echo '<hr><h2 id="part12"> 12. Inclusions de fichiers</h2>';


// création d'un fichier exemple.inc.php avec seulement du texte à l'intérieur

echo "<strong>Première fois </strong>: <br>";
include("exemple.inc.php");
echo "<br>";
// include() est une fonction prédéfénie qui permet d'importer le contenu d'un autre fichier. 


echo "<strong>Deuxième fois </strong>: <br>";
include_once("exemple.inc.php");
echo "<br>";
// include_once() fonctionne comme include() sauf que si le contenu a déjà été importé, alors include_once() ne l'importe pas.


echo "<strong>Troisième fois </strong>: <br>";
require("exemple.inc.php");
echo "<br>";
// require() fonctionne comme include


echo "<strong>Quatrième fois </strong>: <br>";
require_once("exemple.inc.php");
echo "<br>";
// require_once() fonctionne comme require_once()


/*

	Différence entre require et include, s'il y a une erreur sur le chemin vers le fichier qu'on veut inclure :
		- include fait une erreur et continue l'exécution du code
		- require fait une erreur et stoppe l'exécution du code

*/


// --------------------------------

echo '<hr><h2 id="part13"> 13. Tableaux de données ARRAY</h2>';

// un tableau ARRAY est une variable qui contient plusieurs valeurs organisées sous forme indice => valeur

$liste = array("Homer", "Marge", "Bart", "Lisa", "Maggie");

// echo $liste; 
// echo ne peut pas afficher les valeurs contenues dans un tableau array

// dans l'environnement de dev (ce qui n'est pas vu par l'utilisatrice ou l'utilisateur)
print_r($liste);
// print_r() permet d'accéder aux valeurs et indices contenus dans le tableau array. (Rappel : on n'utilise jamais de print_r() pour afficher dans l'environnement de prod - pour les utilisatrices et utilisateurs)


// avec mise en page
echo "<pre>";
print_r($liste);
echo "</pre>";

// pre est une balise HTML permettant de formater le texte, ici ça nous met en forme la sortie du print_r() en mettant le tableau à la verticale



echo "<pre>";
var_dump($liste);
echo "</pre>";

// var_dump() affiche le contenu du tableau en ajoutant certaines informations comme le type des variables, la longueur du tableau...


// -------------

$couleur = array("j" => "jaune", "b" => "bleu", "v" => "violet");

echo "<pre>";
print_r($couleur);
echo "</pre>";

// on peut si on le souhaite créer nous-même les indices liés à nos valeurs.

echo "taille du tableau : " . count($couleur) . "<br>";
echo "taille du tableau : " . sizeof($couleur) . "<br>";
// count() et sizeof() permettent de compter les lignes d'un tableau

echo implode(" - ", $couleur) . "<br>";
// implode() permet d'afficher sous forme de chaine de caractère les valeurs contenues dans un tableau, séparées par un séparateur (1er argument)


echo $couleur["b"];



// --------------------------------

echo '<hr><h2 id="part14"> 14. Boucles FOREACH pour les tableaux de données ARRAY</h2>';

// foreach est une boucle qui permet de passer en revue le contenu d'un tableau ou d'un objet. Si on essaie de l'utiliser sur un autre type de variable, ça ne marchera pas. 

$tab[] = "France";
// je dis que j'affecte à la variable $tab qui est un tableau array la valeur France

$tab[] = "Italie";
$tab[] = "Espagne";
$tab[] = "Angleterre";
$tab[] = "Portugal";

echo "<pre>";
print_r($tab);
echo "</pre>";


foreach ($tab as $valeur){
	// le mot as est un mot clé qui permet de dire au foreach quoi utiliser comme symbole des valeurs
	// nom du tableau as variable qui représente les valeurs
	echo $valeur . "<br>";
}

foreach ($tab as $indice => $valeur){
	// nom du tableau as variable qui représente les indices => variable qui représente les valeurs
	echo $indice . " - " . $valeur . "<br>";
}

//------------------------------------------------------

	// EXERCICE

//------------------------------------------------------
echo'<hr> <h3> Exercice Array</h3>';

// Créez un tableau array qui contien en indice le prénom d'une célébrité et en valeur son nom de famille. (5 ou 6 célébrités)
// Grâce à un foreach, affichez le prénom et le nom de chaque célébrité avec un retour à la ligne entre chaque personne. 


$celebrites = ["vin" => "diesel", "michelle" => "rodriguez", "tyrese" => "gibson", "jordana" => "brewster", "charlize" => "theron"];

foreach ($celebrites as $prenom => $nom){
	echo $prenom . " " . $nom . "<br>";
}

// --------------------------------

echo '<hr><h2 id="part15"> 15. Tableaux multidimensionnels</h2>';


$tab_multi= array(0 => array("prenom" => "Tony", "nom" => "Stark", "super" =>"Iron Man"), 1 => array("prenom" => "Natasha", "nom" => "Romanoff", "super" => "Black Widow"));

echo "<pre>";
print_r($tab_multi);
echo "</pre>";

// Un tableau multidimensionnel est un tableau qui contient lui-même un ou des tableaux. Il peut y avoir plusieurs niveaux de profondeur. 


echo $tab_multi[0]['super'] . "<br>";
// on peut naviguer dans un tableau multidimensionnel grâce à ses indices


for ($i = 0; $i < sizeof($tab_multi); $i++){
	echo $tab_multi[$i]['prenom'] . " ". $tab_multi[$i]['nom'] . " est " . $tab_multi[$i]['super'] . " ! <br>";
}


// --------------------------------

echo '<hr><h2 id="part16"> 16. Classes et Objets</h2>';

// Un objet est un autre type de données. Il permet de regrouper des informations. Il est plus complexe qu'un ARRAY parce qu'il peut regrouper des variables mais aussi des fonctions.
// En objet, les variables sont appelées attributs ou propriétés, les fonctions sont appelées méthodes.

// Pour créer un objet, on doit d'abord créer un "modèle", c'est la classe.
// Une classe permet de définir ce qu'un objet contiendra. Une classe est comme un plan de construction, l'objet est la maison qui est construite. A partir du même plan, de la même classe, on peut créer plusieurs maisons, plusieurs objets.

class Etudiant{
	public $prenom = "Julien";
	// public permet de préciser que l'élémet sera accessible de partout dans le code (il y a aussi protected et private que nous verrons dans le cours de POO).
	public $age = 25;
	public function pays(){
		return "France";
	}
}

// la classe Etudiant est le modèle, nous allons maintenant créer un objet issu de cette classe

$objet = new Etudiant;
// new est le mot clé qui permet d'instancier la classe et d'en faire une objet. C'est ce qui nous permet de nous servir des informations et méthodes contenues dans l'objet. On ne se sert de ce qui est dans la classe que via l'objet. La classe est le modèle, l'objet est une version de ce modèle.
// Ici $objet est un objet de la classe Etudiant

// echo $objet;
// comme pour les array, on ne peut pas faire un echo simple de l'objet

echo "<pre>";
var_dump($objet);
echo "</pre>";
// avec un var_dump nous pouvons accéder aux attributs publics uniquement, le reste est "caché

echo $objet->prenom . "<br>";
echo $objet->age . "<br>";
// on peut accéder aux données avec cette syntaxe. Attention, on n'utilise pas le symbole $ dans ce cas
echo $objet->pays() . "<br>";
// on exécute la méthode contenue dans l'objet


/*
	Contexte : Sur un site, une classe panier contiendra :
		- toutes le méthodes utiles au panier : ajouterArticle(), retirerArticle(), validerPaiement(), calculerTotal()...
		- tous les attributs en rapport avec le panier : $nombreArticles, $prixUnitaire, $prixTotal, $quantite...
	L'objet sera le panier lui-même avec ses fonctionnalités. 

*/

// Exercice : 
// Créez une classe "ApprenantDev" qui permettra d'enregistrer le nom et le prénom de la personne, son âge, son ancien métier, ses notes durant la formation. Créez aussi une fonction qui selon ce que l'apprenant-e est en train d'apprendre, affichera une phrase disant "Bonne chance pour le [langage en cours] !" (par exemple cette semaine ça dirait "Bonne chance pour le PHP !")
// Affichez ensuite ces informations dans le navigateur (pas avec un var_dump())
// pour cet exemple, vous pouvez mettre les informations directement dans la classe, nous verrons la version plus complexe en POO

class ApprenantDev{
	public $nom = "Magali Milbergue";
	public $age = 35;
	public $ancienMetier = "Travaileuse social";
	public $notes = ["html/css" => "A", "javaScript" => "C", "PHP" => "A"];

	public function messageEncouragement($langage){
		return "Bonne chance pour le $langage ! <br>";
	}
}

$apprenante = new ApprenantDev();

echo $apprenante->nom . "<br>";
echo $apprenante->age . "<br>";
echo $apprenante->ancienMetier . "<br>";


foreach ($apprenante->notes as $indice => $valeur){
	echo $indice . " = " . $valeur . "<br>";
}

echo $apprenante->messageEncouragement("PHP");



// --------------------------------

echo '<hr><h2 id="part17"> 17. Superglobales </h2>';

// les superglobales sont des tableaux array prédéfinis par PHP qui sont toujours disponibles, quel que soit le contexte (global ou local)
// Elles s'écrivent en majuscules et commencent par un underscore ("_"). (Sauf la superglobale $GLOBALS)

echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

// GLOBALS contient toutes les variables du contexte global
// Ici, elle affiche toutes les variables utilisées dans ce cours
// Elle contient aussi les superglobales et elle-même (d'où le terme "récursion" précisé dans son affichage) (récursion = quand une chose se définie en elle-même)

// --------------------------------

echo '<hr><h2 id="part18"> 18. La superglobale GET </h2>';

// Pour ce cours nous allons créer un sous-dossier /get/ et dans un premier temps nous allons y créer un fichier page1.php et un fichier page2.php, c'est dans ces fichiers que nous allons continuer le cours. 


// Créez un fichier exercice-multilingue.php dans votre dossier /get/, vous y trouverez la suite du cours sous forme d'exercice. 

// Créez un fichier exercice-darkmode.php dans le dossier /get/, vous y trouverez la suite du cours sous forme d'exercice.


// --------------------------------

echo '<hr><h2 id="part19"> 19. La superglobale POST </h2>';

// créez un dossier /post/ dans le dossier de cours et créez un fichier formulaire1.php, c'est là que continuera le cours. 

// créez un fichier formulaire2.php dans votre dossier /post/, vous y trouverez la suite du cours (sous forme d'exercice)

// Créez les fichiers formulaire3.php et formulaire4.php dans le dossier /post/, vous y trouverez la suite du cours. 

// Créez le fichier lecture.php dans le dossier /post/, vous y trouverez la suite du cours

// Créez le fichier formulaire-mail.php dans le dossier /post/, vous y trouverez la suite du cours.


//------------------------------------------------------


echo '<hr><h2 id="part20"> 20. Cookies 🍪 </h2>';

// Créez un dossier /cookies/ dans lequel vous allez créer un fichier pays.php, c'est dans ce fichier que se trouvera le cours. 


//------------------------------------------------------


echo '<hr><h2 id="part21"> 21. Sessions </h2>';

// créez un dossier /sessions/ dans lequel vous allez créer un fichier session1.php, vous y trouverez le début du cours. 

// créez un fichier session2.php, vous trouverez la suite du cours


//------------------------------------------------------


echo '<hr><h2 id="part22"> 22. PDO </h2>';

// Créez un dossier /pdo/ dans le dossier de cours et dedans créez un fichier pdo.php c'est là que commencera cette partie du cours

// Créez un fichier dialogue-et-faille-securite.php dans le dossier /pdo/, c'est la que vous trouverez la suite du cours. 


//------------------------------------------------------

echo'<hr> <h3>Exercice : salade de fruits !</h3>';

// Créez un dossier /fruits/ dans lequel on va créer un premier fichier fonction.inc.php c'est là que se trouvera le premier exerice à faire
// Créez un fichier appel.php dans le dossier /fruit/ pour l'exercice suivant
// Créez un fichier liens_fruits.php dans le dossier /fruit/ pour le troisième exercice
// Créez un fichier tableau.php dans votre dossier /fruit/ pour le quatrième exercice
// Créeez un fichier formulaire.php dans le dossiert /fruit/ pour le dernier exercice (avec formulaire-correction pour la correction)











echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
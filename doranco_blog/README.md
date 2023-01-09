# Projet Blog PHPOO MVC

### Consigne
Pour ce projet il s'agit de créé un blog en PHP Orienté Objet relier à une base de donnée MYSQL.

La base de donnée se compose de 2 tables, ***Utilisateurs*** & ***Articles***.

La table ***Utilisateurs*** est composé des colonnes suivantes:
 - **lastname** - contient entre 2 & 20 caractères
 - **firstname** - contient entre 2 & 20 caractères
 - **email**
 - **password** - doit être crypté
 - **alias** - contient entre 6 & 25 caractères
 - **bio** - contient au minimum 3000 caractères

La table ***Articles*** est composé des colonnes suivantes:
 - **title** - contient entre 50 & 255 caractères
 - **excerpt** - contient entre 50 & 2000 caractères
 - **content** - contient au moins 10000 caractères
 - **category**
 - **date**
 - **author**

L'application web devra disposé des fonctionnalitées suivantes:
 - **Inscription** - une page permettant à un utilisateur de créé un compte sur l'application web via un formulaire (Champs: lastname, firstname, email, password, alias).
 - **Connexion** - une page permettant à un utilisateur enregistré sur l'application web de se connecté via un formulaire (Champs: alias, password).
 - **Affichage profil** - une page affichant les information de l'utilisateur connecté.
 - **MàJ Profil** - une page permettant à l'utilisateur connecté de modifier ces informations personnels
👍🏿 - **Liste des articles** - une page listant la totalité des articles présent en base de donnée
 - **Créé un article** - Une page permettant de créé un article via un formulaire (Champs: title, excerpt, content, category, date, author)
 👍🏿 - **Afficher un article** Une page affichant un article
 - **MàJ un article** - Une page permettant de modifier un article via un formulaire (Champs: title, excerpt, content, category, date)
 - **Supprimer un article** - Un bouton permettant de supprimer un article

[WARNING](../public/images/téléchargement.jpeg)Tout les formulaire dispose de la validation des données selon les règles définies.

### La structure
=> **app** ce dossier contient toutes les classes de notre application.
=> **public** ce dossier contitent tous les fichiers publiques de notre application.

L'idée de cette structure c'est de ne pas laissé ***l'accès au serveur** à la racine de notre application. On limite l'accès à un certain dossier, cela permet d'avoir **une meilleur sécurité** mais auusi **une meilleur organisation**.

Autre avantage de la structure MVC est la **réutilisabilité** du code.

### Le délai
Livraison le **13/01/2023**
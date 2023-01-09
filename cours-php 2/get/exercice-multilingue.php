<h1>EXERCICE MULTILINGUE</h1>

<!-- CONSIGNE : Créez trois liens différents (qui mènent à cette page) permettant de choisir la langue du site. Chaque lien cliqué doit donner lieu à un petit message dans la langue en question affiché dans la page web. (par exemple, si je clique sur le lien pour avoir la page en français, j'ai un message "bonjour et bienvenue", si je clique sur le lien pour avoir la page en anglais, j'ai un message "hello and welcome") -->


<a href="?langue=fr">Français</a><br>
<a href="?langue=en">English</a><br>
<a href="?langue=pt">Português</a><br>


<?php

if($_GET){
    if($_GET['langue'] === "fr"){
        echo "Bonjour et bienvenue ! <br>";
    }elseif($_GET['langue'] === 'en'){
        echo "Hello and welcome ! <br>";
    }else{
        echo "Ola e bem-vindo ! <br>";
    }
}

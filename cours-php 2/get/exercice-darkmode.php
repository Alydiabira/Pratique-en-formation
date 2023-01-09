<!-- consigne : Grâce à GET, créez une page web avec deux possibilités de design :
    - Un mode "light" avec fond clair et couleur de police foncé
    - Un mode "dark" avec fond foncé et couleur de police clair
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essai Darkmode/Lightmode</title>
    <link rel="stylesheet" href="<?php if($_GET){echo ($_GET['mode'] === 'dark') ? 'darkmode.css' : 'lightmode.css';} ?>">
    <!-- Deuxième solution (la plus adaptée) : on crée deux fichiers css distincts. Selon ce qu'il y a dans le get, on envoie un fichier css différent dans le head. (rappel : on utilise ici l'écriture ternaire vue dans le cours pour simplifier l'écriture du if/else) -->

</head>
<body>

    <a href="?mode=dark">Darkmode</a> - <a href="?mode=light">Lightmode</a><br>

    <h1>Titre de la page</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque quas eius corrupti nesciunt animi blanditiis dolorem minima delectus, ipsam tempora non maxime omnis provident, ducimus sapiente, consectetur inventore laudantium!</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque quas eius corrupti nesciunt animi blanditiis dolorem minima delectus, ipsam tempora non maxime omnis provident, ducimus sapiente, consectetur inventore laudantium!</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque quas eius corrupti nesciunt animi blanditiis dolorem minima delectus, ipsam tempora non maxime omnis provident, ducimus sapiente, consectetur inventore laudantium!</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque quas eius corrupti nesciunt animi blanditiis dolorem minima delectus, ipsam tempora non maxime omnis provident, ducimus sapiente, consectetur inventore laudantium!</p>

<!-- Première possibilité : intégration du style via un echo de balises style.  -->
    <!-- <?php
        if($_GET){
            if($_GET['mode'] === 'dark'){
                echo "<style>
                    body{
                        background-color: darkslateblue;
                        color: lightpink;
                    }

                    h1{
                        color: lightyellow;
                    }

                    a{
                        text-decoration: none;
                        font-weight: bold;
                        color: white;
                    }

                    a:hover{
                        color: lightgreen;
                    }

                </style>";
            }else{
                echo "<style>
                    body{
                        background-color: lightpink;
                        color: darkslateblue;
                    }

                    h1{
                        color: darkviolet;
                    }

                    a{
                        text-decoration: none;
                        font-weight: bold;
                        color: black;
                    }

                    a:hover{
                        color: darkblue;
                    }

                </style>";

            }
        }
    ?> -->
    
</body>
</html>
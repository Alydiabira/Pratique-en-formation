<?php


namespace commerce1{
    
    class Commande{
        public $nbCommandes = 1;

        public function strlen($mdp){
            return "Il y a " . \strlen($mdp) . " caractères dans ce mot de passe.";
            // si on veut accéder à l'espace global dans on est dans un autre espace de nom, il suffit de juste faire un \ devant l'élément de l'espace global qu'on veut aller piocher

            //ici, on crée une fonction strlen() dans notre classe Commande qui se trouve dans l'espace de nom Commerce1, et cette fonction utilise strlen() de l'espace global pour calculer le nombre de caractère dans une chaine de caractères et ajoute un return mieux formulé. 
        }
    }

}


namespace Commerce2{
    class Produit{
        public $nbProduits = 22;
    }

    class Inscription{

        public function mdpLen($mdp){
            if(\strlen($mdp) >= 8){
                return "Merci, votre mot de passe est valide ! <hr>";
            }else{
                throw new \Exception("Erreur. Merci d'entrer un mot de passe de plus de huit caractères. <hr>");
            }
        }

        public function validEmail($email){
            if(\strpos($email, '@')){
                // Rappel : strpos retourne la position d'une chaine de caractères (argument deux) dans une autre chaine de caractères (argument un)
                return 'Merci, votre email est valide ! <hr>';
            }else{
                die("Erreur. Merci d'entrer une adresse email valide. <hr>");
            }
        }

    }
}
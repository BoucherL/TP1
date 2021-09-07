<?php
    class userConnexion{

        //Propriétés
        public $serveur;
        public $user;
        public $passwd;
        public $bdd;

        //Méthodes
        function Connexion($serveur, $user, $passwd, $bdd){
            $this->user = $user;
            $this->passwd = $passwd;
            $this->bdd = $bdd;
        }
    }
?>
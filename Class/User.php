<?php
    class userConnexion{

        //Propriétés
        public $serveur;
        public $user;
        public $passwd;
        public $bdd;
        public $admin;

        //Méthodes
        public function __construct($serveur, $user, $passwd, $bdd){

            $this->user = $user;
            $this->passwd = $passwd;
            $this->bdd = $bdd;
            $this->admin = $admin;
        }

        public function SeConnecter(){

        }

        public function Inscription(){

        }

        public function SeDeconnecter(){

        }
        public function modifpassword(){
            
        }

}
?>
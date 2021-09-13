<?php
    class User{

        //Propriétés
        private $_user;
        private $_passwd;
        private $_admin;
        private $_bdd;

        //Méthodes
        function __construct($user,$passwd,$admin,$bdd){

            $this->_user = $user;
            $this->_passwd = $passwd;
            $this->_admin = $admin;
            $this->_bdd = $bdd;
        }

        public function SeConnecter($user,$passwd,$admin){

        }

        public function Inscription($user,$passwd){

        }

        public function SeDeconnecter(){

        }
        public function modifpassword($user,$passwd){
            
        }
        public function admin(){

        }

}
?>
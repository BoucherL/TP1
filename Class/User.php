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
            //$this->_bdd = new PDO('mysql:host=192.168.64.204; dbname=TP1; charset=utf8','admin', 'admin');
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
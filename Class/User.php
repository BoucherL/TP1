<?php
    class User{

        //Propriétés
        private $_user;
        private $_passwd;
        private $_admin;
        private $_bdd;

        //Méthodes
        function __construct($bdd){

            $this->_bdd = $bdd;
        }

        public function setIdUser($UserID){
            $Result = $this->_bdd->query("SELECT * FROM `user` WHERE `user`='".$UserID."' ");
            if($tab = $Result->fetch()){ 
                $this->_user = $tab['user']);
                $this->_passwd = $tab['passwd']);
                $this->_admin = $tab['IsAdmin']);
            }
        }

        public function AfficheLoginForm(){
            ?>

                <form action="index.php" method="post">

                    <h1>Connexion</h1>
                    <b class='LoginValid'><?php echo $LoginValid ?></b>

                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" class='submit' value='Login' >
                    <p> Pas de compte ? <a href="register.php">Inscrivez-vous</a></p>
                </form>

            <?php
        }

        public function Connexion($serveur,$user,$passwd,$bdd){

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
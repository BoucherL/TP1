<?php
    class User{

        //Propriétés
        private $_user;
        private $_passwd;
        private $_admin;
        private $_bdd;

        //Méthodes
        function __construct($){}

        /*public function setIdUser($UserID){
            $Result = $this->_bdd->query("SELECT * FROM `user` WHERE `user`='".$UserID."' ");
            if($tab = $Result->fetch()){ 
                $this->_user = $tab['user']);
                $this->_passwd = $tab['passwd']);
                $this->_admin = $tab['IsAdmin']);
            }
        }*/

        public function AfficheForm(){
            ?>

                <form action="" method="post">

                    <h3>Se connecter / S'inscrire</h3>
                    <b class='ErrorValid'><?php echo $ErrorValid ?></b>

                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" class='submit' value='Login'>
                    <input type="submit" class='submit' value='Register'>
                </form>

            <?php
        }

        public function Autorisation($login, $passwd){
            echo "coucou";
        }

        public function Connexion($user,$passwd,$bdd){

        }

        public function Inscription($user,$passwd){

        }

        public function SeDeconnecter(){

            // - Affiche formulaire
            $Afficheform = true;
            $access = true;

            if( isset($_POST["logout"])){
                // - Si déconnecté affiche formulaire de connexion
                $_SESSION["Logged"] = false;
                session_unset();
                session_destroy();

                $this->Connexion();
                $AfficheForm = false;
                $access = false;
            }else{
                $AfficheForm = true;
            }
    
            if($AfficheForm){
            ?>
                <form action="" method="post" >
                    <div >
                        <input type="submit" value="Déconnexion" name="logout">
                    </div>
                </form>
            <?php
            }
            return $access;
        }

        public function modifpassword($user,$passwd){
            
        }
        public function admin(){

        }

}
?>
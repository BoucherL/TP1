<?php
    class User{

        // - Propriétés
        private $_user;
        private $_passwd;
        private $_admin;
        private $_bdd;

        // - Méthodes
        function __construct($bdd){
            $this->_bdd = $bdd;
        }

        public function setIdUser($UserID){

        }

        public function AfficheForm(){
            ?>

                <form action="" method="post">

                    <h3>Se connecter / S'inscrire</h3>
                    <b class='ErrorValid'><?php echo $ErrorValid ?></b>

                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" class='submit' name="Btn1" value='Login'>
                    <input type="submit" class='submit' name="Btn2" value='Register'>
                </form>

            <?php
        }

        public function Autorisation($user,$passwd){
            echo'connexion';
        }

        public function Connexion($user,$passwd){
            
        }

        public function Inscription($user,$passwd){

                // Inscription si les champs ne sont pas vides et si le nom d'utilisateur n'est pas utilisé
                if(!empty($user) AND !empty($passwd)){

                    $exist = $this->_bdd->query("SELECT COUNT(*) FROM user WHERE user ='".$user."'");
                    $exist = $exist->fetch();

                    if ($exist["COUNT(*)"] > 0) {
                    } 
                    else {
                        $insert = $this->_bdd->query("INSERT INTO user(username, password) VALUES('".$user."','".$passwd."')");
                        
                        if($insert->rowCount()>=1){}
                        else {
                            echo "Une erreur est survenue";
                        }
                    }
                }
                
                else {}

            }

        public function SeDeconnecter(){

        }

        public function modifpassword($user,$passwd){
            
        }
        public function admin(){

        }

}
?>
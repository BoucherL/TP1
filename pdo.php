<?php
    try {
        $dbh = new PDO('mysql:host=192.168.65.17;dbname=TP1', $user, $passwd);
        foreach($dbh->query('SELECT * from FOO') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur : " . $e->getMessage() . "votre nom d'utilisateur ou votre mot de passe est incorrect.";
        die();
    }
?>
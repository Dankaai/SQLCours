<?php 

try {
        $server = "localhost";
        $user = "root";
        $password = "root" ;
        $dbname = "formation";

        $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

        
    
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    
    function getFormations(){
        global $db;
        $formations = $db->query("SELECT * FROM formation");
        return $formations;
    }
    function getEtudiants(){
        global $db;
        $etudiants = $db->query("SELECT * FROM etudiant");
        return $etudiants;
    }
   



?>
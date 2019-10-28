<?php 

   function render_all($res, $type){

if ($type == "formation") {

    echo "<table><tr><th>id</th><th>nom</th></tr>";
        while($row = $res->fetch()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td></tr>";
        }
        echo "</table>";
        
    }

       elseif  ($type == "etudiant"){}

    echo "<table><tr><th>id</th><th>nom</th><th>prenom</th><th>formation</th></tr>";
        while($row = $res->fetch()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["formation"]."</td></tr>";
        }
        echo "</table>";

    
}

?>
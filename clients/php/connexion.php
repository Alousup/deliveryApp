<?php
/// connexion base de donnée
        $conn=pg_connect("host=localhost user=postgres port=5432 dbname=deliveryDatabase password=030102");
        if(!$conn){
            die("Erreur de connection à la base, ".pg_connect_error());
        }
        else{
            echo "Connecté";
        }
    ?>
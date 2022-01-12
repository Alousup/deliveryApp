<?php
    include ('connexion.php');

    if(isset($_POST['inscription'])){
        $n=$_POST['nom'];
        $p=$_POST['prenom'];
        $nu=$_POST['numero'];
        $pswd=$_POST['password'];
        $r=$_POST['rpassword'];
        
        if(empty($n) or empty($p)  or empty ($nu) or empty ($pswd) or empty($r)){
            echo"veuillez remplir tout les champs";
        }else{
            if($pswd != $r){
                echo"Erreur, les mots de passe ne sont pas identiques";
            }else{
                //cryptage password 
                $pa = sha1($pswd);
                
                $sql="INSERT INTO clients (prenom,nom,numero,password) values ('$p', '$n', '$nu', '$pa')";
                $req=pg_query($conn, $sql);

                //recuperation de l'id du client
                $sql="SELECT * FROM clients WHERE numero='$nu'";
                $req=pg_query($conn, $sql);
                $i=pg_fetch_assoc($req);
                
                $_SESSION['idcl']=$i['idcl'];
                header("location: ../front/clienthome.php");
            }
        }
    }
?>
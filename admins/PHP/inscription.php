<?php
        include ('connexion.php');

        if(isset($_POST['inscription'])){
            $n=$_POST['nom'];
            $pr=$_POST['prenom'];
            $l=$_POST['login'];
            $p=$_POST['password'];
            $r=$_POST['repeter'];
            $t="admin";
            
            if(empty($n) or empty($pr) or empty($l)  or empty ($p) or empty ($r)){
                echo"veuillez remplir tout les champs";
            }else{
                if($p != $r){
                    echo"Erreur, les mots de passe ne sont pas identiques";
                }else{
                    //cryptage password 
                    $pa = sha1($p);
                    
                    $sql="INSERT INTO admin(prenom,nom,login,pswd,type) values ('$pr','$n', '$l', '$pa','$t')";
                    $req=pg_query($conn, $sql);
                }
            }
        }
?>
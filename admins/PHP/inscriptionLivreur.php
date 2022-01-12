<?php
        include ('connexion.php');

        if(isset($_POST['inscription'])){
            $n=$_POST['nom'];
            $pr=$_POST['prenom'];
            $l=$_POST['login'];
            $p=$_POST['password'];
            $t=$_POST['telephone'];
            $v=$_POST['vehicule'];
            
            if(empty($n) or empty($pr) or empty($l)  or empty ($p)  or empty($v) or empty($t)){
                echo"veuillez remplir tout les champs";
            }else{
                
                    //cryptage password 
                    $pa = sha1($p);
                    
                    $sql="INSERT INTO livreurs(prenom,nom,numero,login,password,vehicule) values('$pr','$n','$t','$l', '$pa','$v')";
                    $req=pg_query($conn, $sql);
            
            }
        }
?>
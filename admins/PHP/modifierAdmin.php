<?php
        include ('connexion.php');

        if(isset($_POST['modifier'])){
            $i=$_POST['id'];
            $p=$_POST['password'];
            
            if(empty ($p) or empty ($i)){
                echo"veuillez remplir tout les champs";
            }else{
                
                    //cryptage password 
                    $pa = sha1($p);
                    
                    $sql="UPDATE admin SET pswd = '$pa' WHERE ida = $i";
                    $req=pg_query($conn, $sql);
            }
        }
        if(isset($_POST['supprimer'])){
            $i=$_POST['id'];

            if(empty ($i)){
                echo"veuillez remplir tout les champs";
            }else{
                
                    
                    $sql="DELETE FROM admin WHERE ida=$i";
                    $req=pg_query($conn, $sql);
            }
        
        }
?>
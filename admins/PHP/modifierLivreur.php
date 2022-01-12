<?php
        include ('connexion.php');

        if(isset($_POST['modifier'])){
            $i=$_POST['id'];
            $n=$_POST['numero'];
            $p=$_POST['password'];
            
            if( empty ($i)){
                echo"veuillez donner l'identifiant du livreur";
            }else{
                
                    //cryptage password 
                    $pa = sha1($p);
                    
                    $sql="UPDATE livreurs SET password = '$pa', numero = '$n' WHERE idl = $i";
                    $req=pg_query($conn, $sql);
            }
        }
        if(isset($_POST['supprimer'])){
            $i=$_POST['id'];

            if(empty ($i)){
                echo"veuillez donner l'identifiant du livreur";
            }else{
                
                    
                    $sql="DELETE FROM livreurs WHERE idl=$i";
                    $req=pg_query($conn, $sql);
            }
        
        }
?>
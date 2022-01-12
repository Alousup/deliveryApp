<?php
        include ('connexion.php');

        if(isset($_POST['assigner'])){
            $i=$_POST['commande'];
            $id=$_POST['livreur'];
            $l=$_SESSION['ida'];
            
            
            if(empty($i) or empty($id)){
                echo"veuillez remplir tout les champs";
            }else{
                    
                    $sql="UPDATE commandes SET idl = '$id', ida='$l', etat='enCours' WHERE idcom='$i'";
                    $req=pg_query($conn, $sql);

                
                    if($req){
                        $sql="UPDATE livreurs SET disponibilite = 'FALSE' WHERE idl='$id'";
                        $req=pg_query($conn, $sql);
                    }else{
                        echo"Erreur d'assignation!!";
                    }
            }
        }
?>
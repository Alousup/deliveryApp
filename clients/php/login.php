<?php
    include ('connexion.php');

    if(isset($_POST['connexion'])){
        $nu=$_POST['numero'];
        $pswd=$_POST['password'];
        
        if(empty ($nu) or empty ($pswd)){
            echo"veuillez remplir tout les champs";
        }else{
          //cryptage password 
          $pa = sha1($pswd);
          
          $sql="SELECT * FROM clients WHERE numero='$nu' AND password='$pa'";
          $req=pg_query($conn, $sql);
          echo "connexion reussi";
          
          //recuperation de l'id du client
          $sql="SELECT * FROM clients WHERE numero='$nu'";
          $req=pg_query($conn, $sql);
          $i=pg_fetch_assoc($req);
          
          $_SESSION['idcl']=$i['idcl'];
          header("location: ../front/clienthome.php");
          }
        }
?>

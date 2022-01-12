<?php
include ('connexion.php');

if(isset($_POST['connexion'])){
    $l=$_POST['login'];
    $p=$_POST['password'];

    $pa = sha1($p);
    $sql="SELECT * FROM livreurs WHERE login='$l' AND password='$pa'"; 
    $req=pg_query($conn,$sql);

    if($req!=1){
        echo"<script> alert('login or password incorrect') </script>";
    }else{
        $i=pg_fetch_assoc($req);
        $_SESSION['idl']=$i['idl'];
        header("location:..//");
      
    }
}


?>
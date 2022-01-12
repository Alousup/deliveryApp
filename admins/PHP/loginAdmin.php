<?php
include ('connexion.php');

if(isset($_POST['connexion'])){
    $l=$_POST['login'];
    $p=$_POST['password'];
    $pa = sha1($p);
    $sql="SELECT * FROM admin WHERE login='$l' AND pswd='$pa'"; 
    $req=pg_query($conn,$sql);
    $t=pg_fetch_assoc($req);

    if(!$req){
        echo"<script> alert('login or password incorrect') </script>";
    }else{
        $i=pg_fetch_assoc($req);
        $_SESSION['type']=$t['type'];
        $_SESSION['ida']=$i['ida'];
        header("location:..//admin/adminHome.php");
      
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery | Inscription</title>
</head>
<body>
  <center>
    <form action="" method="post">
      <input type="text" name="nom" id="nom" placeholder="Nom">
      <input type="text" name="prenom" id="prenom" placeholder="Prenom"> <br>
      <input type="tel" name="numero" id="numero" placeholder="Numéro de téléphone"> <br>
      <input type="password" name="password" id="password" placeholder="Mot de passe"> <br>
      <input type="password" name="rpassword" id="rpassword" placeholder="Répéter le mot de passe"> <br>
      <input type="submit" name="inscription" id="inscription" value="INSCRIPTION"> <br>
      <p>Déja un compte? <a href="login.php">Se connecter</a></p>
    </form>
  </center>

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
                    header("../index.php");
                }
            }
        }
    ?>
</body>
</html>
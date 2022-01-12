<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery | Connexion</title>
</head>
<body>
  <center>
    <form action="" method="post">
      <div>
        <input type="tel" name="numero" id="numero" placeholder="Numéro de téléphone"> <br>
        <input type="password" name="password" id="password" placeholder="Mot de passe"> <br>
        <input type="submit" name="connexion" id="connexion" value="CONNEXION"> <br>
        <p>Pas de compte? <a href="inscription.php">S'inscrire</a></p>
      </div>
    </form>
  </center>

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
              header("../index.php");
              }
            }
    ?>
</body>
</html>
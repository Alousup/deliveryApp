<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body {
        background-color: #1abc9c;
        font: 1em Helvetica;
        }

        #container {
        width: 860px;
        margin: 25px auto;
        }

        .whysign {
        float: left;
        background-color: white;
        width: 500px;
        height: 455.5px;
        border-radius: 0 5px 5px 0;
        padding-top: 20px;
        padding-right: 20px;
        }

        .signup {
        float: left;
        width: 300px;
        padding: 30px 20px;
        background-color: white;
        text-align: center;
        border-radius: 5px 0 0 5px;
        }

        [type=text] {
        display: block;
        margin: 0 auto;
        width: 80%;
        border: 0;
        border-bottom: 1px solid rgba(0,0,0,.2);
        height: 45px;
        line-height: 45px;  
        margin-bottom: 10px;
        font-size: 1em;
        color: rgba(0,0,0,.4);
        }

        [type=tel] {
        display: block;
        margin: 0 auto;
        width: 80%;
        border: 0;
        border-bottom: 1px solid rgba(0,0,0,.2);
        height: 45px;
        line-height: 45px;  
        margin-bottom: 10px;
        font-size: 1em;
        color: rgba(0,0,0,.4);
        }

        [type=password] {
        display: block;
        margin: 0 auto;
        width: 80%;
        border: 0;
        border-bottom: 1px solid rgba(0,0,0,.2);
        height: 45px;
        line-height: 45px;  
        margin-bottom: 10px;
        font-size: 1em;
        color: rgba(0,0,0,.4);
        }

        [type=submit] {
        margin-top: 25px;
        width: 80%;
        border: 0;
        background-color: #53CACE;
        border-radius: 5px;
        height: 50px;
        color: white;
        font-weight: 400;
        font-size: 1em;
        }

        [type='text']:focus {
        outline: none;
        border-color: #53CACE;
        }

        h1 {
        color: rgba(0,0,0,.7);
        font-weight: 700;
        font-size: 2.5em;
        }

        strong {
        color: rgba(0,0,0,.6);
        font-size: 1.2em;
        margin: 50px 0 50px 0;
        }

        P {
        color: rgba(0,0,0,.6);
        }

        a {
        color: rgba(0,0,0,.6);
        }

        a:hover {
        color: #53CACE;
        }

        strong:nth-of-type(2) {
        font-size: 1em;
        }

    </style>

</head>
<body>
    
    <div id='container'>
        <div class='signup'>
           <form method='POST'>
             <input type='text'name="prenom" id="prenom" placeholder='Prénom:'  />
             <input type='text'name="nom" id="nom" placeholder='Nom:'  />
             <input type='tel' name="numero" id="numero" placeholder='Téléphone:'  />
             <input type='password' name="password" id="password" placeholder='Mot de passe:'  />
             <input type='password' name="rpassword" id="rpassword" placeholder='Répétez le mot de passe:'  />
             <input type='submit' name="inscription" id="inscription" value='INSCRIPTION' />
             <p>Déja un compte? <a href="connexion.php">Se connecter</a></p>
           </form>
        </div>
        <div class='whysign'>
          <h1>Bienvenue sur Delivery</h1>
          <p> <strong>QUI PEUT ÊTRE PLUS EFFICACE?! PERSONNE</strong> </p>
        </div>
      </div>
      
  <?php
    include ('../php/inscription.php');
  ?>

</body>
</html>
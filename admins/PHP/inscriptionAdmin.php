<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<div>
<nav>
    <center>
        <a href="accueil.php">ACCUEIL</a>
        <a href="filiere.php">FILIERE</a>
        <a href="inscription.php">ETUDIANT</a>
        <a href="paiement.php">PAIEMENT</a>
        <a href="etat.php">ETAT</a>
    </center>
    </nav>
</div>
<center>
        <h2>INSCRIPTION D'UN ETUDIANT</h2>
    <form action="" method="post">

            <h1>____________________________________</h1>
            
            <p>
                <label for="">Prénom</label><br>
                <input type="text" name="prenom">
            </p>
            <p>
                <label for="">Nom</label><br>
                <input type="text" name="nom" id="">
            </p>
            <p>
                <label for="">login</label><br>
                <input type="text" name="login" id="">
            </p>
            <p>
                <label for="">password</label><br>
                <input type="password" name="password">
            </p>
            <p>
                <label for="">type</label><br>
                <input type="text" name="type">
            </p>
            <p>
                <label for="">repeter</label><br>
                <input type="text" name="repeter">
            </p>
            <input type="submit" value="Enregistrer" name="inscription">
            <input type="submit" value="Annuler" name="annuler"><br>
            

</center>

            
        </form>
    <?php

        include("inscription.php");
        
    ?>  
    
</body>
</html>
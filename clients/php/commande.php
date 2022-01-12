<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery | Commandes</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <select name="depart" id="depart" required>
                <option value="depart" selected> Lieu de départ </option>
                <option value="AIBD"> AIBD </option>
                <option value="Almadies"> Almadies </option>
                <option value="Camberene"> Cambérene </option>
                <option value="Colobane"> Colobane </option>
                <option value="Plateau"> Dakar Plateau </option>
                <option value="Diamniadio"> Diamniadio </option>
                <option value="Grand yoff"> Grand yoff </option>
                <option value="Guediawaye"> Guédiawaye </option>
                <option value="Keur Massar"> Keur Massar </option>
                <option value="Lac Rose"> Lac Rose </option>
                <option value="Mariste"> Mariste </option>
                <option value="Malika"> Malika </option>
                <option value="Mbour"> Mbour </option>
                <option value="Medina"> Médina </option>
                <option value="Ndangane"> Ndangane </option>
                <option value="Pikine"> Pikine </option>
                <option value="Point E"> Point E </option>
                <option value="Rufisque"> Rufisque </option>
                <option value="Sali"> Sali </option>
                <option value="Sandiara"> Sandiara </option>
                <option value="Somone"> Somone </option>
                <option value="Thiaroye"> Thiaroye </option>
                <option value="Thies"> Thiès </option>
                <option value="Yarakh"> Yarakh </option>
                <option value="Yoff"> Yoff </option>
            </select>

            <select name="arrivee" id="arrivee" required>
                <option value="#" selected> Lieu d'arrivée </option>
                <option value="AIBD"> AIBD </option>
                <option value="Almadies"> Almadies </option>
                <option value="Camberene"> Cambérene </option>
                <option value="Colobane"> Colobane </option>
                <option value="Plateau"> Dakar Plateau </option>
                <option value="Diamniadio"> Diamniadio </option>
                <option value="Grand yoff"> Grand yoff </option>
                <option value="Guediawaye"> Guédiawaye </option>
                <option value="Keur Massar"> Keur Massar </option>
                <option value="Lac Rose"> Lac Rose </option>
                <option value="Mariste"> Mariste </option>
                <option value="Malika"> Malika </option>
                <option value="Mbour"> Mbour </option>
                <option value="Medina"> Médina </option>
                <option value="Ndangane"> Ndangane </option>
                <option value="Pikine"> Pikine </option>
                <option value="Point E"> Point E </option>
                <option value="Rufisque"> Rufisque </option>
                <option value="Sali"> Sali </option>
                <option value="Sandiara"> Sandiara </option>
                <option value="Somone"> Somone </option>
                <option value="Thiaroye"> Thiaroye </option>
                <option value="Thies"> Thiès </option>
                <option value="Yarakh"> Yarakh </option>
                <option value="Yoff"> Yoff </option>
            </select>

            <br>

            <input type="tel" name="numdep" id="numdep" placeholder="Contact pour le départ">
            <input type="tel" name="numar" id="numar" placeholder="Contact pour l'arrivée">

            <br>

            <select name="vehicules" id="vehicules" required>
                <option value="#" selected>Véhicules requis</option>
                <option value="moto">Moto</option>
                <option value="camionette">Camionette</option>
                <option value="camion">Camion</option>
            </select>

            <br>

            <input type="submit" name="payer" value="Passer au paiement">
        </form>

        <?php
            include ('connexion.php');

            $i=$_SESSION['idcl'];
            
            if (isset($_POST['payer'])) {
                $d = $_POST['depart'];
                $a = $_POST['arrivee'];
                $nd = $_POST['numdep'];
                $na = $_POST['numar'];
                $v = $_POST['vehicules'];

                if(empty($d) or empty($a)  or empty ($nd) or empty ($na) or empty($v)){
                    echo"veuillez remplir tout les champs";
                }else{
                    $sql="INSERT INTO commandes (etat,depart,arrivee,numdep,numar,vehicules,idcl) 
                    values ('enAttente', '$d', '$a', '$nd', '$na', '$v', '$i')";
                    $req=pg_query($conn, $sql);
                }
            }

            include ('tarif.php'); 
        ?>
    </center>
</body>
</html>
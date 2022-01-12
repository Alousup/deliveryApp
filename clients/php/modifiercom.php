<?php
    include("connexion.php");
    
    $i=$_SESSION['idcl'];
    
    $sql1="SELECT idcom, depart, arrivee, numdep, numar, vehicules WHERE idcl='$i' AND etat='enAttente'";
    $req1=pg_query($conn, $sql1);
    $x=pg_fetch_assoc($req1);
    $id=$x['idcom'];

    if (isset($_POST['modifier'])) {
        $d = $_POST['depart'];
        $a = $_POST['arrivee'];
        $nd = $_POST['numdep'];
        $na = $_POST['numar'];
        $v = $_POST['vehicules'];

        $sql="UPDATE commandes SET depart='$d', arrivee='$a', numdep='$nd', numar='$na', vehicules='$v' WHERE idcom=$id";
        $req=pg_query($conn,$sql);
    }

    include ('tarif.php');
?>
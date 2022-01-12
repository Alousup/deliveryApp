<?php
    include("connexion.php");
    
    $i=$_SESSION['idcl'];
    $sql1="SELECT idcom, depart, arrivee, numdep, numar, vehicules WHERE idcl='$i' AND etat='enAttente'";
    $req1=pg_query($conn, $sql1);
    $x=pg_fetch_assoc($req1);
    $id=$x['idcom'];

    if (isset($_POST['annuler'])) {
        $sql="DELETE FROM commandes WHERE idcl='$id'";
        $req=pg_query($conn,$sql);
    }
?>
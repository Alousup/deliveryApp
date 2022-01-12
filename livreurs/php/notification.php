<?php
    $idl=$_SESSION['idl'];
    $sql="SELECT * FROM commandes WHERE idl='$idl' AND etat='encours'";
    $req=pg_query($conn, $sql);
    $res=pg_fetch_assoc($req);
    $idc=$res['idcom'];

    //livraison effectuer
    if (isset($_POST['livrer'])) {
        $sql1="UPDATE commandes SET etat='livree' WHERE idcom='$idc'";
        $req1=pg_query($conn, $sql1);
        $sql2="UPDATE livreurs SET disponibilite='true'";
    }
?>
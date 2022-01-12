<?php
    //Tarification enfonction de la zone
    $sql1="SELECT * FROM zone WHERE lieux like %$d%";
    $req1=pg_query($conn, $sql1);
    $r=pg_fetch_assoc($req1);
    $z=$r['idz'];

    $sql2="SELECT * FROM zone WHERE lieux like %$a%";
    $req2=pg_query($conn, $sql2);
    $r1=pg_fetch_assoc($req2);
    $z1=$r['idz'];


    if ($z==1 and $z1==1) {
        $tarif=2000;
    }elseif ($z==2 and $z1==2) {
        $tarif=3500;
    }elseif ($z==3 and $z1==3) {
        $tarif=6000;
    }elseif (($z==1 and $z1==2) or ($z==2 and $z1==1)) {
        $tarif=3500;
    }elseif (($z==1 and $z1==3) or ($z==3 and $z1==1)) {
        $tarif=10000;
    }elseif(($z==2 and $z1==3) or ($z==3 and $z1==2)){
        $tarif=8000;
    }

    //Tarification en fonction des vehicules
    $sql3="SELECT vehicules FROM commandes";
    $req3=pg_query($conn, $req2);
    $am=pg_fetch_assoc($req3);
    $ve=$am['vehicules'];

    if ($ve="camionette") {
        $tarif =+ 10000;
    }elseif($ve="camion"){
        $tarif =+ 50000;
    }else {
        $tarif;
    }
?>
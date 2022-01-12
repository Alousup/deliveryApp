
<?php
        include("connexion.php");
        $i=$_SESSION['ida'];
        $sql="SELECT * FROM commandes WHERE ida='$i'";

        $req=pg_query($conn,$sql);
        
        if(pg_num_rows($req)==0){
            echo"0 résultat";
        }else{
            echo"<table border=1 cellpadding=5>";
            echo"<tr><th>IdA</th><th>Prenom</th><th>Nom</th></tr>";
            while($d=pg_fetch_assoc($req)){
                echo"<tr>";
                $id=$d['idcl'];
                $sql1="SELECT * FROM clients WHERE idcl='$id'";
                $req1=pg_query($conn,$sql1);
                $e=pg_fetch_assoc($req1);
                echo"<td>".$d['idcom']."</td>";
                echo"<td>".$e['nom']."</td>";
                echo"<td>".$e['prenom']."</td>";
                echo"<td>".$d['ida']."</td>";
                $l=$d['idl'];
                $sql1="SELECT * FROM livreurs WHERE idl='$l'";
                $req1=pg_query($conn,$sql1);
                $e=pg_fetch_assoc($req1);
                echo"<td>".$e['prenom']."</td>";
                echo"<td>".$e['nom']."</td>";
                echo"<td>".$d['paiement']."</td>";
                echo"<td>".$d['etat']."</td>";
                echo"</tr>";
                
            }
            echo"</table>";
        }
    ?>
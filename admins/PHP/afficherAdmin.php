
<?php
        include("connexion.php");

        $sql="SELECT * FROM admin ORDERBY";

        $req=pg_query($conn,$sql);
        
        if(pg_num_rows($req)==0){
            echo"0 résultat";
        }else{
            while($d=pg_fetch_assoc($req)){

                echo'<tbody>';
				echo'<tr>';
				echo'<td>';
				echo'<span class="custom-checkbox">';
				echo'<input type="checkbox" id="checkbox1" name="options[]" value="1">';
				echo'<label for="checkbox1"></label>';
				echo'</span>';
				echo'</td>';

                //echo"<td>".$d['idl']."</td>";
                echo"<td>".$d['ida']."</td>";
                echo"<td>".$d['nom']."</td>";
                echo"<td>".$d['prenom']."</td>";
                echo"<td>".$d['login']."</td>";
                
                echo'<td>';
				echo'<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
				echo'<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
				echo'</td>';

                echo'</tr>';
				echo'</tbody>';
            }
        }
    ?>
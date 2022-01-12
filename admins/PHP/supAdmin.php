<?php
    $t=$_SESSION['type'];
    $i=$_SESSION['ida'];

    if($t=='superadmin'){
        echo'<button class="btn mt-3"><a href="superAdminAdmin.php" style="color: white;">Gestion Admin</a></button>';
        //echo $t;
        echo $i;
    }
?>
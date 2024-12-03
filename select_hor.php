<?php
    include ('conex.php');
    
    $query = "SELECT `sala`, `turno`, `maestra` FROM `hor` WHERE 1";
    $res = mysqli_query($conexion,$query);

?>
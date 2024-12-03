<?php
    include ('conex.php');
    
    $query = "SELECT `id_sala`,`nom_maes`, `edades`, `color_sala` FROM `salasy_maestras` WHERE 1";
    $res = mysqli_query($conexion,$query);

?>
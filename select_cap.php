<?php
    include ('conex.php');
    
    $query = "SELECT `id`,`titulo`, `fecha`, `descripcion`, `contenido` FROM `capacitacion_admin` WHERE 1";
    $res = mysqli_query($conexion,$query);

?>
<?php
    include ('conex.php');
    
    $query = "SELECT `ID`,`titulo`, `fecha`, `contenido`, `imagen` FROM `noticias` WHERE 1";
    $res = mysqli_query($conexion,$query);

?>
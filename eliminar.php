<?php

include('conex.php');

  $id_u = $_GET['q'];

  var_dump($_GET);

  $eliminar = mysqli_query($conexion,"DELETE FROM registro WHERE autor_id = $id_u");
  
  if ($eliminar) {
    echo '<script>alert("se elimino correctamente el usuario");</script>';
    header("Location: index.php?s=1");
}else {
    echo '<script>alert("no se elimino correctamente");</script>';
    echo '<script>window.history.go(-1);</script>';
}
?>
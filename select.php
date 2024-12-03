<?php
    include ('conex.php');
$select = mysqli_query($conexion, "SELECT * FROM `registro`");

  $resul = mysqli_fetch_all($select, MYSQLI_ASSOC );
  echo json_encode($resul);
  //print_r($resul);
  
?>

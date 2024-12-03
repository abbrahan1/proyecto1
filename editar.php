<?php

  include('conex.php');

  $id = $_POST['id'];
  $nomb = $_POST['nombre'];
  $email = $_POST['email']; 
  $contra = $_POST['contra']; 
  

 $editar = mysqli_query($conexion,"UPDATE registro SET nom = '$nomb', email = '$email', contrasea= '$contra' WHERE id_usuario = $id" );
  
 if ($editar) {
    echo '<script>alert("se edito correctamente");</script>';
    header("Location: index.php?s=1");
}else {
    echo '<script>alert("no se edito correctamente");</script>';
    echo '<script>window.history.go(-1);</script>';
}



?>
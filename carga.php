<?php 
include("conex.php");

$nom = $_POST["name"];
$correo = $_POST["correo"];
$pass = $_POST["password"];
    $insertar = mysqli_query($conexion, "INSERT INTO `registro`(`nom`,`email`,`contrasena`) VALUES ('$nom','$correo','$pass')");
    
    if ($insertar) {
        echo '<script>alert("se cargó correctamente");window.location.href = "autenticacion.html";</script>';
        echo '<script>window.history.go(-1);</script>';
    }else {
        echo '<script>alert("no Se cargó correctamente");</script>';
        echo '<script>window.history.go(-1);</script>';
    }
?>
<?php 
include("conex.php");

$usuario = $_POST["admin"];
$password = $_POST["pass"];

$result = mysqli_query($conexion, "SELECT * FROM registro WHERE email = '$usuario'");
if ($row = mysqli_fetch_array($result)){
if($row["contrasena"] == $password){
    session_start();
    $_SESSION['email'] = $usuario;
    header("Location: index.php"); 
}
    else  {
        echo '<script>alert("contraseña incorrecta");</script>';
        echo '<script>window.history.go(-1);</script>';
    }}else {
        echo '<script>alert("correo no registrado");</script>';
        echo '<script>window.history.go(-1);</script>';
    }
    
mysqli_free_result($result);
mysqli_close($conexion);
?>
<?php
include('conex.php');

$id = $_GET['id'];

$sql = "DELETE FROM notis WHERE id = $id";

if ($conexion->query($sql) === TRUE) {
    header("Location: novedades.php");
    exit();
} else {
    echo "Error al eliminar usuario: " . $conexion->error;
}

$conexion->close();
?>
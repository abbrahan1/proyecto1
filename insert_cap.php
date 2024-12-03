<?php
include("conex.php");

$idc =  $_POST['id'];
$titl =  $_POST['titu'];
$fech =  $_POST['fech'];
$conte = $_POST['descrip'];
$imgj = file_get_contents($_FILES['imag']['tmp_name']);

$sql = "UPDATE capacitacion_admin SET titulo = ?, fecha = ?, descripcion = ?, contenido = ? WHERE id = ?";

$stmt = $conexion->prepare($sql);
if ($stmt) {

    $stmt->bind_param("ssssi", $titl, $fech, $conte, $imgj, $idc);

    if ($stmt->execute()) {
        echo '<script>alert("Se cargó correctamente");</script>';
        echo '<script>window.history.go(-2);</script>';
    } else {
        echo '<script>alert("No se cargó correctamente: ' . $stmt->error . '");</script>';
        echo '<script>window.history.go(-1);</script>';
    }

    $stmt->close();
} else {
    echo '<script>alert("No se pudo preparar la declaración: ' . $conexion->error . '");</script>';
    echo '<script>window.history.go(-1);</script>';
}

$conexion->close();
?>
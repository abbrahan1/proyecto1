<?php
include("conex.php");

$sala =  $_POST['sala'];
$turno =  $_POST['turno'];
$maestra =  $_POST['maestra'];

$sql = "INSERT INTO hor (sala, turno, maestra) VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sss", $sala, $turno, $maestra);

    if ($stmt->execute()) {
        echo '<script>alert("Se insertó correctamente");</script>';
        echo '<script>window.history.go(-2);</script>';
    } else {
        echo '<script>alert("No se insertó correctamente: ' . $stmt->error . '");</script>';
        echo '<script>window.history.go(-1);</script>';
    }

    $stmt->close();
} else {
    echo '<script>alert("No se pudo preparar la declaración: ' . $conexion->error . '");</script>';
    echo '<script>window.history.go(-1);</script>';
}
$conexion->close();
?>
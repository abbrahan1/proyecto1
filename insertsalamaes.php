<?php
include("conex.php");

$id_s = $_POST["idd"];
$nomm = $_POST["nommaes"];
$edd = $_POST["edadsala"];
$color = $_POST["colorsala"];

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "INSERT INTO hor (sala, turno, maestra) VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sql);
if ($stmt) {

    $stmt->bind_param("sssi", $nomm, $edd, $color, $id_s);

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
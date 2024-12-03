<?php
include("conex.php");

$idd = $_POST["id"];
$tit = $_POST["titulo"];
$fec = $_POST["fecha"];
$cont = $_POST["contenido"];
$img = file_get_contents($_FILES["imagen"]["tmp_name"]);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "UPDATE noticias SET titulo = ?, fecha = ?, contenido = ?, imagen = ? WHERE ID = ?";

$stmt = $conexion->prepare($sql);
if ($stmt) {

    $stmt->bind_param("ssssi", $tit, $fec, $cont, $img, $idd);

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
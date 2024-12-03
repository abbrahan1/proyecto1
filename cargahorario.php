<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cargar horarios </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #F9E79F;
      color: #ff5722;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="form-container" style="width: 100%; max-width: 600px; background: white; border-radius: 20px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
      <a class="nav-link" href="index.php">inicio</a>
      <h2 class="form-title text-center mb-4">Cargar horarios</h2>
      <form action="insert_hor.php" method="post" enctype="multipart/form-data">
        <div>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">sala:</label>
          <input type="text" name="sala" id="titulo" placeholder="Ingrese la sala" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">turno:</label>
          <input type="text" name="turno" id="titulo" placeholder="Ingrese el turno" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">maestra:</label>
          <input type="text" name="maestra" id="titulo" placeholder="Ingrese el nombre de la maestra " class="form-control" required>
        </div><br>
        <button type="submit" class="btn" style="background-color: #ff5722; color: white;">Publicar horario</button>
      </form>
    </div>
  </div>
  <?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'usuario_db', 'password_db', 'nombre_db');

// Verificar si la conexión es exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nom_maes = $_POST['nom_maes'];
    $edades = $_POST['edades'];
    $color_sala = $_POST['color_sala'];

    // Insertar los datos en la tabla sala_maestra
    $query = "INSERT INTO sala_maestra (nom_maes, edades, color_sala) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('sss', $nom_maes, $edades, $color_sala);

    if ($stmt->execute()) {
        echo "Sala agregada exitosamente.";
    } else {
        echo "Error al agregar la sala: " . $conexion->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}
?>
</body>

</html>
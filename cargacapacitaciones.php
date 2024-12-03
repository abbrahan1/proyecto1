<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cargar Capacitación</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #F9E79F;
      color: #ff5722;
    }
    .btn {
      border: none; /* Removed border from buttons */
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; padding: 20px;">
    <div class="form-container" style="padding: 20px; margin: 20px;">
      <a class="btn" href="index.php" style="background-color: #ff5722; color: white;">Inicio</a>
      <h2 class="form-title text-center mb-4">Cargar Capacitación</h2>
      <form action="insert_cap.php" method="post" enctype="multipart/form-data">
        <div>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        </div>
        <div class="mb-3">
          <label for="titu" class="form-label">Título de la Capacitación:</label>
          <input type="text" name="titu" placeholder="Ingrese el título" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="fech" class="form-label">Fecha de la Capacitación:</label>
          <input type="date" name="fech" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="descrip" class="form-label">Descripción de la Capacitación:</label>
          <textarea name="descrip" cols="30" rows="5" placeholder="Describa la capacitación" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
          <label for="imag" class="form-label">Contenido de la Capacitación (imagen opcional):</label>
          <input type="file" name="imag" accept="image/*" class="form-control">
        </div>
        <button type="submit" class="btn" style="background-color: #ff5722; color: white;">Publicar Capacitación</button>
      </form>
    </div>
  </div>
</body>
</html>

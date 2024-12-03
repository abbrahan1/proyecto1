<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cargar Sala y Maestra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #F9E79F;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      width: 100%;
      max-width: 600px;
      background: white;
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
      background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082);
      -webkit-background-clip: text;
      color: transparent;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
    }

    .form-control {
      border-radius: 10px;
      border: 2px solid #FFD700;
      padding: 10px;
      margin-bottom: 15px;
    }

    .form-control::placeholder {
      color: #FFD700;
    }

    .btn-custom {
      background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082);
      -webkit-background-clip: text;
      color: transparent;
      font-size: 18px;
      font-weight: bold;
      border: 2px solid #FFD700;
      padding: 10px 20px;
      border-radius: 10px;
      width: 100%;
      display: block;
      text-align: center;
      transition: background 0.3s, color 0.3s;
    }

    .btn-custom:hover {
      background-color: #FFD700;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="form-container">
      <h2 class="form-title">Cargar Sala y Maestra</h2>
      <form action="insertsalamaes.php" method="post">
        <div class="mb-3">
          <input type="hidden" name="idd" value="<?php echo $row['id_sala']; ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label for="nommaes" class="form-label">Nombre de la Maestra:</label>
          <input type="text" name="nommaes" placeholder="Ingrese el nombre de la maestra" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="edadsala" class="form-label">Edades de la sala:</label>
          <input type="number" name="edadsala" placeholder="Ingrese la edad de la maestra" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="colorsala" class="form-label">Color de la Sala:</label>
          <input type="text" name="colorsala" placeholder="Ingrese el nombre de la sala" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-custom">Publicar Sala y Maestra</button>
      </form>
    </div>
  </div>
</body>
</html>

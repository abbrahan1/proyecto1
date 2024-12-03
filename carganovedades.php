<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Novedad Institucional</title>
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
        }

        .form-control {
            border-radius: 20px;
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
            font-size: 24px;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .img-container {
            text-align: center;
        }

        .img-container img {
            width: 200px;
            height: 200px;
            border-radius: 20px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
                <li class="nav-item">
                  <a class="nav-link" href="index.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">inicio</a>
                </li>
        <h2 class="form-title">Cargar Novedad Institucional</h2>
        <form action="insertnotis.php" method="post" enctype="multipart/form-data">
            <div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
            </div>
            <div>
                <input type="text" name="titulo" placeholder="Título de la Noticia" class="form-control" required>
            </div>
            <div>
                <input type="date" name="fecha" placeholder="fecha" class="form-control" required>
            </div>
            
            <div>
                <textarea name="contenido" cols="30" rows="10" placeholder="Contenido de la Noticia" class="form-control" required></textarea>
            </div>
            <div class="img-container">
                <input type="file" name="imagen" accept="image/*" class="form-control">
            </div>
            
            <button type="submit" class="btn-custom">Publicar Noticia</button>
        </form>
    </div>
</body>
</html>
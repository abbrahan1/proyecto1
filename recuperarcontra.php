<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body {
            background-color:#F9E79F;
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
        }
        .form-control::placeholder {
            color: #FFD700;
        }
        h2{
            background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082);
            -webkit-background-clip: text;
            color: transparent;
            font-size: 24px;
            font-weight: bold;
        }

        p{
            background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
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
        }
        .img-container {
            text-align: center;
        }
        .img-container img {
            width: 200px;
            height: 200px;
            border-radius: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="form-container">
        <form action="recuperar.php" method="post">
            <div class="mb-3">
                <h2>Recuperar contraseña</h2><br>

                <p>Completá la dirección de correo electrónico para que te podamos enviar un link para restablecer tu contraseña:</p>

                <label for="correo" class="form-label form-title">Ingresar Correo Electrónico:</label>
               
                <input type="email" class="form-control" id="correo" name="emaill" placeholder="ejemplo@gmail.com" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-custom" name="enviar">Recuperar</button>
            </div>
        </form>
    </div>
</body>
</html>
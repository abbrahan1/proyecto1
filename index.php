<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav-link {
            font-family: Comic Sans MS, sans-serif;
            font-size: 20px;
            &:hover {
                background-color: #F9E79F;
                color: #4B0082;
                text-shadow: 1px 1px 1px #ff0000;
            }
        }

        .carousel-inner img {
            border-radius: 20px;
            width: 100%;
            height: 400px; /* Altura fija para todas las imágenes */
            object-fit: cover; /* Asegura que la imagen se ajuste al tamaño sin distorsión */
        }

        .carousel-caption {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 15px;
            color: #333;
        }

        .carousel-indicators button {
            background-color: #FFCC00;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #FFCC00;
            border-radius: 50%;
            padding: 10px;
        }

        .fondo-jardin {
            background-color: #FFEC99;
        }

        .titulo-jardin {
            color: #FF6666;
            font-family: 'Comic Sans MS', sans-serif;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body class="row p-0 m-0">
<nav class="navbar navbar-expand-lg" style="background-color: #F9E79F;">
    <div class="container-fluid">
        <img src="img/jardin.jpg" style="width: 80px; height: 80px; border-radius:15px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"> 
                    <a class="nav-link" href="horario.php" style="background-color: white; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">horario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendario.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">calendario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="capacitaciones.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">capacitaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proyectos.php" style="background-color: #000; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">proyectos</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="salasmaestras.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">salas y sus maestras</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="novedades.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">novedades</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">
                        Menu
                    </a>
                    <ul class="dropdown-menu" style="border: none; background-color: #F9E79F;">
                        <li><a class="dropdown-item" href="cambiarcontrasena.html" style="color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">Cambiar contraseña</a></li>
                        <li><a class="dropdown-item" href="cerrarsesion.html" style="color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">Cerrar sesion</a></li>
                    </ul> 
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div id="carruselJardinInfantes" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carruselJardinInfantes" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselJardinInfantes" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselJardinInfantes" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/es.jpg" class="d-block w-100" alt="Juguetes">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="titulo-jardin">¡Hora de Jugar!</h5>
                    <p>Los mejores juguetes para aprender y divertirse.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/la.jpg" class="d-block w-100" alt="Dibujos">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="titulo-jardin">¡A Correr!</h5>
                    <p>Diversión con autos y carreteras .</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/sa.jpg" class="d-block w-100" alt="Juegos">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="titulo-jardin">¡A Jugar Juntos!</h5>
                    <p>Juegos que fomentan la cooperación y el trabajo en equipo.</p>
                </div>
            </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselJardinInfantes" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselJardinInfantes" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<div class="row">
    <footer class="d-flex justify-content-between align-items-center p-4 mb-0 fixed-bottom" style="background-color: #F9E79F; width: 100%; height: 100px;">
        <p class="text-black" style="font-size: 12px; line-height: 1.5; margin: 0; padding-left: 15px;">
            . Ubicación: Buenos Aires <br>
            . Localidad: San Clemente Del Tuyu (La Costa)<br>
            . Dirección: 8 Entre 13 y 14 2462<br>
            . Teléfono: 02252 52-0417<br>
            . Email: jardindeinfantes901@telpin.com.ar
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.9177900200416!2d-56.72345708464099!3d-36.362770141860125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959c1b5c8ff29ba1%3A0xe120a6ff3c2a76e8!2sJard%C3%ADn%20De%20Infantes%20N%C2%BA901%20%22Constancio%20C%20Vigil%22!5e0!3m2!1ses!2sar!4v1725389874263!5m2!1ses!2sar" width="150" height="100" style="border:0; padding-right: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
</div>

</html>

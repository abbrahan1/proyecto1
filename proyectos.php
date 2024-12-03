<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayExpress</title>
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
                    <a class="nav-link" href="actividades.php" style="background-color: #000; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="salasmaestras.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">salas y sus maestras</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="novedades.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">novedades</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">inicio</a>
                </li>
</ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
  <!-- Section: Introduction -->
  <div class="row mb-5">
    <div class="col text-center">
      <h1 class="display-8" style="font-family: 'Comic Sans MS', sans-serif; color: black;">Proyectos a Realizar por Sala</h1>
      <p class="lead" style="font-family: 'Comic Sans MS', sans-serif; color: black;">Descubre los proyectos educativos planificados para cada sala, con objetivos claros y propuestas que se integran en nuestro plan de estudios.</p>
    </div>
  </div>
  <!-- Section: Projects per Room -->
  <div class="row">
    <!-- Project 1: Sala 1 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="background-color: #ff1010;">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Sala Roja: Proyecto Exploración de la Naturaleza</h5>
          <p class="card-text" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Objetivos: Fomentar la curiosidad por el medio ambiente y aprender sobre los ecosistemas locales a través de salidas y experimentos.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Propuestas:</strong> Caminatas educativas, plantación de árboles y observación de insectos.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Integración:</strong> Este proyecto refuerza el plan de estudios de ciencias naturales.</p>
        </div>
      </div>
    </div>

    <!-- Project 2: Sala 2 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="background-color: #3cc856;">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Sala Verde: Proyecto Arte y Creatividad</h5>
          <p class="card-text" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Objetivos: Estimular la expresión artística y la creatividad a través del uso de diversos materiales y técnicas.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Propuestas:</strong> Pintura, escultura con materiales reciclados y creación de murales.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Integración:</strong> Este proyecto complementa las materias de arte y educación plástica.</p>
        </div>
      </div>
    </div>

    <!-- Project 3: Sala 3 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="background-color: #0cdfb8;">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Sala Turquesa: Proyecto Deportes y Vida Saludable</h5>
          <p class="card-text" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Objetivos: Promover hábitos saludables y el trabajo en equipo a través de actividades físicas.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Propuestas:</strong> Torneos deportivos, sesiones de yoga y talleres sobre alimentación saludable.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Integración:</strong> Refuerza los contenidos de educación física y salud.</p>
        </div>
      </div>
    </div>

    <!-- Project 4: Sala 4 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="background-color: #bd22e3;">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Sala Violeta: Proyecto Ciencia y Tecnología</h5>
          <p class="card-text" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Objetivos: Desarrollar el pensamiento crítico y tecnológico a través de experimentos y el uso de nuevas tecnologías.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Propuestas:</strong> Construcción de robots, programación básica y experimentos de química.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Integración:</strong> Se relaciona con los contenidos de ciencia y tecnología.</p>
        </div>
      </div>
    </div>

    <!-- Project 5: Sala 5 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="background-color: #fffb00;">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Sala Amarilla: Proyecto Educación Social</h5>
          <p class="card-text" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Objetivos: Fomentar el respeto, la empatía y la resolución de conflictos a través de juegos de rol y debates.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Propuestas:</strong> Simulaciones sociales, debates y actividades colaborativas.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Integración:</strong> Refuerza los contenidos de educación cívica y ética.</p>
        </div>
      </div>
    </div>

    <!-- Project 6: Sala 6 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="background-color: #ff5722;">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Sala Naranja: Proyecto Historia y Cultura</h5>
          <p class="card-text" style="font-family: 'Comic Sans MS', sans-serif; color: white;">Objetivos: Aprender sobre la historia local y global a través de investigaciones y proyectos colaborativos.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Propuestas:</strong> Exposiciones, visitas a museos y recreaciones históricas.</p>
          <p style="font-family: 'Comic Sans MS', sans-serif; color: white;"><strong>Integración:</strong> Apoya el aprendizaje de historia y estudios sociales.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <footer class="d-flex justify-content-between align-items-center p-4 mb-0 " style="background-color: #F9E79F; width: 100%; height: 100px;">
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

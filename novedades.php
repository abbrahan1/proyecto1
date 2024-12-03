<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Facebook Like Reaction System" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Css for reaction system -->
        <link rel="stylesheet" type="text/css" href="css/reaction.css" />

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- jQuery for Reaction system -->
        <script type="text/javascript" src="js/reaction.js"></script>
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
        
    .dropdown-item {
        background-color: #F9E79F;
        border: 1px solid #4B0082;
        border-radius: 5px;
        margin: 5px 0;
    }

    .text-gradient {
        background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082);
        -webkit-background-clip: text;
        color: transparent;
    }

    .dropdown-item:hover {
        background-color: #FFD700;
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
                    <a class="nav-link" href="proyectos.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">proyectos</a>
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
      <h1 class="display-8" style="font-family: 'Comic Sans MS', sans-serif;">Novedades Institucionales</h1>
      <p class="lead" style="font-family: 'Comic Sans MS', sans-serif;">Mantente al día con nuestras noticias, anuncios, eventos y reconocimientos importantes. Este espacio se actualiza regularmente para toda la comunidad educativa.</p>
    </div>
  </div>

  <!-- Section: News and Updates -->
  <div class="row">
    <!-- News 1 -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Evento Anual: Festival de Primavera</h5>
          <p class="card-text">Nuestro Festival de Primavera será el 21 de septiembre. Los niños presentarán proyectos creativos, y contaremos con la participación de toda la comunidad escolar.</p>
          <p><strong>Fecha:</strong> 21 de septiembre, 10:00 AM</p>
        </div>
      </div>
    </div>

    <!-- News 2 -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Reconocimiento a los Estudiantes Sobresalientes</h5>
          <p class="card-text">Felicitamos a los estudiantes que destacaron en el último semestre por su compromiso y dedicación en las áreas de ciencias y arte.</p>
          <p><strong>Fecha:</strong> Publicación de resultados el 15 de octubre</p>
        </div>
      </div>
    </div>

    <!-- News 3 -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Anuncio: Nuevas Instalaciones Deportivas</h5>
          <p class="card-text">Nos complace anunciar la inauguración de nuestro nuevo complejo deportivo que incluirá canchas de fútbol, básquet y un gimnasio.</p>
          <p><strong>Inauguración:</strong> 1 de noviembre, 9:00 AM</p>
        </div>
      </div>
    </div>

    <!-- News 4 -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Reconocimiento al Personal Docente</h5>
          <p class="card-text">Agradecemos a todo nuestro personal docente por su dedicación y compromiso. Este mes destacamos a la profesora Ana Pérez por su innovador proyecto educativo.</p>
          <p><strong>Fecha:</strong> Octubre 2024</p>
        </div>
      </div>
    </div>

    <!-- News 5 -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Jornada de Puertas Abiertas</h5>
          <p class="card-text">Invitamos a los padres y tutores a conocer más sobre nuestras metodologías y planes educativos en nuestra Jornada de Puertas Abiertas.</p>
          <p><strong>Fecha:</strong> 10 de noviembre, 8:00 AM</p>
        </div>
      </div>
    </div>

    <!-- News 6 -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Campaña de Donación de Libros</h5>
          <p class="card-text">Estamos organizando una campaña de donación de libros para la creación de una biblioteca comunitaria. ¡Colabora con tus libros usados!</p>
          <p><strong>Fecha:</strong> Del 1 al 30 de noviembre</p>
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

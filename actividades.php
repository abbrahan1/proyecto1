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
                    <a class="nav-link" href="proyectos.php" style="background-color: #000; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">proyectos</a>
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
<div class="container">
  <!-- 1 -->
  <div class="row" style="background-color: #ff0066;">
    <div class="col-sm-12 col-md-4 p-2">
    <div class="card">
        <img src="img/deportes1.png" class="card-img-top " alt="Evento especial">
        <div class="card-body">
        <h5 class="card-title">Actividades Deportivas</h5>
          <p class="card-text">Involúcrate en nuestras actividades deportivas que incluyen fútbol, baloncesto, natación y más.</p>
     
      </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-8 p-5">
    <p style="font-family: 'Comic Sans MS', sans-serif; color: white; font-size: 1.5em;">El deporte en los niños es fundamental para su desarrollo integral, ya que no solo contribuye a su salud física, sino también a su bienestar emocional y social. Al practicar deportes, los niños mejoran su coordinación, fuerza y resistencia, lo que favorece un crecimiento saludable. Además, los hábitos de actividad física que se adquieren desde temprana edad ayudan a prevenir enfermedades y fomentan un estilo de vida activo en el futuro.

A nivel emocional, el deporte enseña valores fundamentales como la disciplina, la constancia y el respeto por las reglas. Los niños aprenden a gestionar sus emociones, a manejar la frustración y a desarrollar una autoestima sólida al ver sus propios progresos. </p>
   </div>
  </div>
  <!-- 2 -->
  <div class="row" style="background-color: #ffc100;">
    <div class="col-sm-12 col-md-8 p-5">
    <p style="font-family: 'Comic Sans MS', sans-serif; color: white;  font-size: 1.5em;">La música es una herramienta poderosa para el desarrollo de los niños, ya que estimula su creatividad, inteligencia emocional y habilidades cognitivas. Al aprender música o participar en actividades musicales, los niños mejoran su capacidad de concentración, memoria y coordinación, lo que contribuye a su rendimiento académico y desarrollo mental.

Desde una edad temprana, la música ayuda a los niños a expresarse y a comprender mejor sus emociones. Les permite canalizar sentimientos de una manera creativa y positiva, ayudando a desarrollar una autoestima saludable y una mayor autoconfianza. Además, cantar, tocar un instrumento o simplemente moverse al ritmo de la música refuerza habilidades motoras finas y gruesas, promoviendo un desarrollo físico equilibrado.</p>
   </div>
    <div class="col-sm-12 col-md-4 p-2">
    <div class="card">
        <img src="img/especial.png" class="card-img-top" alt="Evento especial">
        <div class="card-body">
          <h5 class="card-title">Evento Especial</h5>
          <p class="card-text">Participa en nuestros emocionantes eventos especiales que incluyen talleres, presentaciones y actividades interactivas.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- 3 -->
  <div class="row" style="background-color: #3be1c8;">
    <div class="col-sm-12 col-md-4 p-2">
    <div class="card">
        <img src="img/celebracion.png" class="card-img-top" alt="Evento especial">
        <div class="card-body">
        <h5 class="card-title">Celebraciones</h5>
          <p class="card-text">Disfruta de nuestras celebraciones anuales, incluyendo festivales, días especiales y actividades culturales.</p>       
       </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-8 p-5">
      <p style="font-family: 'Comic Sans MS', sans-serif; color: white; font-size: 1.5em;">Las actividades culturales son esenciales para el desarrollo integral de los niños, ya que les permiten descubrir nuevas formas de ver el mundo, ampliar sus horizontes y desarrollar su identidad. Al participar en teatro, danza, visitas a museos, exposiciones de arte o festivales culturales, los niños tienen la oportunidad de conectar con su propia cultura y explorar otras, fomentando el respeto, la tolerancia y la diversidad.

Estas actividades estimulan la creatividad y la imaginación, ayudando a los niños a desarrollar el pensamiento crítico y la capacidad de resolver problemas de manera innovadora.  </p>
    </div>
  </div>
  <div class="row">
    <footer class="d-flex justify-content-between align-items-center p-4 " style="background-color: #F9E79F; width: 100%; height: 100px;">
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
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

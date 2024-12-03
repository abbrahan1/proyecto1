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
      .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        .calendar .day, .calendar .day-name {
            text-align: center;
            padding: 15px;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .calendar .day {
            background-color: #fff;
        }
        @media (max-width: 768px) {
            .calendar .day, .calendar .day-name {
                padding: 10px;
                font-size: 14px;
            }
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
<body>
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
          <a class="nav-link" href="actividades.php" style="background-color: #F9E79F; color: transparent; background: linear-gradient(45deg, #FFD700, #FF4500, #FF1493, #4B0082); -webkit-background-clip: text;">actividades</a>
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
<main class="container-fluid mt-0" >
   <h2 class="text-center text-black p-3" style="font-family: 'Comic Sans MS', sans-serif;">Calendario 2024</h2>
   <div class="row">
       <?php
       $months = [
           'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
       ];
       $daysOfWeek = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];

       for ($month = 1; $month <= 12; $month++) {
           $firstDayOfMonth = mktime(0, 0, 0, $month, 1, 2024);
           $numberDays = date('t', $firstDayOfMonth);
           $dateComponents = getdate($firstDayOfMonth);
           $monthName = $months[$month - 1];
           $dayOfWeek = $dateComponents['wday'];
           ?>
           <div class="col-md-4 mb-4">
               <div class="card">
                   <div class="card-header text-center text-black" style="background-color: #F9E79F;">
                       <?php echo $monthName; ?>
                   </div>
                   <div class="card-body">
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <?php foreach ($daysOfWeek as $day) { ?>
                                       <th class="text-center"><?php echo $day; ?></th>
                                   <?php } ?>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <?php
                                   if ($dayOfWeek > 0) {
                                       for ($k = 0; $k < $dayOfWeek; $k++) {
                                           echo '<td></td>';
                                       }
                                   }

                                   $currentDay = 1;
                                   while ($currentDay <= $numberDays) {
                                       if ($dayOfWeek == 7) {
                                           $dayOfWeek = 0;
                                           echo '</tr><tr>';
                                       }
                                       echo '<td class="text-center">' . $currentDay . '</td>';
                                       $currentDay++;
                                       $dayOfWeek++;
                                   }

                                   if ($dayOfWeek != 7) {
                                       $remainingDays = 7 - $dayOfWeek;
                                       for ($i = 0; $i < $remainingDays; $i++) {
                                           echo '<td></td>';
                                       }
                                   }
                                   ?>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       <?php } ?>
   </div>
   </main>
  
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
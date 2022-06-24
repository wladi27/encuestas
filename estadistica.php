<?php
include('database.php');
include('includes/votos_redes.php');
include('includes/face_edad.php');
include('includes/wa_edad.php');
include('includes/tw_edad.php');
include('includes/ins_edad.php');
include('includes/tik_edad.php');
include('includes/times_redes.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Encuestas App</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="features.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Encuestas App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Encuestas App</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Encuesta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="estadistica.php">Estadísticas</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <main class="pt-4">
      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Estadísticas</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col pt-2 text-center">
              <div class="card text-center border-primary">
                <div  class="card-header bg-white">
                  <h4>Encuestas Respondidas</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $numero;?><br> Encuestas</b></h3>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: <?php echo $color_max;?>;" class="card text-white text-center">
                <div class="card-header">
                  <h4>Red Social Favorita</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $name_max;?></b></h3>
                  <h6><b>Con <?php echo $votos_max.' votos';?></b></h6>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: <?php echo $color_min;?>;" class="card text-white text-center">
                <div class="card-header">
                  <h4>Red Social Menos Querida</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $name_min;?></b></h3>
                  <h6><b>Con <?php echo $votos_min.' votos';?></b></h6>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background: rgb(47, 0, 255);" class="card text-white text-center">
                <div  class="card-header">
                  <h4>Rango de Edad que mas usa Facebook</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $name_maxf;?></b></h3>
                  <h6><b>Con <?php echo $votos_maxf.' votos';?></b></h6>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div class="card text-white text-center bg-success">
                <div class="card-header">
                  <h4>Rango de Edad que mas usa WhatsApp</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $name_maxw;?></b></h3>
                  <h6><b>Con <?php echo $votos_maxw.' votos';?></b></h6>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: rgb(0, 140, 255);" class="card text-white text-center">
                <div class="card-header">
                  <h4>Rango de Edad que mas usa Twitter</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $name_maxtw;?></b></h3>
                  <h6><b>Con <?php echo $votos_maxtw.' votos';?></b></h6>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: rgb(233, 5, 62);" class="card text-white text-center">
                <div class="card-header">
                  <h4>Rango de Edad que mas usa Instagram</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $name_maxig;?></b></h3>
                  <h6><b>Con <?php echo $votos_maxig.' votos';?></b></h6>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: rgb(7, 7, 7);" class="card text-white text-center">
                <div class="card-header">
                  <h4>Rango de Edad que mas usa Tiktok</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h3><b><?php echo $name_maxtik;?></b></h3>
                  <h6><b>Con <?php echo $votos_maxtik.' votos';?></b></h6>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background: rgb(47, 0, 255);" class="card text-white text-center">
                <div  class="card-header">
                  <h4>Uso Promedio de Facebook</h4>
                </div><br>
                <span style="font-weight:400;">
                  <h5><b><?php echo $time_f.' Horas';?></b></h5>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div class="card text-white text-center bg-success">
                <div class="card-header">
                  <h4>Uso Promedio de WhatsApp</h4>
                </div><br>
                <span style="font-weight:400;">
                <h5><b><?php echo $time_w.' Horas';?></b></h5>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: rgb(0, 140, 255);" class="card text-white text-center">
                <div class="card-header">
                  <h4>Uso Promedio de Twitter</h4>
                </div><br>
                <span style="font-weight:400;">
                <h5><b><?php echo $time_tw.' Horas';?></b></h5>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: rgb(233, 5, 62);" class="card text-white text-center">
                <div class="card-header">
                  <h4>Uso Promedio de Instagram</h4>
                </div><br>
                <span style="font-weight:400;">
                <h5><b><?php echo $time_i.' Horas';?></b></h5>
                </span>
              </div>
            </div>
            <div class="feature col pt-2 text-center">
              <div style="background-color: rgb(7, 7, 7);" class="card text-white text-center">
                <div class="card-header">
                  <h4>Uso Promedio de Tiktok</h4>
                </div><br>
                <span style="font-weight:400;">
                <h5><b><?php echo $time_t.' Horas';?></b></h5>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  
      
  </body>
</html>

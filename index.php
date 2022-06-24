<?php
include('database.php');
?>

<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Encuestas App</title>
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="css/style.css">
  <link rel="apple-touch-icon" href="images/hello-icon-152.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="white"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Hello World">
  <meta name="msapplication-TileImage" content="images/hello-icon-144.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/sweetalert2.min.css">
  <script src="js/sweetalert2.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body class="fullscreen">

    <!-- NAVIGATION  -->
    <nav class="navbar bg-light fixed-top navbar-light">
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
                <a class="nav-link active" aria-current="page" href="encuesta.php">Encuesta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="estadistica.php">Estadísticas</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="card" style="border-color: transparent; background: transparent;">
      <br><br><br><br>
      
      <h3>Completa la Encuesta</h3>
			<div class="card-body bg-white" style="background: transparent; border-radius: 150px;">
      <div class="card-body">
              <!-- FORM ENCUESTAS -->
              <form role="form" name="registro" action="index.php" method="post">
                <div class="form-group">
                  <label for="">Nombre Completo</label>
                  <input type="text" name="name" placeholder="Nombre Completo" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Correo Electronico</label>
                  <input type="email" name="correo" placeholder="Correo Electronico" class="form-control">
                </div>
                <fieldset class="form-group">
                  <div class="fila">
                    <label for="">Edad</label>
                    <select name="edad" class="form-control">
                      <option value="18-25">18-25</option>
                      <option value="26-33">26-33</option>
                      <option value="34-40">34-40</option>
                      <option value="40+">40+</option>
                    </select>
                  </div>
                </fieldset>
                <fieldset class="form-group">
                  <div class="fila">
                    <label for="">Sexo</label>
                    <select name="sexo" class="form-control">
                    <option value="Hombre">Hombre</option>
                      <option value="Mujer">Mujer</option>
                    </select>
                  </div>
                </fieldset>
                <fieldset class="form-group">
                  <div class="fila">
                    <label for="">Red Social Favorita</label>
                    <select name="rsf" class="form-control">
                      <option value="Facebook">Facebook</option>
                      <option value="WhatsApp">WhatsApp</option>
                      <option value="Twitter">Twitter</option>
                      <option value="Instagram">Instagram</option>
                      <option value="Tiktok">TikTok</option>
                    </select>
                  </div>
                </fieldset>
                <div class="form-group">
                  <label for="">Tiempo promedio al día en Facebook</label>
                  <div class="input-group mb-3">
                  <input type="number" name="horaf" min="0" max="24" class="form-control" placeholder="Hora" aria-label="Hora">
                    <span class="input-group-text">Horas</span>
                  </div> 
                </div>
                <div class="form-group">
                  <label for="">Tiempo promedio al día en WhatsApp</label>
                  <div class="input-group mb-3">
                  <input type="number" name="horaw" min="0" max="24" class="form-control" placeholder="Hora" aria-label="Hora">
                    <span class="input-group-text">Horas</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Tiempo promedio al día en Twitter</label>
                  <div class="input-group mb-3">
                  <input type="number" name="htr" min="0" max="24" class="form-control" placeholder="Hora" aria-label="Hora">
                    <span class="input-group-text">Horas</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Tiempo promedio al día en Instagram</label>
                  <div class="input-group mb-3">
                  <input type="number" name="horai" min="0" max="24" class="form-control" placeholder="Hora" aria-label="Hora">
                    <span class="input-group-text">Horas</span>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="">Tiempo promedio al día en Tiktok</label>
                  <div class="input-group mb-3">
                  <input type="number" name="horat" min="0" max="24" class="form-control" placeholder="Hora" aria-label="Hora">
                    <span class="input-group-text">Horas</span>
                  </div>
                </div>
                <input type="submit" class="btn btn-success btn-lg btn-block" name="enviar" value="Enviar"/>
              </form>
            </div>
			</div>
		</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
    <!-- <script src="app.js"></script> -->
  </body>

</html>
<?php
    if(isset($_POST['enviar'])){
        $name = $_POST['name'];
        $correo = $_POST['correo'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $rsf = $_POST['rsf'];
        $tpf = $_POST['horaf'];
        $tpw = $_POST['horaw'];
        $tptr = $_POST['htr'];
        $tpi = $_POST['horai'];
        $tpt = $_POST['horat'];

        include('includes/time_promedio.php');

        if ($rsf === 'Facebook'){
            $query = "SELECT * FROM redes_sociales WHERE name = 'Facebook'";
            $result=$connection->query($query);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql = "UPDATE redes_sociales set votos = '$vo2' WHERE name = 'Facebook'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado Facebook\");</script>";
            }

            
            
            $query2 = "SELECT * FROM face_edad WHERE edad = '$edad'";
            $result=$connection->query($query2);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql2 = "UPDATE face_edad set votos = '$vo2' WHERE edad = '$edad'";
            mysqli_query($connection, $sql2);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado edad\");</script>";
            }  
        }
        if ($rsf === 'WhatsApp'){
            $query = "SELECT * FROM redes_sociales WHERE name = 'WhatsApp'";
            $result=$connection->query($query);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql = "UPDATE redes_sociales set votos = '$vo2' WHERE name = 'WhatsApp'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado WhatsApp\");</script>";
            }
            $query2 = "SELECT * FROM wa_edad WHERE edad = '$edad'";
            $result=$connection->query($query2);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql2 = "UPDATE wa_edad set votos = '$vo2' WHERE edad = '$edad'";
            mysqli_query($connection, $sql2);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado edad\");</script>";
            } 
        }
        if ($rsf === 'Twitter'){
            $query = "SELECT * FROM redes_sociales WHERE name = 'Twitter'";
            $result=$connection->query($query);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql = "UPDATE redes_sociales set votos = '$vo2' WHERE name = 'Twitter'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado Twitter\");</script>";
            }
            $query2 = "SELECT * FROM tw_edad WHERE edad = '$edad'";
            $result=$connection->query($query2);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql2 = "UPDATE tw_edad set votos = '$vo2' WHERE edad = '$edad'";
            mysqli_query($connection, $sql2);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado edad\");</script>";
            } 
        }
        if ($rsf === 'Instagram'){
            $query = "SELECT * FROM redes_sociales WHERE name = 'Instagram'";
            $result=$connection->query($query);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql = "UPDATE redes_sociales set votos = '$vo2' WHERE name = 'Instagram'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado con Instagram\");</script>";
            }
            $query2 = "SELECT * FROM ins_edad WHERE edad = '$edad'";
            $result=$connection->query($query2);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql2 = "UPDATE ins_edad set votos = '$vo2' WHERE edad = '$edad'";
            mysqli_query($connection, $sql2);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado edad\");</script>";
            } 
        }
        if($rsf === 'Tiktok'){
            $query = "SELECT * FROM redes_sociales WHERE name = 'Tiktok'";
            $result=$connection->query($query);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql = "UPDATE redes_sociales set votos = '$vo2' WHERE name = 'Tiktok'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado Tiktok\");</script>";
            }
            $query2 = "SELECT * FROM tik_edad WHERE edad = '$edad'";
            $result=$connection->query($query2);
                if ($row = $result->fetch_assoc()){
                    $vo = $row['votos'];
                    $vo1 = 1;
                    $vo2 = $vo+$vo1;
            $sql2 = "UPDATE tik_edad set votos = '$vo2' WHERE edad = '$edad'";
            mysqli_query($connection, $sql2);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado edad\");</script>";
            } 
        }

        $query = "INSERT into encuestas (name, email, edad, sexo, rsf) VALUES ('$name', '$correo','$edad', '$sexo', '$rsf')";
        $result = mysqli_query($connection, $query);
        if($result>=0){
                ?>
            <script language="javascript"type="text/javascript">
            Swal.fire({
              type: 'success',
              title: 'Enviado!',
              text: 'Datos Guardados',
              showConfirmButton: true
          })
            </script>
    
                <?php
            
        }else{
          ?>
            <script language="javascript"type="text/javascript">
            Swal.fire({
              type: 'info',
              title: 'Oops...',
              text: 'Error Al Enviar Solicitud',
              showConfirmButton: false,
              timer: 3000
          })
            </script>
          <?php
        }
    }
?>

        
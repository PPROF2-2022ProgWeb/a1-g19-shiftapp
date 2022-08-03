<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="icon" href="./img/logo2.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" >Menú</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Ingresar</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="newaccount.php">Crear Cuenta</a>
          </li>
        </li>
          
        <li class="nav-item">
          <a class="nav-link" href="index.php#servicio">Servicios</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php#contacto">Contacto</a>
        </li>
      </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Escribir aqui" aria-label="Search">
          <button type="button" class="btn btn-dark">Buscar</button>
        </form>
      </div>
    </nav>
    <!--Fin del Menú -->
  </header>

<main>
  <section>
  <!--Login -->
  <div class="login-box">
    <img src="img/logo2.png" class="avatar" alt="Avatar Image">
    <h1>Ingresar</h1>
    <!-- Validacion Campos Vacios bootstrap-->
    <form class="was-validated" method="post">
      <div class="form-group">
      <!-- USERNAME INPUT -->
      <label for="username" class="form-label" class=:needs-validation>Usuario</label>
      <input type="text" placeholder="Ingrese Usuario" name="nombreusuario" required>
      <div class="valid-feedback">ok</div>
      <div class="invalid-feedback">ingresar usuario</div>  
    </div>
    <div class="form-group">
      <!-- PASSWORD INPUT -->
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Ingrese Contraseña" name="contrasenia" required>
      <div class="valid-feedback">ok</div>
      <div class="invalid-feedback">ingresar contraseña</div>  
    </div>
      <input type="submit" value="Confirmar">
      <a href="#">Olvido su contraseña?</a><br>
      <a href="./newaccount.php">No tiene cuenta?</a>
      <?php
            
            $hostname="fr65ql9ks8xf.us-east-1.psdb.cloud";
            $username="dw2vbsghodhm";
            $password="pscale_pw_VfCoIaxbp1Ry9__1kvhcaeFk5LyYKUXKc_8RgkI3M5k";
            $dbname="shiftapp-db";
            $usertable=strval("usuario");


            $conn= new mysqli($hostname,$username, $password, $dbname, 3306);
                                
                                      
            $nombreusuario = $_POST['nombreusuario'];
            $contrasenia = $_POST['contrasenia'];


            $query = "SELECT * FROM  $usertable WHERE contrasenia = '".$contrasenia."' ";
            $pass = $conn->query($query);
            
            $comparepass =  $pass->num_rows;
            $pass->close();
            if ($comparepass >0) {
            echo "Acceso correcto";

            $query2 = "SELECT * FROM  turnos WHERE disponibilidad > 0 ";
            $result = $conn->query($query2);
            $compareresult = $result->num_rows;
            if($compareresult > 0){
              echo "Aun quedan turnos disponibles";
            }
            else{
              echo "Lo lamento, no hay turnos disponibles";
            }

            } else {
            echo "Error: Contraseña equivocada ";
            }

           


?>
    </form>
  </div>
  <!--Fin de Login -->
 
</section>
</main>
<!--Footer-->
<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-md-5">
              <h2>ShiftApp</h2>
              <div class="row">
                  <div class="col-6">
                      <ul class="list-unstyled">
                          <li><a href="index.php">Inicio</a></li>
                          <li><a href="login.php">Ingresar</a></li>
                          <li><a href="newaccount.php">Crear Cuenta</a></li>
                          <li><a href="index.php#servicio">Servicios</a></li>
                          <li><a href="turnero.html">Turnero</a></li>
                      </ul>
                  </div>
                  <!--Enlaces de interes -->
                  <div class="col-6">
                      <ul class="list-unstyled">
                          <li><a href="https://calendar.google.com/calendar/u/0/r?pli=1" target="blank">Google Calendar</a></li>
                          <li><a href="https://news.google.com/topstories?hl=es-419&gl=AR&ceid=AR:es-419" target="blank">Google News</a></li>
                          <li><a href="https://weather.com/es-AR/tiempo/hoy/l/-31.43,-64.15?par=google" target="blank">The Wheater Chanel</a></li>
                      </ul>
                  </div> 
                  <!-- Fin de enlaces de interes -->
              </div>
              <!-- Iconos de redes sociales-->
              <a href="https://www.facebook.com/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg></a>
              <a href="https://www.instagram.com/?hl=es" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg></a>
              <a href="https://twitter.com/iniciarsesion?lang=es" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg></a>
              <a href="https://www.google.com/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  class="bi bi-google" viewBox="0 0 16 16">
                  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
              </svg></a>
              <a href="https://github.com/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg></a>
              <br>
              <!-- Fin de Iconos de redes sociales-->
          </div>
          <!-- Formulario de contacto en el footer-->
          <div class="col-md-2" id="contacto">
              <h2 class="text-md-right">Contacto</h2>
              <hr>
          </div>
          <div class="col-md-5">
              <form>
                  <fieldset class="form-group">
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Ingrese su nombre" required>
                  </fieldset>
                  <fieldset class="form-group">
                  <input type="text" class="form-control" id="exampleInputSurname" placeholder="Ingrese su apellido" required>
                  </fieldset>
                  <fieldset class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su E-mail" required>
                  </fieldset>
                  <fieldset class="form-group">
                      <textarea class="form-control" id="exampleMessage" placeholder="Ingrese su Mensaje" required></textarea>
                  </fieldset>
                  <fieldset class="form-group text-xs-right ">
                    <button id="submitBtn" type="button" class="btn btn-dark">Enviar</button>
                  </fieldset>
              </form>
                <!-- Fin de formulario de contacto en el footer-->
            </div>
        </div>
    </div>
</footer>
  <!-- Llama al contenedor de scripts funciones -->
  <script src="./js/funcionesGrupo99.js"></script>
</body>

</html>
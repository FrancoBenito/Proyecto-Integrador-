<?php 
// Requiero mi archivo de funciones para validar los datos
require_once("funciones.php");

// Genero variables default para persistencia.
$nombreDefault = "";
$emailDefault = ""; 

// Verifico que venga por post
if($_POST){
  $datosIngresados = $_POST;
  // Validación 
  $errores = validarRegistracion($datosIngresados);
    // Si no hay errores
    if(empty($errores)){
      // Registro al usuario
        //Generar Usuario
        $usuario = generarNuevoUsuario($datosIngresados);
        //Lo agrego al JSON
        agregarUsuarioJSON($usuario);
      // Redirijo a la página login.php
      header("Location:index.php");
      exit;
    }
    // Armar la persistencia de los datos
    $nombreDefault = generarPersistenciaNombre($errores);
    $emailDefault = generarPersistenciaEmail($errores);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:200,400,700,900&display=swap"
      rel="stylesheet"
    />

    <!-- favicon -->
    <link rel="icon" href="assets/favicons/favicon.png" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png" />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="images/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="images/apple-touch-icon-114x114.png"
    />

    <!-- CSS Propio -->
    <link rel="stylesheet" href="./assets/css/formCrearCuenta.css" />
    <title>Crear Cuenta</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav
        class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark pt-0 pb-0"
      >
        <a class="navbar-brand" href="index.php">
          <img src="./assets/img/drh_logo72.png" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Internacional <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">URBA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ofertas</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="formIniciaSesion.php"
                  >Inicia Sesión</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formCrearCuenta.php">Registrate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="carrito.php">Carrito</a>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </header>

    <!-- Formulario -->
    <form id="form__IniciaSesion" action="formCrearCuenta.php" method="post">
      <div class="form__title">
        <h3>Crear Cuenta</h3>
      </div>
      <div class="form__inputs">
        <input type="text" placeholder="Nombre" name="name" />
        <div class="form__error">
        <?php if($_POST && isset($errores["name"])){
          echo "<p>" . $errores["name"] . "</p>";
        }
        ?>
        </div>
        <input type="text" placeholder="Email" name="email"/>
        <div class="form__error">
          <?php if($_POST && isset($errores["email"])){
            echo "<p>" . $errores["email"] . "</p>";
          }
          ?>
        </div>
        <input type="text" placeholder="Contraseña" name="password"/>
        <div class="form__error">
          <?php if($_POST && isset($errores["password"])){
            echo "<p>" . $errores["password"] . "</p>";
          }
          ?>
        </div>
        <input type="text" placeholder="Confirmar contraseña" name= "cpassword" />
        <div class="form__error">
          <?php if($_POST && isset($errores["cpassword"])){
            echo "<p>" . $errores["cpassword"] . "</p>";
          }
          ?>
          <?php if($_POST && isset($errores["password_conf"])){
            echo "<p>" . $errores["password_conf"] . "</p>";
          }
          ?>
        </div>
      </div>
      <div class="form__buttons">
        <button>Crear Cuenta</button>
      </div>
    </form>

    <!-- Footer -->
    <footer class="page-footer fixed-bottom font-small blue pt-4 bg-dark">
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">
            <!-- Content -->
            <h5 class="text-uppercase">Digital Rugby House</h5>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3" />

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Preguntas frecuentes</a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Redes sociales</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Facebook</a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

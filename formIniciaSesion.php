<?php
  // Requiero mi archivo de funciones para validar los datos
  require_once("funciones.php");
  $emailDefault = ""; 
  // Valido que se haya cargado por POST.
  if($_POST){
    $datosIngresados = $_POST;
    // Validar 
    $errores = validarLogin($datosIngresados);
  if(empty($errores)){
    // Reenvio a la página login.php
    // Busco el ID del usuario logueando
    $usuario = buscarIDUsuario($datosIngresados);
    // Inicio session
    session_start();
    // Guardo el mail del usuario en session
    $_SESSION["email"] = $usuario["email"];
    $_SESSION["name"] = $usuario["name"];
    $_SESSION["id"] = $usuario["id"];
    // Redirijo al perfil
    header("Location:perfil.php?id=" . $usuario["id"]);
    exit;
  }
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
    <link rel="stylesheet" href="./assets/css/formIniciaSesion.css" />
    <title>Inicia Sesión</title>
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
    <form id="form__IniciaSesion" action="formIniciaSesion.php" method="post" autocomplete="off">
      <div class="form__title">
        <h3>Inicia Sesión</h3>
      </div>
      <input id="username" style="display:none" type="text" name="fakeusernameremembered">
      <input id="password" style="display:none" type="password" name="fakepasswordremembered">
      
      <div class="form__inputs">
        <input type="text" placeholder="Tu email" name="email" value= "<?= $emailDefault ?>" autocomplete="nope"/>
        <div class="form__error">
        <?php if($_POST && isset($errores["email"])){
          echo "<p>" . $errores["email"] . "</p>";
        }
        ?>
        </div>
        <input type="password" placeholder="Contraseña" name="password" autocomplete="new-password"/>
        <div class="form__error">
        <?php if($_POST && isset($errores["password"])){
          echo "<p>" . $errores["password"] . "</p>";
        }
        ?>
        </div>
      </div>
      <div class="form__checkbox"><input type="checkbox" /> Recordarme</div>
      <div class="form__buttons">
        <button>Inicia Sesión</button>
        <p>
          <a href="/formCrearCuenta.html">
            Crear cuenta
          </a>
        </p>
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

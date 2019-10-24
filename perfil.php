<?php
  session_start();

  var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <link rel="stylesheet" href="./assets/css/perfil.css" />

    <title>Tu perfil</title>
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

  <!-- Perfil -->
    <section class="container__general">
      <section class="cuenta__container">
        <h1>Tu cuenta</h1>
        <div class="cuenta__tarjeta__fila">
        <a href="editarPerfil.php">
          <article class="cuenta__opciones">
            <h2>Tu perfil</h2>
            <p>Editar nombre, contraseña y demás.</p>
          </article>
        </a>
          <article class="cuenta__opciones">
            <h2>Tus pedidos</h2>
            <p>Seguir, devolver y repetir pedidos.</p>
          </article>
        </div>
        <div class="cuenta__tarjeta__fila">
          <article class="cuenta__opciones">
            <h2>Direcciones</h2>
            <p>Editar tus direcciones.</p>
          </article>
          <article class="cuenta__opciones">
            <h2>Medios de pago</h2>
            <p>Agregar o ediar medios de pago.</p>
          </article>
        </div>
      </section>
    </section>

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
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

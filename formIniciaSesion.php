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
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
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
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>

    <title>Inicia Sesión</title>
  </head>
  <body>
    <!-- Header -->
    <?php 
    include('navbar.php');
    ?>

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
          <a href="formCrearCuenta.php">
            Crear cuenta
          </a>
        </p>
      </div>
    </form>

    <!-- Footer -->
    <?php 
    include('footer.php');
    ?>

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

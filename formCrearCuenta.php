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
    } else {
      // Armar la persistencia de los datos
      $nombreDefault = generarPersistenciaNombre($errores);
      $emailDefault = generarPersistenciaEmail($errores);
    }
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>

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

    <title>Crear Cuenta</title>
  </head>
  <body>
    <!-- Header -->
    <?php 
    include('navbar.php');
    ?>

    <!-- Formulario -->
    <form id="form__IniciaSesion" action="formCrearCuenta.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="form__title">
        <h3>Crear Cuenta</h3>
      </div>
      <div class="form__inputs">
        <input type="text" placeholder="Nombre" name="name" value= "<?= $nombreDefault ?>" />
        <div class="form__error">
        <?php if($_POST && isset($errores["name"])){
          echo "<p>" . $errores["name"] . "</p>";
        }
        ?>
        </div>
        <input type="text" placeholder="Email" name="email" value= "<?= $emailDefault ?>"/>
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
        <!-- <input name="uploadedfile" type="file" /> -->
      </div>
      <div class="form__buttons">
        <button>Crear Cuenta</button>
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

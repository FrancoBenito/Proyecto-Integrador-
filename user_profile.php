<!doctype html>
<html class="no-js" lang="en">
  <head>
    <!-- title -->
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/favicons/favicon.png">
    <link rel="apple-touch-icon" href="assets/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-touch-icon-114x114.png">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/profile.css?1.0" />
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/profile_responsive.css" />
  </head>
  <body class="bg-light-gray">
    <!-- Header -->
    <?php 
    include('navbar.php');
    ?>

    <!-- Perfil -->
    <section>
      <div class="container">
          <div class="row">
              <!-- start column -->
              <div class="col-md-4 col-sm-12 bg-white">
                <div id="foto" class="foto padding-40px-all alt-font">
                  <img src="assets/img/perfil.jpg" alt="foto">
                    <p style="margin-top: 20px;"><a href="#">MODIFICAR</a></p>
                </div>
              </div>
              <!-- end column -->
              <!-- start column -->
              <div class="col-md-8 col-sm-12 profile-imput padding-40px-all">
                <!-- imput -->
                <div class="bg-white padding-20px-all  ">
                  <h6 class="alt-font font-weight-300">NOMBRE: <strong>JUAN PEREZ</strong></h6>
                </div>
                <!-- imput -->
                <div class="bg-white padding-20px-all  margin-five-top">
                  <h6 class="alt-font font-weight-300">DIRECCION: <strong>PAEZ 345 - CABA</strong></h6>
                </div>
                <!-- imput -->
                <div class="bg-white padding-20px-all   margin-five-top">
                  <h6 class="alt-font font-weight-300">EMAIL: <strong>JUAN@PEREZ.COM</strong></h6>
                </div>
                <!-- imput -->
                <div class="bg-white padding-20px-all   margin-five-top">
                  <h6 class="alt-font font-weight-300">CONTRASEÑA: <strong>**********</strong></h6>
                </div>
                <!-- imput -->
                <div class="margin-five-top">
                  <a class="btn btn-large btn-transparent-black btn-rounded lg-margin-15px-bottom " href="#">EDITAR PERFIL</a>
                </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Footer -->
    <?php 
    include('footer.php');
    ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
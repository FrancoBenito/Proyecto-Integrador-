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
    <link rel="stylesheet" href="./assets/css/carrito.css" />
    <title>Carrito</title>
  </head>
  <body>
    <!-- Header -->
    <?php 
    include('navbar.php');
    ?>

    <!-- Container general de los Productos -->
    <div class="containerGeneral">
      <section class="productos--container">
        <!-- Carrito -->
        <section class="carrito--items">
          <h1>Tu carrito:</h1>
          <p>2 artículos</p>
        </section>
        <!-- Detalle de cada Producto -->
        <article>
          <div class="productos__detalles--container">
            <div class="productos__detalles--img">
              <img src="https://www.lovellrugby.es/products/46498.jpg" alt="" />
            </div>
            <div class="productos__detalles--texto">
              <p class="productos__detalles--nombre">
                Inglaterra camiseta Clásica Niños
              </p>
              <div class="productos__detalles--info">
                <p>Color: Negro</p>
                <p>Talle: 16</p>
                <p>Cantidad: 1</p>
              </div>
              <p class="productos__detalles--precio">$1000</p>
            </div>
          </div>
          <div class="productos__detalles--botones">
            <button class="boton__modificar">Modificar</button>
            <button>Eliminar</button>
          </div>
        </article>
        <article>
          <div class="productos__detalles--container">
            <div class="productos__detalles--img">
              <img src="https://www.lovellrugby.es/products/46498.jpg" alt="" />
            </div>
            <div class="productos__detalles--texto">
              <p class="productos__detalles--nombre">
                Inglaterra camiseta Clásica Niños
              </p>
              <div class="productos__detalles--info">
                <p>Color: Negro</p>
                <p>Talle: 16</p>
                <p>Cantidad: 1</p>
              </div>
              <p class="productos__detalles--precio">$1000</p>
            </div>
          </div>
          <div class="productos__detalles--botones">
            <button class="boton__modificar">Modificar</button>
            <button>Eliminar</button>
          </div>
        </article>
      </section>
      <!-- Resumen del Pedido -->
      <div class="resumen__container">
        <section class="resumen__info">
          <h2>Resumen</h2>
          <div class="resumen__productos--container">
            <div class="resumen__producto">
              <p>Inglaterra camiseta Clásica Niños</p>
              <p>$1000</p>
            </div>
            <div class="resumen__producto">
              <p>Pelota Replica Gilbert Gales</p>
              <p>$800</p>
            </div>
            <br />
            <div class="resumen__total">
              <p>Total</p>
              <p>$1800</p>
            </div>
          </div>
          <div class="resumen__boton">
            <button>Continuar compra</button>
          </div>
        </section>
      </div>
    </div>

    <!-- Footer -->
    <?php 
    include('footer.php');
    ?>

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

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
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>

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

    <link rel="stylesheet" href="./assets/css/nuevoIndex.css" />

    <title>Digital Rugby House</title>
  </head>
  <body>
    <!-- Header -->
    <?php 
    include('navbar.php');
    ?>

    <!-- Productos Destacados -->
    <section>
      <div class="container my-5 align-items-center">
        <div class="row align-items-center">
          <div class="text-center col-12 mb-5">
            <h2>Productos Destacados</h2>
          </div>
          <section>
            <div class="card-columns">
              <div class="card">
                <img
                  src="/assets/img/products/product-1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Card title that wraps to a new line
                  </h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                  <button type="button" class="btn btn-dark">
                    Añadir al carrito
                  </button>
                </div>
              </div>
              <div class="card">
                <img
                  src="/assets/img/products/product-1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Card title that wraps to a new line
                  </h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                  <button type="button" class="btn btn-dark">
                    Añadir al carrito
                  </button>
                </div>
              </div>
              <div class="card">
                <img
                  src="/assets/img/products/product-1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Card title that wraps to a new line
                  </h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                  <button type="button" class="btn btn-dark">
                    Añadir al carrito
                  </button>
                </div>
              </div>
              <div class="card">
                <img
                  src="/assets/img/products/product-1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Card title that wraps to a new line
                  </h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                  <button type="button" class="btn btn-dark">
                    Añadir al carrito
                  </button>
                </div>
              </div>
              <div class="card">
                <img
                  src="/assets/img/products/product-1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Card title that wraps to a new line
                  </h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                  <button type="button" class="btn btn-dark">
                    Añadir al carrito
                  </button>
                </div>
              </div>
              <div class="card">
                <img
                  src="/assets/img/products/product-2.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Card title that wraps to a new line
                  </h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                  <button type="button" class="btn btn-dark">
                    Añadir al carrito
                  </button>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>

    <!-- Formulario de Contacto -->
    <section>
      <div class="form__container">
        <h2>Dejanos tu comentario!</h2>
        <div class="form bg-light">
          <form>
            <div class="form-group">
              <label for="formName">Nombre</label>
              <input type="text" class="form-control" id="formName" />
            </div>
            <div class="form-group">
              <label for="formEmail">Email</label>
              <input type="email" class="form-control" id="formEmail" />
            </div>
            <div class="form-group">
              <label for="formTextArea">Mensaje</label>
              <textarea
                class="form-control"
                id="formTextArea"
                rows="3"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">
              Enviar
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php 
    include('footer.php');
    ?>

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

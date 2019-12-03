<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!--  Show this only on mobile to medium screens  -->
  <a class="navbar-brand d-lg-none" href="#"><img src="{{url('/images/drh_logo80.png')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--  Use flexbox utility classes to change how the child elements are justified  -->
<div class="container justify-content-center">
  <div class= "collapse navbar-collapse" id="navbarToggle">
    <ul class="navbar-nav flex-fill w-100 flex-nowrap">
      <li class="nav-item">
        <a class="nav-link active" href="#">Internacional <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">URBA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/carrito">Carrito</a>
      </li>
    </ul>
<!--   Show this only lg screens and up   -->
    <a class="navbar-brand d-none d-lg-block" href="/"><img src="{{url('/images/drh_logo80.png')}}"></a>
    <ul class="navbar-nav flex-fill w-100 flex-nowrap justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
    </ul>
  </div>
</div>
</nav>
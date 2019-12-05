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
        <a class="nav-link active alt-font" href="/internacional">Internacional <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link alt-font" href="/urba">URBA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link alt-font" href="/promociones">Promociones</a>
      </li>
    </ul>
<!--   Show this only lg screens and up   -->
    <a class="navbar-brand d-none d-lg-block" href="/"><img src="{{url('/images/drh_logo80.png')}}"></a>
    <ul class="navbar-nav flex-fill w-100 flex-nowrap justify-content-end">
      @guest
      <li class="nav-item">
          <a class="nav-link alt-font" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link alt-font" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
      @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle alt-font" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right alt-font" aria-labelledby="navbarDropdown">
                @if (Auth::user()->isAdmin())
                  <a class="dropdown-item" href="{{ route('admin') }}">
                      Admin
                  </a>
                @endif
                @auth
                  <a class="dropdown-item" href="{{ route('profile') }}">
                      Profile
                  </a>
                @endauth
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest
      <li class="nav-item">
        <a class="nav-link alt-font" href="/carrito">Carrito</a>
      </li>
    </ul>
  </div>
</div>
</nav>
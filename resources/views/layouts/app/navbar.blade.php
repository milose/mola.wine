<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="/img/logo-large-raster.png" alt="Mola" width="28" height="28">
    </a>

    <div class="navbar-burger burger" data-target="navMenu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenu" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item " href="/">
        Home
      </a>
      <a class="navbar-item " href="/">
        Products
      </a>
      <a class="navbar-item " href="/">
        Contact
      </a>
    </div>

    <div class="navbar-end">
      @if (!Auth::guest())
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link  is-active" href="/home">
            Admin
          </a>
          <div class="navbar-dropdown">
            <div class="navbar-item">
              <div>
                <p class="has-text-info is-size-6-desktop"><strong>{{ Auth::user()->name }}</strong></p>

                  <small>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                  </small>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>

              </div>
            </div>
            <hr class="navbar-divider">
            <a class="navbar-item" href="/venues">
              Venues
            </a>
            <a class="navbar-item" href="{{ route('register') }}">
              Add New User
            </a>
          </div>
        </div>
      @endif

      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="button" href="https://fb.me/molawine" style="color: #3B5998;">
              <span class="icon">
                <i class="fa fa-facebook"></i>
              </span>
              <small class="is-small" style="color: #3B5998; font-variant: small-caps">page</small>
            </a>
          </p>
        </div>
      </div>

    </div>
  </div>
</nav>










{{--





<section class="hero">
    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a href="/" class="nav-item">
                        <img src="/img/logo-large-raster.png" alt="Mola">
                    </a>
                </div>
                <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="nav-right nav-menu">

                    {{-- <a href="" class="nav-item">
                        Products
                    </a>
                    <a href="" class="nav-item">
                        Contact
                    </a>

                    @if (!Auth::guest())

                        <a class="nav-item">|</a>

                        <a href="/home" class="nav-item">
                            Admin
                        </a>

                        <a class="nav-item">
                            {{ Auth::user()->name }}
                        </a>

                        <a href="{{ route('logout') }}" class="nav-item" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    @endif

                </div>
            </div>
        </header>
    </div>

    @stack('heroheader')

    @stack('heronav')

</section> --}}

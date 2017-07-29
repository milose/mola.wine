<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="/img/mola-nav-logo.png" alt="Mola" width="89" height="28">
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

      <a class="navbar-item " href="/products">
        Products
      </a>

      <a class="navbar-item " href="/contact">
        Contact
      </a>

        @if (!Auth::guest())
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link is-active" href="/home">
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

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field">
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

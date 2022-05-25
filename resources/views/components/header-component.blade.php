    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="index.html"><h2>Kitaab <em>Mela</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                @guest                    
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                  </li>
                @endguest
                
                @auth
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('cartList') }}">Cart ({{ $total }})</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('viewOrder') }}">My Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                @endauth

              </ul>
            </div>
          </div>
        </nav>
      </header>
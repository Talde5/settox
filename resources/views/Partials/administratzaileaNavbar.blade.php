<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/administratzailea') }}">Settox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/administratzailea') }}">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/administratzailea/ikasleak') }}">Ikasleak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/administratzailea/irakasleak') }}">Irakasleak</a>
                </li>
              </ul>
              <ul class="navbar-nav navbar-right">
                    <li class="nav-item"> 
                        
                         <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul> 
            </div>
        @endif
      </div>
    </nav>
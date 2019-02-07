    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          @if(Session::has('success-message'))
    <div class="alert alert-success">
        <button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>
        {!! session()->get('success-message') !!}
    </div>
          @endif

           @if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>
        {!! session()->get('success') !!}
    </div>
          @endif

          @if($errors->any())
          <div class="alert alert-danger"><button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>{{$errors->first()}}</div>
          @endif

      <div class="container-fluid" >
        @guest
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" alt="logo" width="120px;"></a>
        @endguest
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto navbar ">
          @guest
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#socialpets">¿Qué es Social Pets?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#caracteristicas">Caracteristicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
            </li>
          </ul>

           <ul class="navbar-nav mr navbar">
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#loginModal">Login <i class="fas fa-sign-in-alt"></i></a>
            </li>
           <li class="nav-item">
             @if (Route::has('register'))

              <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#registroModal">Registro <i class="fas fa-user-circle"></i></a>
             @endguest
            </li>
            @else

            <div class="collapse navbar-collapse" id="navbarResponsive">
            <a class="navbar-brand js-scroll-trigger" href="/dog"><img src="/img/logo.png" alt="logo" width="120px;"></a>
            <ul class="navbar-nav mr-auto navbar ">
            <li class="nav-item navbar-nav mr-auto navbar">
                     <a class="{{ Route::currentRouteNamed('dog.index') ? 'active fixed' : 'nav-link js-scroll-trigger' }}" href="{{ route('dog.index') }}"><span class="fa fa-paw">
                            {{ __('Inicio') }}
                        </a>

                    <a class="{{ Route::currentRouteNamed('profile') ? 'active fixed' : 'nav-link js-scroll-trigger' }}" href="{{ route('profile') }}"><span class="fa fa-address-card">
                            {{ __('Perfil') }}
                        </a>

                    <a class="{{ Route::currentRouteNamed('chat.index') ? 'active fixed' : 'nav-link js-scroll-trigger' }}" href="{{ route('chat.index') }}"><span class="fa  fa-bone">
                            {{ __('Favoritos') }}
                    </a>
                    <li class="dropdown">
                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="fa fa-bell">Notificaciones</i>
                        <span class="label-count" id="count"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                          <ul class="menu" id="notifications">

                          </ul>
                      </ul>
                      </li>
                  </li>

                    <a class="{{ Route::currentRouteNamed('chat.match') ? 'active fixed' : 'nav-link js-scroll-trigger' }}" href="{{ route('chat.match') }}"><span class="fas fa-heart">
                            {{ __('Match!') }}

                    </a>

          

                    @if (Auth::user() && Auth::user()->role == 'admin')
                    <a class="{{ Route::currentRouteNamed('estadisticas') ? 'active' : 'nav-link js-scroll-trigger' }}" href="{{ route('estadisticas') }}"><span class="fa  fa-chart-pie">
                            {{ __('Administrar') }}
                    </a>
                    @endif
                    <a class="{{ Route::currentRouteNamed('logout') ? 'active' : 'nav-link js-scroll-trigger' }}" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><span class="fa  fa-sign-out-alt">
                          {{ __('Cerrar sesión ') }}
                      </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </li>
  </ul>
            @endif
        </div>
      </div>
    </nav>

 

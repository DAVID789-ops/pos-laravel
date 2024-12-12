<header class="main-header">
    <!-- Logo -->
    <a href="{{url('/Inicio')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="{{url('storage/plantilla/icono-blanco.png')}}" class="img-responsive" style="padding: 10px;">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="{{url('storage/plantilla/logo-blanco-lineal.png')}}" class="img-responsive" style="padding: 10px 0px;">

      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                @if (auth()->user()->foto == '')
                <img src="{{url('storage/users/anonymous.png')}}" class="user-image" alt="User Image">

                @else
                <img src="{{url('storage/'.auth()->user()->foto)}}" class="user-image" alt="User Image">

                @endif

              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{url('Mis-Datos')}}" class="btn btn-primary btn-flat">Mis Datos</a>
                </div>
                <div class="pull-right">
                  <a href=" route('{{ route('logout') }}')" class="btn btn-danger btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salirt</a>
                </div>
                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                    @csrf
                </form>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>

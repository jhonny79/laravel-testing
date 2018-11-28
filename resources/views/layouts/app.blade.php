<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->


    <!-- Styles -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #F9FFFF  ;">
    <div id="app">
        @guest
        
    @else
    <header>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content black darken-4 ">
          <li><a href=""><i class="material-icons">account_box</i>Perfil</a></li>
          <li><a href=""><i class="material-icons small">settings</i>Admin</a></li>
          <li class="divider"></li>
          <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>
            Salir
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form></li>
        </ul>

        <nav>
          <div class="nav-wrapper black darken-4">
          <a href="{{ route('home')}}" class="brand-logo"><strong>{{ config('app.name', 'Laravel') }}</strong></a>
            
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
            <ul class="right hide-on-med-and-down">
                
                {{--  @can('properties.index')
                <li><a href="{{ route('properties.index') }}"><strong>Propiedades</strong> </a></li>
                @endcan
                @can('clients.index')
                <li><a href="{{ route('clients.index') }}"><strong>Clientes</strong> </a></li>
                @endcan
                @can('users.index')
                <li><a href="{{ route('users.index') }}"><strong>Usuarios</strong> </a></li>
                @endcan
                @can('roles.index')
                <li><a href="{{ route('roles.index') }}"><strong>Roles y permisos</strong> </a></li>
                @endcan
                @can('stats.index')
                <li><a href="{{ route('stats.index') }}"><strong>Estadistica</strong> </a></li>
                @endcan    --}}
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-trigger" href="" data-target="dropdown1"><i class="material-icons right">arrow_drop_down</i>{{ Auth::user()->name }}</a></li>
            </ul>
          </div>
        </nav>

          <ul class="sidenav" id="mobile-demo">
                {{--  @can('properties.index')
                <li><a href="{{ route('properties.index') }}"><strong>Propiedades</strong> </a></li>
                @endcan
                @can('clients.index')
                <li><a href="{{ route('clients.index') }}"><strong>Clientes</strong> </a></li>
                @endcan
                @can('users.index')
                <li><a href="{{ route('users.index') }}"><strong>Usuarios</strong> </a></li>
                @endcan
                @can('roles.index')
                <li><a href="{{ route('roles.index') }}"><strong>Roles y permisos</strong> </a></li>
                @endcan
                @can('stats.index')
                <li><a href="{{ route('stats.index') }}"><strong>Estadistica</strong> </a></li>
                @endcan    --}}
  </ul>
    </header>
    @endguest

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>

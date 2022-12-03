<div class="sidebar" data-color="purple" data-background-color="lead" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/home" class="simple-text logo-normal">
        <img style=" width:80px" src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Escudo_de_Tingo_Mar%C3%ADa.png">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>


{{--AGREGAR MODULOS REPORTES--}}

        <div id="accordion">
            <li class="">
                <li class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link coloured-card-btn-img " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i><img style="width:25px" src="{{ asset('https://img.icons8.com/plasticine/100/000000/business-report.png') }}"></i>
                               <p>
                                   {{ ('CIUDADANO-REGISTRO') }}
                               </p>

                            </a>
                        </button>
                    </h5>
                </li>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="nav">
                            <li class="nav-item{{ $activePage == 'registros' ? ' active' : '' }}">
                                <a class="nav-link" href="{{route('registros.index')}}">
                                    <span class="sidebar-mini">REG.</span>
                                    <span class="sidebar-normal">{{ __('INCIDENCIA') }} </span>
                                </a>
                            </li>
                            <li class="nav-item{{ $activePage == '' ? ' active' : '' }}">
                                <a class="nav-link" href="{{route('registrosos.store')}}">
                                    <span class="sidebar-mini">ENV.</span>
                                    <span class="sidebar-normal"> {{ __('S.O.S') }} </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>


        {{--REPORTES POR EL ADMINISTRADOR--}}

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i><img style="width:25px" src="{{ asset('https://img.icons8.com/cute-clipart/64/000000/copybook.png') }}"></i>
                        <p>
                            {{ ('ADMIN-REPORTES') }}
                        </p>
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                        <div class="collapse show" id="laravelExample">
                            <ul class="nav">
                                <li class="nav-item{{ $activePage == 'incidencia' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{route('reportes.index')}}">
                                        <span class="sidebar-mini">REP.</span>
                                        <span class="sidebar-normal">{{ __('T. INCIDENCIA') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'sector' ? ' active' : '' }}">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> R. </span>
                                        <span class="sidebar-normal"> {{ __(' SECTORES') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'sector' ? ' active' : '' }}">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> R. </span>
                                        <span class="sidebar-normal"> {{ __(' PTS CRITICOS') }} </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                </div>
            </div>
        </div>




        <div class="card">
            <div class="card-header" id="">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#" aria-expanded="false" aria-controls="">
                        <i><img style="width:25px" src="{{ asset('https://img.icons8.com/bubbles/50/000000/admin-settings-male.png') }}"></i>
                        <p> {{ ('ADMIN USUARIO') }} </p>
                    </button>
                </h5>
            </div>
            <div class="collapse show" id="">
                <ul class="nav">
                            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    <i class="material-icons">content_paste</i>
                                    <p>Usuarios</p>
                                </a>
                            </li>
                    <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
                     <a class="nav-link" href="{{ route('permissions.index') }}">
                     <i class="material-icons">manage_accounts</i>
                     <p>{{ __('Permisos') }}</p>
                    </a>

                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <i class="material-icons">manage_accounts</i>
                        <p>{{ __('Roles ') }}</p>
                    </a>
                        </ul>

            </div>

        </div>


{{-- <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
            <p>Usuarios</p>
        </a>
      </li>--}}
     {{-- <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Post') }}</p>
        </a>
      </li>--}}
      {{--<li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
            <i class="material-icons">manage_accounts</i>
          <p>{{ __('Permisos') }}</p>
        </a>
      </li>--}}

        {{--MODULO ROLES--}}

     {{-- <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">manage_accounts</i>
            <p>{{ __('Roles ') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">admin_panel_settings</i>
          <p>{{ __('') }}</p>
        </a>
      </li>
--}}
    </ul>
  </div>
</div>

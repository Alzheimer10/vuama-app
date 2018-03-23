<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{config('bluebox.name')}}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                @if(!Auth::guest())
                <ul class="nav navbar-nav" id="notificaciones">
                    {{--NOTIFICACIONES Usuarios--}}
                    <!--<li class="dropdown">-->
                    <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tooltip-placement="bottom" uib-tooltip="Clientes">-->
                    <!--            <i class="fa fa-user"></i>-->
                    <!--            <span class="badge success">7</span>-->
                    <!--        </a>-->
                    <!--    <ul class="dropdown-menu" role="menu">-->
                    <!--        <li>-->
                    <!--            <a href="#">-->
                    <!--                <div class="notify">-->
                    <!--                    <i class="fa fa-3x fa-user-plus success"></i>-->
                    <!--                    <div class="notify-body">-->
                    <!--                        <span>4 nuevos Usuarios</span>-->
                    <!--                        <span>Hace 4 min.</span>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--        </li>-->
                            <!--VER MAS-->
                    <!--        <li class="divider"></li>-->
                    <!--        <li class="text-center">-->
                    <!--            <a href="#">-->
                    <!--                Ver todas <i class="fa fa-chevron-right fa-fw"></i>-->
                    <!--            </a>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                    {{--NOTIFICACIONES VENTAS--}}
                    <!--<li class="dropdown">-->
                    <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tooltip-placement="bottom" uib-tooltip="Ventas">-->
                    <!--            <i class="fa fa-shopping-cart"></i>-->
                    <!--            <span class="badge primary">3</span>-->
                    <!--        </a>-->
                    <!--    <ul class="dropdown-menu" role="menu">-->
                    <!--        <li>-->
                    <!--            <a href="#">-->
                    <!--                <div class="notify">-->
                    <!--                    <i class="fa fa-3x fa-cart-plus success"></i>-->
                    <!--                    <div class="notify-body">-->
                    <!--                        <span>Nueva Venta</span>-->
                    <!--                        <span>Hace 4 min.</span>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--        </li>-->
                            <!--VER MAS-->
                    <!--        <li class="divider"></li>-->
                    <!--        <li class="text-center">-->
                    <!--            <a href="#">-->
                    <!--                Ver todas <i class="fa fa-chevron-right fa-fw"></i>-->
                    <!--            </a>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</li>-->

                    {{--NOTIFICACIONES Inventario--}}
                    <!--<li class="dropdown">-->
                    <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tooltip-placement="bottom" uib-tooltip="Productos">-->
                    <!--            <i class="fa fa-archive"></i>-->
                    <!--            <span class="badge warning">2</span>-->
                    <!--        </a>-->
                    <!--    <ul class="dropdown-menu" role="menu">-->
                    <!--        <li>-->
                    <!--            <a href="#">-->
                    <!--                <div class="notify">-->
                    <!--                    <i class="fa fa-3x fa-exclamation-triangle info"></i>-->
                    <!--                    <div class="notify-body">-->
                    <!--                        <span><strong>2</strong> Productos por Agotarse</span>-->
                    <!--                        <span>Hace 4 min.</span>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--        </li>-->
                            <!--VER MAS-->
                    <!--        <li class="divider"></li>-->
                    <!--        <li class="text-center">-->
                    <!--            <a href="#">-->
                    <!--                Ver todas <i class="fa fa-chevron-right fa-fw"></i>-->
                    <!--            </a>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</li>-->

                    {{--NOTIFICACIONES Soporte--}}
                    <!--<li class="dropdown">-->
                    <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tooltip-placement="bottom" uib-tooltip="Soporte">-->
                    <!--            <i class="fa fa-life-ring"></i>-->
                    <!--            <span class="badge danger">7</span>-->
                    <!--        </a>-->
                    <!--    <ul class="dropdown-menu" role="menu">-->
                    <!--        <li>-->
                    <!--            <a href="#">-->
                    <!--                <div class="notify">-->
                    <!--                    <i class="fa fa-3x fa-ticket warning"></i>-->
                    <!--                    <div class="notify-body">-->
                    <!--                        <span>Nuevo ticket de Soporte</span>-->
                    <!--                        <span>Hace 4 min.</span>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--        </li>-->
                            <!--VER MAS-->
                    <!--        <li class="divider"></li>-->
                    <!--        <li class="text-center">-->
                    <!--            <a href="#">-->
                    <!--                Ver todas <i class="fa fa-chevron-right fa-fw"></i>-->
                    <!--            </a>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                </ul>
                @endif
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Ingresar</a></li>
                        <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                    @else
                        <li class="dropdown" id="opciones">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{Auth::user()->admin->photo ? Auth::user()->admin->photo :asset('images/logo-xs.png')}}" class="img-circle topbar-img">
                                <div><span class="text">{{ Auth::user()->fullname }}</span><span class="fa fa-chevron-down"></span></div>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{url('/profile')}}" id="bar-pefil">
                                        <div class="topbar-perfil">
                                            <!--<img src="{{Auth::user()->admin->photo ? Auth::user()->admin->photo :asset('images/logo-xs.png')}}" class="img-circle">-->
                                            <strong>{{Auth::user()->fullname}}</strong>
                                            <small>Ultima actividad:</small>
                                            <span>{{ Carbon\Carbon::now(config('app.timezone'))->format('h:i a d-m-Y ') }}</span>
                                        </div>
                                    </a>
                                </li>@access('configuration')
                                <li class="divider"></li>
                                <li>
                                    <a href="{{url('/configurations')}}"><i class="fa fa-fw fa-cogs"></i> Configuraciones</a>
                                </li>@endaccess
                                <li class="divider"></li>
                                <li>
                                    <a href="{{url('/help')}}"><i class="fa fa-fw fa-question-circle"></i> Ayuda</a>
                                </li>
                                <li>
                                    <a href="{{url('/about')}}"><i class="fa fa-fw fa-info"></i> About us</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off"></i> Salir
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

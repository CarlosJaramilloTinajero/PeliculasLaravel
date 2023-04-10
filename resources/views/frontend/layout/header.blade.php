<header>
    <div id="MenuInicio" class="menuInicio fixed-top"></div>
    <nav class="navbar fixed-top">
        <div class="container-fluid">

            <!-- Visible solo el pantallas mas chicas que las lg -->
            <div class="d-lg-none">
                <a class="barraInicio2 boton5" href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                    </svg></a>

                <a class="barraInicio2 boton5" href="{{ route('extrasPeliculas') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-film" viewBox="0 0 16 16">
                        <path
                            d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                    </svg></a>

                <a class="barraInicio2 boton5" href="{{ route('Series') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-tv-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
                    </svg>
                    <strong></strong></a>
                @auth
                    <a class="barraInicio2 boton5" href="{{ route('Lista') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg></a>
                @endauth
                <a class="barraInicio2 boton5" href="{{ route('add.omba') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg></a>
            </div>
            @guest
                <a class="barraInicio2 boton5" href="{{ route('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd"
                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg></a>
            </div>
        @endguest



        <!-- Visible solo el pantallas mas grandes que las lg -->
        <div class="d-none d-lg-block">

            <a class="barraInicio  boton5" href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                    class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path
                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                </svg>
                <strong>INICIO</strong></a>

            <a class="barraInicio boton5" href="{{ route('extrasPeliculas') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                    class="bi bi-film" viewBox="0 0 16 16">
                    <path
                        d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                </svg>
                <strong>PELICULAS</strong>
            </a>

            <a class="barraInicio boton5" href="{{ route('Series') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                    class="bi bi-tv-fill" viewBox="0 0 16 16">
                    <path
                        d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
                </svg>
                <strong>SERIES</strong></a>

            @auth
                <a class="barraInicio boton5" href="{{ route('Lista') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                        class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    <strong>LISTA</strong></a>
            @endauth
            <a class="barraInicio boton5" href="{{ route('add.omba') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg>
                <strong>Agruegar peliculas</strong></a>
            @guest
                <a class="barraInicio boton5" href="{{ route('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                        class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd"
                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                    <strong>INICIAR SESION</strong></a>
            @endguest


        </div>


        <div class="popover__wrapper">
            <div>

                @auth
                    <?php
                    $aux = Str::limit(explode(' ', auth()->user()->name)[0], 7);
                    ?>
                    @if (auth()->user()->imgUser == null)
                        <a class="popover__title d-none d-sm-block"><img class="imagenPerfilNav"
                                src="{{ asset('Imagenes/guest.png') }}" alt=""> {{ $aux }}</a>
                        <a class="popover__title d-sm-none"><img class="imagenPerfilNav"
                                src="{{ asset('Imagenes/guest.png') }}" alt=""></a>
                    @else
                        <a class="popover__title d-none d-sm-block"><img class="imagenPerfilNav"
                                src="{{ asset(auth()->user()->imgUser) }}" alt=""> {{ $aux }}</a>
                        <a class="popover__title d-sm-none"><img class="imagenPerfilNav"
                                src="{{ asset(auth()->user()->imgUser) }}" alt=""></a>
                    @endif
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="popover__title d-none d-sm-block"><img class="imagenPerfilNav"
                            src="{{ asset('Imagenes/guest.png') }}" alt=""> Inicia
                        sesion</a>
                    <a href="{{ route('login') }}" class="popover__title d-sm-none"><img class="imagenPerfilNav"
                            src="{{ asset('Imagenes/guest.png') }}" alt=""></a>
                @endguest

            </div>

            @auth
                <div class="popover__content d-none d-sm-block">
                    <p class="popover__message">
                        @if (auth()->user()->imgUser == null)
                            <img class="imagenPerfil" src="{{ asset('Imagenes/guest.png') }}" alt="">
                        @else
                            <img class="imagenPerfil" src="{{ asset(auth()->user()->imgUser) }}" alt="">
                        @endif
                        <small>Hola {{ $aux }}</small>
                    </p>
                    <hr class="hrClass">
                    <p class="botonesMenuCuenta"><a href="{{ route('cuenta') }}">Cuenta</a></p>
                    <p class="botonesMenuCuenta"><a href="{{ route('Lista') }}">Lista</a></p>
                    @if (auth()->user()->name == 'admin')
                        <hr class="hrClass">

                        <div class="dropdown">
                            <a style="border: none; margin-top: -6px; margin-left: 10px;"
                                class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Peliculas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('pelicula.create') }}">Agregar
                                        pelicula</a></li>
                                <li><a class="dropdown-item" href="{{ route('pelicula.index') }}">Peliculas
                                        agregadas</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <a style="border: none; margin-top: -6px; margin-left: 10px;"
                                class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Series
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('create.series') }}">Agregar serie</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('seriesAgregadas') }}">Series
                                        agregadas</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <a style="border: none; margin-top: -6px; margin-left: 10px;"
                                class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('categoria.create') }}">Agregar
                                        categoria</a></li>
                                <li><a class="dropdown-item" href="{{ route('categoria.index') }}">Categorias
                                        agregadas</a></li>
                            </ul>
                        </div>
                    @endif

                    <hr class="hrClass">
                    <p class="botonesMenuCuenta"><a href="{{ route('logout') }}">Salir</a></p>
                </div>

                <div class="popover__content2 d-sm-none">
                    <p class="popover__message">
                        @if (auth()->user()->imgUser == null)
                            <img class="imagenPerfil" src="{{ asset('Imagenes/guest.png') }}" alt="">
                        @else
                            <img class="imagenPerfil" src="{{ asset(auth()->user()->imgUser) }}" alt="">
                        @endif
                        <small>Hola {{ $aux }}</small>
                    </p>
                    <hr class="hrClass">
                    <p class="botonesMenuCuenta"><a href="{{ route('cuenta') }}">Cuenta</a></p>
                    <p class="botonesMenuCuenta"><a href="{{ route('Lista') }}">Lista</a></p>
                    @if (auth()->user()->name == 'admin')
                        <hr class="hrClass">

                        <div class="dropdown">
                            <a style="border: none; margin-top: -6px; margin-left: 10px;"
                                class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Peliculas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('pelicula.create') }}">Agregar
                                        pelicula</a></li>
                                <li><a class="dropdown-item" href="{{ route('pelicula.index') }}">Peliculas
                                        agregadas</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <a style="border: none; margin-top: -6px; margin-left: 10px;"
                                class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Series
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('create.series') }}">Agregar serie</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('seriesAgregadas') }}">Series
                                        agregadas</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <a style="border: none; margin-top: -6px; margin-left: 10px;"
                                class="btn botonesMenuCuentaDrop dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('categoria.create') }}">Agregar
                                        categoria</a></li>
                                <li><a class="dropdown-item" href="{{ route('categoria.index') }}">Categorias
                                        agregadas</a></li>
                            </ul>
                        </div>
                    @endif

                    <hr class="hrClass">
                    <p class="botonesMenuCuenta"><a href="{{ route('logout') }}">Salir</a></p>
                </div>
            @endauth
        </div>
    </nav>
</header>

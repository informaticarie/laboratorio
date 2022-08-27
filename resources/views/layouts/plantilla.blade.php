<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    
    <link rel="icon" href="img/Logos/logo2.png" />

</head>

<body>

    <div class="container-fluid" id="app"
        style="padding-right: var(--bs-gutter-x, 0rem);padding-left: var(--bs-gutter-x, 0rem);">



        <section id="hero" style="background-color: #303066; color:white">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-4">



                        <a href="/"
                            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>

                        <ul class="nav col-12 col-auto my-2 justify-content-center my-md-0 text-small">
                            <li>
                                <a href="{{ url('/') }}" class="nav-link ">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="{{ url('/') }}"></use>
                                    </svg>
                                    <img src="{{ asset('img/Logos/logo1.png') }}" class="img-thumbnail">

                                </a>
                            </li>


                        </ul>


                    </div>

                    <div class="col-8" style="font-weight: bold;">


                        <div class="container">

                            <a href="/"
                                class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                                <svg class="bi me-2" width="40" height="32" role="img"
                                    aria-label="Bootstrap">
                                    <use xlink:href="#bootstrap"></use>
                                </svg>
                            </a>

                            <ul class="nav col-12 col-auto my-2 justify-content-end my-md-0 text-small">


                                <li style="margin-left: 5px;margin-right: 5px;">
                                    <a id="titulo0" href="{{ url('/') }}"
                                        class="Cambiando nav-link text-white " align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('/') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-house-user fa-xl"></i><br>Inicio
                                    </a>
                                </li>
                                <li style="margin-left: 5px;margin-right: 5px;">
                                    <a id="titulo1" href="{{ url('Nosotros') }}" class="Cambiando nav-link text-white"
                                        align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('Nosotros') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-people-group fa-xl"></i><br>
                                        Nosotros
                                    </a>
                                </li>
                                <li style="margin-left: 5px;margin-right: 5px;">
                                    <a id="titulo2" href="{{ url('Paquetes') }}"
                                        class=" Cambiando nav-link text-white" align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('Paquetes') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-notes-medical fa-xl"></i><br>
                                        Paquetes
                                    </a>
                                </li>
                                <li style="margin-left: 5px;margin-right: 5px;">
                                    <a id="titulo3" href="{{ url('Covid') }}"
                                        class=" Cambiando nav-link text-white" align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('Covid') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-shield-virus fa-xl"></i><br>
                                        Covid-19
                                    </a>
                                </li>
                                <li style="margin-left: 5px;margin-right: 5px;">
                                    <a id="titulo4" href="{{ url('Contacto') }}"
                                        class="Cambiando nav-link text-white" align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('Contacto') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-map-location-dot fa-xl"></i><br>
                                        Contacto
                                    </a>
                                </li>

                            </ul>

                        </div>



                    </div>

                </div>
            </div>
            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
                    </use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
                    </use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9" fill="#fff"> </use>
                </g>
            </svg>
        </section>



        <div class="row" style="margin-right: 0px;">
            <div class="col-12">

                @yield('contenido')
            </div>

        </div>
        <div class="row" style="margin-top: 3vw; margin-right: 0px;">



            <div class="row alert " style="background-color: #303066; color:white; margin-bottom: 0px;"
                align="center">
                <div class="col-6">
                    <a class="btn btn-primary" href="#">Aviso de Privacidad</a>

                </div>
                <div class="col-6">
                    <a class="btn btn-primary" href="#">Términos y Condiciones</a>
                </div>
            </div>

            <div class="text-center">

                <a class="text-reset fw-bold" href="#">Todos los derechos reservados ©Laboratorio Clínico
                    ProMédica </a>
            </div>




        </div>
    </div>
    <div class="whats">
        <a href="https://api.whatsapp.com/send?phone=527711585514&text=Hola, Necesito más informacion!"
            target="_blank"><i class="fa-brands fa-whatsapp fa-2xl"></i><br>¿Podemos Ayudarte?</a>
    </div>


    @stack('scripts')
</body>

</html>

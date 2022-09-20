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
    
    <link rel="icon" href="img/Logos/logo2.png"  />

</head>

<body>

    <div class="container-fluid" id="app"
        style="padding-right: var(--bs-gutter-x, 0rem);padding-left: var(--bs-gutter-x, 0rem);">



        <section id="hero" style="background-color: #303066; color:white">
            <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
                <div class="row justify-content-between">
                    <div class="col-4" style="background-color: white">

                        <ul class="nav col-12 col-auto  justify-content-center  text-small">
                            <li>
                                <a href="{{ url('/') }}" class="nav-link ">
                                    <img src="{{ asset('img/Logos/logo1.png') }}" class="diseLogo" style="background-color: white;"  class="img-fluid">

                                </a>
                            </li>


                        </ul>


                    </div>

                    <div class="col-8 diseDiv" style="font-weight: bold;">


                        <div class="container">


                            <ul class="nav col-12 col-auto my-2 justify-content-end my-md-0 text-small">


                                <li class="tamañoIcon">
                                    <a id="titulo0" href="{{ url('/') }}"
                                        class="Cambiando nav-link text-white " align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('/') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-house-user fa-xl"></i><br>Inicio
                                    </a>
                                </li>
                                <li class="tamañoIcon">
                                    <a id="titulo1" href="{{ url('Nosotros') }}" class="Cambiando nav-link text-white"
                                        align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('Nosotros') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-people-group fa-xl"></i><br>
                                        Nosotros
                                    </a>
                                </li>
                                <li class="tamañoIcon">
                                    <a id="titulo2" href="{{ url('Paquetes') }}"
                                        class=" Cambiando nav-link text-white" align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('Paquetes') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-notes-medical fa-xl"></i><br>
                                        Paquetes
                                    </a>
                                </li>
                                <!--<li style="margin-left: 5px;margin-right: 5px;">
                                    <a id="titulo3" href="{{ url('Covid') }}"
                                        class=" Cambiando nav-link text-white" align="center">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="{{ url('Covid') }}"></use>
                                        </svg>
                                        <i class="fa-solid fa-shield-virus fa-xl"></i><br>
                                        Covid-19
                                    </a>
                                </li>-->
                                <li class="tamañoIcon">
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
        <div class="row" style="margin-top: 3vw; margin-right: 0px;padding-right: 0px;padding-left: 0px;">

            



            <div class="row alert " style="background-color: #303066; color:white; margin-bottom: 0px;" align="center">
                <div class="container">

                    <div class="row">
                       

                        <div class="col-6">
                            <div class="widget">

                                <img class="card-img-top diseLogo"   style="width:45%;
                                height: 45%; background-color: white;opacity: 0.5;" src='img/pacal.png' alt="...">
                               
                            </div> 
                           
                        </div> 
        
                       
        
                        <div class="col-6">
                            <div class="widget" style="text-align: justify">
                                <h3>Ubicación</h3>
                                <address> Av Solidaridad 218, Parque de Poblamiento,
                                    42032 Pachuca de Soto, Hgo.</address>
                                <ul class="list-unstyled links ">
                                    <li>Horario <a>lunes a viernes:
                                        07:00 a 19:00.
                                        Sábado:
                                        07:30 a 15:30</a></li>
                                    <li>Telefonos:<a>771 158 5514 </a>,<a> 771 165 0424</a></li>
                                    <li>Email:<a>info@mydomain.com</a></li>
                                </ul>
                            </div> <!-- /.widget -->
                        </div> <!-- /.col-lg-3 -->
        
                    </div> <!-- /.row -->
        
                    
                </div>
                
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
            target="_blank"><i class="fa-brands fa-whatsapp fa-2xl"></i><span style="font-size:1.2vw"><br>¡COTIZA <br>AHORA!</span></a>
    </div>


    @stack('scripts')
</body>

</html>

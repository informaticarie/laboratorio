@extends('layouts.plantilla')

@section('titulo', 'Paquetes')

@section('contenido')

    <div class="container-fluid">

        <div class="row mb-2">
            <div class="col-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-2 d-flex flex-column position-static">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119882.02054372206!2d-98.90519463750003!3d20.1209795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d10b6941c556cd%3A0x9c66543aed4c8771!2sLaboratorio%20ProM%C3%A9dica!5e0!3m2!1ses-419!2smx!4v1658899639317!5m2!1ses-419!2smx"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-auto d-none d-lg-block" align="center">
                        <div class="row">

                            <div class="col-3" style="margin-top: 10vw;font-size:5vw; background-color:#1dd61d;color:white">
                                <i class="fa-solid fa-angles-left"></i>
                            </div>
                            <div class="col-9" style="margin-top: 10vw; background-color:#1dd61d;color:white;">
                                <h1 class="mb-0">Visitanos</h1>
                                <div class="mb-1 text-muted">Nos Ubicamos en : </div>
                                <p class="mb-auto" style="font-size:1vw">42032, Av Solidaridad 218, Parque de Poblamiento,
                                    42032 Pachuca de Soto, Hgo.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row mb-2">
            <div class="col-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-2 d-flex flex-column position-static" align="center">
                        <div class="row">

                            <div class="col-9" style="margin-top: 10vw; background-color:#1dd61d;color:white;">
                                <h1 class="mb-0">Visitanos</h1>
                                <div class="mb-1 text-muted">Nos Ubicamos en : </div>
                                <p class="mb-auto" style="font-size:1vw">42032, Av Solidaridad 218, Parque de Poblamiento,
                                    42032 Pachuca de Soto, Hgo.
                                </p>

                            </div>
                            <div class="col-3" style="margin-top: 10vw;font-size:5vw; background-color:#1dd61d;color:white">
                                <i class="fa-solid fa-angles-left"></i>
                            </div>
                        </div>


                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <a href="#!"><img class="img-fluid rounded mb-0" src="{{ asset('img/contacto.jpg') }}"
                                alt="..."></a>
                    </div>
                </div>
            </div>

        </div>


    @endsection
    @push('scripts')
    <script>
        
         document.getElementById("titulo3").classList.add('elegido');
    </script>
    @endpush
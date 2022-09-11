@extends('layouts.plantilla')

@section('titulo', 'Paquetes')

@section('contenido')

    <div class="container">



        <section class="py-5">

            <div class="container  px-5 mt-5">
                <img src="img/Botones/Paquetes.png" class="img-fluid" style="width: 30%;margin-bottom: 10px;">

                <div class="col-12" align="right">
                    <button class="carousel-control-prev2" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next2" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">


                            {!! $agregar !!}


                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <img src="img/Botones/Estudios.png" class="img-fluid" style="width: 30%;margin-bottom: 10px;">
                <div class="col-12" align="right">
                    <button class="carousel-control-prev2" type="button" data-bs-target="#CarruselEstudios"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next2" type="button" data-bs-target="#CarruselEstudios"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="col-12">
                    <div id="CarruselEstudios" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">


                            {!! $agregarEstudios !!}


                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div>
            @foreach ($TodosPaquetes1 as $item)
                <div class="modal fade" id={{ 'Modal' . $item->idPaquetes }} tabindex="-1"
                    aria-labelledby={{ 'Modal' . $item->idPaquetes . 'Label' }} aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #003094; color:white">
                                <h5 class="modal-title" id={{ 'Modal' . $item->idPaquetes . 'Label' }}>
                                    <i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp&nbsp{{ $item->NombrePaquetes }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <b>¿Qué contiene?</b>

                                            @foreach (explode('|', $item->ContienePaquetes) as $index)
                                                <li>{{ $index }}</li>
                                            @endforeach

                                        </div>
                                        <div class="col-5 ms-auto">
                                            <label style="color:red"><b>PRECIO PROMOCIONAL <span style="font-size: 2vw">
                                                        ${{ $item->CostoPaquetes }}</span></b></label>
                                            <p style="font-size: 0.7vw"> PROMOCIONES VALIDAS 31 DE DICIEMBRE 2022</p>
                                            <br>


                                            <label>No requiere previa cita en los siguientes horarios:<label>
                                                    <label>lunes a viernes 07:00 a 19:00. Sábado 07:30 a
                                                        15:30<label>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Indicaciones:</b>

                                            @foreach (explode('|', $item->ContienePaquetes) as $index)
                                                <li>{{ $index }}</li>
                                            @endforeach
                                            <br>
                                            <label>{{ $item->DescripcionPaquetes }}</label>




                                        </div>
                                        <div class="col-5 ms-auto">
                                            <br><br>
                                            <button class="btn2 btn2-2 btn2-sep icon-cart"><b>Contactar Para
                                                    Solicitar</b></button>
                                        </div>


                                    </div>
                                    <br>
                                    <div class="row" align="center">
                                        <div class="col-12">

                                            <label>Consulta a tu Médico.</label><br>
                                            <label> CON SERVICIO A DOMICILIO SIN COSTO EXTRA DENTRO DE LA CIUDAD DE PACHUCA
                                                HGO.</label>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




    </div>

@endsection

@push('scripts')
    <script>
        document.getElementById("titulo2").classList.add('elegido');

        function opn(x) {
            //console.log(x);
            $('#Modal' + x).modal('show')

        }
    </script>
@endpush

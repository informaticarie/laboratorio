@extends('layouts.plantilla')

@section('titulo', 'Paquetes')

@section('contenido')

    <div class="container">

        <br>
        <br>
        <br>
        <div class="iconfooter" >
            <span style="font-size:1.8vw">ESTAS SON ALGUNAS DE LAS AREAS CON LAS QUE LABORATORIO PROMEDICA  TAMBIEN ATIENDE: </span>
            <br><br>
            <div class="row">
                <div class="col-1"></div>
                <div  class="text-center col-2 ">
                    <ul ><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/Qui.svg" alt="" loading="lazy">
                        <li><label    class="label-mini-icon">Química clínica</label>
                        </li>
                    </ul>
                </div>
                <div   class="text-center col-2  ">
                    <ul><img  style="background-color: #f6f6f7; width:5vw" src="img/Logos/Hema.svg"  loading="lazy"
                            class="min-icon">
                        <li><label  class="label-mini-icon">Hematología</label></li>
                    </ul>
                </div>
                <div   class="text-center col-2  ">
                    <ul><img  style="background-color: #f6f6f7; width:5vw"  src="img/Logos/Bio.svg" alt="" loading="lazy" >
                        <li><label  class="label-mini-icon">Biología  <br> molecular</label></li>
                    </ul>
                </div>
                <div   class="text-center col-2  ">
                    <ul><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/Cit.svg" alt="" loading="lazy">
                        <li ><label  class="label-mini-icon">Citogenética</label></li>
                    </ul>
                </div>
                <div  class="text-center col-2  ">
                    <ul><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/His.svg" alt="" loading="lazy">
                        <li><label class="label-mini-icon">Histopatología</label></li>
                    </ul>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="text-center col-2 ">
                    <ul><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/Inm.svg" alt="" loading="lazy">
                        <li><label    class="label-mini-icon">Inmunología</label>
                        </li>
                    </ul>
                </div>
                <div class="text-center col-2  ">
                    <ul><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/Inf.svg" alt="" loading="lazy">
                        <li><label    class="label-mini-icon">Infectología y Urianálisis</label>
                        </li>
                    </ul>
                </div>
                <div class="text-center col-2  ">
                    <ul><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/Qui.svg" alt="" loading="lazy">
                        <li><label    class="label-mini-icon">Inmunoquímica</label>
                        </li>
                    </ul>
                </div>
                <div class="text-center col-2  ">
                    <ul><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/Micro.svg" alt="" loading="lazy">
                        <li><label   
                                class="label-mini-icon">Microbiología y Parasitología</label></li>
                    </ul>
                </div>
                <div class="text-center col-2 ">
                    <ul><img style="background-color: #f6f6f7; width:5vw" src="img/Logos/Toxi.svg" alt="" loading="lazy">
                        <li><label   
                                class="label-mini-icon">Toxicología </label></li>
                    </ul>
                </div>
                <div class="col-1"></div>
            </div>
        </div>


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
            <div class="row" style="margin-top: 4vw;">
                <div class="iconfooter">
                    <div class="container">
                        <span style="font-size:1vw">GRACIAS A LOS ANALISIS CLINICOS EL MEDICO PUEDE EVALUAR EL ESTADO DE
                            SALUD Y DIAGNOSTICAR ALGUNAS ENFERMEDADES DE MANERA RUTINARIA O ANTE ALGUNOS SINTOMAS QUE
                            PODAMOS PRESENTAR.</span>
                        <br><br>
                        <div class="row d-flex justify-content-center">
                            <div class="col-4  d-flex flex-column align-items-center mb-5 mb-lg-0">
                                <div class="card card-icon border-0 mb-3">
                                    <img style="background-color: #f6f6f7; width:5vw" src="img/Logos/ambulancia.svg"
                                        alt="" loading="lazy">
                                </div>
                                <h4 class="text-center">Tomas de muestra a domicilio</h4>
                            </div>
                            <div class="col-4  d-flex flex-column align-items-center">
                                <div class="card card-icon border-0 mb-3">
                                    <img style="background-color: #f6f6f7; width:5vw" src="img/Logos/reloj.svg"
                                        alt="" loading="lazy">
                                </div>
                                <h4 class="text-center">Lunes a Viernes 07:00 a 19:00 y Sábados 7:30 a 15:00</h4>
                            </div>

                            <div class="col-4   d-flex flex-column align-items-center">
                                <div class="card card-icon border-0 mb-3">
                                    <img style="background-color: #f6f6f7; width:5vw" src="img/Logos/resultado.svg"
                                        alt="" loading="lazy">
                                </div>
                                <h4 class="text-center">Entrega o Envio de Resultados en PDF</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-4 px-lg-5 mt-5">
                <img src="img/Botones/Perfiles.png" class="img-fluid" style="width: 30%;margin-bottom: 10px;">
                <div class="col-12" align="right">
                    <button class="carousel-control-prev2" type="button" data-bs-target="#CarruselPerfiles"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next2" type="button" data-bs-target="#CarruselPerfiles"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="col-12">
                    <div id="CarruselPerfiles" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">


                            {!! $agregarPerfiles !!}


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
                                    <i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp&nbsp{{ $item->NombrePaquetes }}
                                </h5>
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
                                            <label style="color:red"><b>PRECIO PROMOCIÓN <span style="font-size: 2vw">
                                                        ${{ $item->CostoPaquetes }}</span></b></label>
                                            <p style="font-size: 0.7vw"> PROMOCIONES VALIDAS 31 DE DICIEMBRE 2022</p>
                                            <br>


                                            <label>No requiere previa cita <label>
                                                    <label>Horario:Lunes a Viernes 07:00 a 19:00 y Sábados 7:30 a 15:00<label>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Indicaciones:</b><br>

                                            @foreach (explode('|', $item->IndicacionesPaquetes) as $index)
                                                <label>{{ $index }}</label>
                                            @endforeach
                                            <br><br>
                                            <label><b>{{ $item->DescripcionPaquetes }}</b></label>




                                        </div>
                                        <div class="col-5 ms-auto">
                                            <br><br>
                                            <button class="btn2 btn2-2 btn2-sep icon-cart"
                                                onclick='redirect({{ "\"" . $item->NombrePaquetes . "\"" }})'><b>Contactar
                                                    Para
                                                    Solicitar</b></button>
                                        </div>


                                    </div>
                                    <br>
                                    <div class="row" align="center">
                                        <div class="col-12">

                                            <label><b>Consulta a tu Médico.</b></label><br>
                                            <label><b>CONTAMOS CON SERVICIO A DOMICILIO SIN COSTO EXTRA DENTRO DE LA CIUDAD DE
                                                    PACHUCA
                                                    HGO.</b></label>


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

        <div>
            @foreach ($TodosPerfiles1 as $item)
                <div class="modal fade" id={{ 'ModalPerfil' . $item->idPerfiles }} tabindex="-1"
                    aria-labelledby={{ 'ModalPerfil' . $item->idPerfiles . 'Label' }} aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #003094; color:white">
                                <h5 class="modal-title" id={{ 'ModalPerfil' . $item->idPerfiles . 'Label' }}>
                                    <i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp&nbsp{{ $item->NombrePerfiles }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <b>¿Qué contiene?</b>

                                            @foreach (explode('|', $item->ContienePerfiles) as $index)
                                                <li>{{ $index }}</li>
                                            @endforeach

                                        </div>
                                        <div class="col-5 ms-auto">
                                            <label style="color:red"><b>PRECIO PROMOCIÓN <span style="font-size: 2vw">
                                                        ${{ $item->PrecioPerfiles }}</span></b></label>
                                            <p style="font-size: 0.7vw"> PROMOCIONES VALIDAS 31 DE DICIEMBRE 2022</p>
                                            <br>


                                            <label>No requiere previa cita<label>
                                                    <label>Horario:Lunes a Viernes 07:00 a 19:00 y Sábados 7:30 a 15:00<label>

                                                            <br><br>
                                                            <button class="btn2 btn2-2 btn2-sep icon-cart"
                                                                onclick='redirect({{ "\"" . $item->NombrePerfiles . "\"" }})'><b>Contactar
                                                                    Para Solicitar</b></button>


                                        </div>
                                    </div>

                                    <br>
                                    <div class="row" align="center">
                                        <div class="col-12">

                                            <label><b>Consulta a tu Médico.</b></label><br>
                                            <label><b>CONTAMOS CON SERVICIO A DOMICILIO SIN COSTO EXTRA DENTRO DE LA CIUDAD DE
                                                    PACHUCA
                                                    HGO.</b></label>


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
            console.log(x);
            $('#Modal' + x).modal('show')

        }

        function redirect(x) {

            var url = "https://api.whatsapp.com/send?phone=527711585514&text=Hola Solicito el Paquete " + x;
            window.open(url, "_blank");
        }
    </script>
@endpush

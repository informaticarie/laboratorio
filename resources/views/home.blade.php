@extends('layouts.plantilla')

@section('titulo', 'ProMédica')

@section('contenido')


    <div class="container" style="padding-right: 0px;padding-left: 0px;">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 2"
                    class=""></button>



            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="25%" src="img/Banners/Banner1.jpeg">
                </div>
                <div class="carousel-item ">
                    <img class="bd-placeholder-img" width="100%" height="25%" src="img/Banners/Banner2.jpeg">
                </div>

                <div class="carousel-item ">
                    <img class="bd-placeholder-img" width="100%" height="25%" src="img/Banners/Banner3.jpeg">
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <div class="container">

        <div class="row" style="margin-top: 4vw;">
            <div class="iconfooter">
                <div class="container">
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
                                <img style="background-color: #f6f6f7; width:5vw" src="img/Logos/reloj.svg" alt=""
                                    loading="lazy">
                            </div>
                            <h5 class="text-center">Lunes a Viernes 07:00 a 19:00h Sábados 7:30 a 15:00h</h5>
                        </div>

                        <div class="col-4   d-flex flex-column align-items-center">
                            

                            <div class="row">
                                <div class="col-4  d-flex flex-column align-items-center " >
                                    <img style="background-color: #f6f6f7; width:5vw" src="img/Logos/whats.svg"
                                        alt="" loading="lazy">whatsapp
                                </div>
                                <div class="col-4  d-flex flex-column align-items-center " style="padding-left:2.4vw;">
                                    <img style="background-color: #f6f6f7; width:5vw" src="img/Logos/resultado.svg"
                                        alt="" loading="lazy">Impresos
                                </div>
                                <div class="col-4  d-flex flex-column align-items-center" style="padding-left:2.3vw">
                                    <img style="background-color: #f6f6f7; width:5vw" src="img/Logos/email.svg"
                                        alt="" loading="lazy">Correo
                                </div>
                            </div>
                            <h4 class="text-center">Entrega de resultados </h4>




                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 4vw;">

            <div class="col-8">

                <img src="img/Botones/Covid.png" class="img-fluid" style="width: 40%;margin-bottom: 10px;">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">


                                {!! $agregarCovi !!}


                            </div>
                        </div>
                    </div>



                </div>

                <img src="img/Botones/Promociones2.gif" class="img-fluid" style="width: 40%;margin-bottom: 10px;">
                <div class="row justify-content-between">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">


                            {!! $agregaPaque !!}


                        </div>
                    </div>



                </div>


            </div>

            <div class="col-4">
                <img src="img/Botones/Redes.gif" class="img-fluid" style="margin-bottom: 10px;">
                <div class="card mb-4" style="border : 0">
                    <div data-href="https://facebook.com/LaboratorioPromedica.Pachuca/" data-tabs="timeline"
                        data-width="300" data-height="500" data-small-header="true" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true" class="fb-page fb_iframe_widget"
                        fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=113869198637480&amp;container_width=478&amp;height=500&amp;hide_cover=false&amp;href=https%3A%2F%2Ffacebook.com%2FLaboratorioPromedica.Pachuca%2F&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=300">
                        <span style="vertical-align: bottom; width: 300px; height: 500px;"><iframe name="f2dc68ae2f62744"
                                width="300px" height="500px" data-testid="fb:page Facebook Social Plugin"
                                title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                src="https://www.facebook.com/v14.0/plugins/page.php?adapt_container_width=true&amp;app_id=113869198637480&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2e4a7ea84841a4%26domain%3Ddevelopers.facebook.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Ff262eb2dbe60b0c%26relation%3Dparent.parent&amp;container_width=478&amp;height=500&amp;hide_cover=false&amp;href=https%3A%2F%2Ffacebook.com%2FLaboratorioPromedica.Pachuca%2F&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=300"
                                style="border: none; visibility: visible; width: 300px; height: 500px;"
                                class=""></iframe></span>
                    </div>
                </div>

            </div>
        </div>

        <div>
            @foreach ($TodosPaquetes1 as $item)
                <div class="modal fade" id={{ 'Modal' . $item->idPaquetes }} tabindex="-1"
                    aria-labelledby={{ 'Modal' . $item->idPaquetes . 'Label' }} aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #003094; color:white">
                                <h5 class="modal-title" id={{ 'Modal' . $item->idPaquetes . 'Label' }}>
                                    <i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp&nbsp {{ $item->NombrePaquetes }}
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
                                            <p style="font-size: 0.7vw">Promoción válida hasta el 31 de diciembre 2022</p>
                                            <br>


                                            <label>No requiere previa cita<label>
                                                    <label>Horario Lunes a Viernes 07:00 a 19:00h Sábados 7:30 a
                                                        15:00h<label>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Indicaciones:</b><br>

                                            @foreach (explode('|', $item->IndicacionesPaquetes) as $index)
                                                <label>{{ $index }}</label><br>
                                            @endforeach
                                            <br><br>
                                            <label><b>{{ $item->DescripcionPaquetes }}</b></label>




                                        </div>
                                        <div class="col-5 ms-auto">
                                            <br><br>
                                            <button class="btn2 btn2-2 btn2-sep icon-cart blink2"
                                                onclick='redirect({{ "\"el Paquete " . $item->NombrePaquetes . "\"" }})'><b>Clic
                                                    Aquí
                                                    Para
                                                    Solicitar</b></button>
                                        </div>


                                    </div>
                                    <br>
                                    <div class="row" align="center">
                                        <div class="col-12">

                                            <label><b>Consulta a tu Médico.</b></label><br>
                                            <label><b>CON SERVICIO A DOMICILIO SIN COSTO EXTRA DENTRO DE LA CIUDAD DE
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
            @foreach ($TodosCovid as $item)
                <div class="modal fade" id={{ 'Covi' . $item->idEstudios }} tabindex="-1"
                    aria-labelledby={{ 'Covi' . $item->idEstudios . 'Label' }} aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #003094; color:white">
                                <h5 class="modal-title" id={{ 'Covi' . $item->idEstudios . 'Label' }}>
                                    <i class="fa-solid fa-shield-virus fa-xl"></i>&nbsp&nbsp{{ $item->NombreEstudios }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Acerca de la Prueba:</b><br>

                                            @foreach (explode('|', $item->DescripcionEstudios) as $index)
                                                <label>{{ $index }}</label><br>
                                            @endforeach

                                            <br>

                                            <b>Tipo de Muestra:</b><br>

                                            <label>{{ $item->TipoMuestraEstudios }}</label>

                                        </div>
                                        <div class="col-5 ms-auto">
                                            <label style="color:red"><b>PRECIO PROMOCIÓN <span style="font-size: 2vw">
                                                        ${{ $item->PrecioEstudios }}</span></b></label>
                                            <p style="font-size: 0.7vw">Promoción válida hasta el 31 de diciembre 2022</p>
                                            <br>


                                            <label>No requiere previa cita<label>
                                                    <label>Horario: Lunes a Viernes 07:00 a 19:00h Sábados 7:30 a
                                                        15:00h<label>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Indicaciones:</b><br>

                                            @foreach (explode('|', $item->IndicacionesEstudios) as $index)
                                                <label>{{ $index }}</label><br>
                                            @endforeach
                                            <br><br>

                                            <b>Resultados:</b><br>
                                            <label>{{ $item->ResultadosEstudios }}</label>




                                        </div>
                                        <div class="col-5 ms-auto">
                                            <br><br>
                                            <button class="btn2 btn2-2 btn2-sep icon-cart blink2"
                                                onclick='redirect({{ "\"la " . $item->NombreEstudios . "\"" }})'><b>Clic
                                                    Aquí
                                                    Para
                                                    Solicitar</b></button>
                                        </div>


                                    </div>
                                    <br>
                                    <div class="row" align="center">
                                        <div class="col-12">

                                            <label><b>Consulta a tu Médico.</b></label><br>
                                            <label><b>CONTAMOS CON SERVICIO A DOMICILIO SIN COSTO EXTRA DENTRO DE LA CIUDAD
                                                    DE
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

        <div class="modal fade" id="Anuncios" tabindex="-1" aria-labelledby="AnunciosLabel" aria-hidden="true">
            <div class="modal-dialog ">

                <div class="modal-content">
                    <div class="modal-footer" align="right" style="position: absolute;left: 34vw;top: -2vw;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button>
                    </div>
                    <img class="card-img-top" src='img/InfoCovid.jpg' alt="...">



                </div>

            </div>
        </div>


    </div>




@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#myCarousel').carousel({
                interval: 3000,
                cycle: true
            });

        });

        document.getElementById("titulo0").classList.add('elegido');

        window.onload = function() {
            $('#Anuncios').modal('show');
        }


        function opn(x) {
            //console.log(x);
            $('#Modal' + x).modal('show')

        }

        function opnCOvi(x) {
            //console.log(x);
            $('#Covi' + x).modal('show')

        }

        function redirect(x) {

            var url = "https://api.whatsapp.com/send?phone=527711585514&text=¡Hola! Solicito " + x;
            window.open(url, "_blank");
        }
    </script>
@endpush

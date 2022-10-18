@extends('layouts.plantilla')

@section('titulo', 'Nosotros')

@section('contenido')

    <div class="container">

        <br>
        <br>
        <div class="row ">

            <div id="fondo" class="contenedor " >
                <div class="texto-encima">
                    <div class="row">
                        <div class="col-7">
                            <label  style="padding: 2vw; " align="left" >
                                <img src="img/quiensomos.png" style="width: 75%; " class="img-fluid">
                            </label>
                            <br>
                            <label class="probandoBorde" style="text-align: justify!important;">
                                <b>Laboratorio ProMédica</b> surge en el año 2015 en Pachuca de Soto, Hidalgo.
                                Con el objetivo de ayudar al diagnostico oportuno y preventivo de la salud,
                                a través de una <b>amplia gama de estudios de laboratorio</b>, realizados por
                                profesionales especializados en su área. Contando con estandares internos
                                y externos de calidad los cuales permiten garantizar la precisión y
                                <b>confiabilidad en los resultados</b>.
                            </label>
                        </div>


                    </div>

                </div>

            </div>
        </div>
        <br>
        <br>


        <div class="row contornoPrin">

            <div class="col-2" align="center">
                <span style="padding: 2vw;">
                    <img src="img/Icon2.png" class="img-fluid" style="width: 50%; ">
                </span>
            </div>

            <div class="col-10">
                <p class="probandoBorde" style="text-align: justify!important;">En <b>Laboratorio ProMédica</b>, generamos
                    calidad en atención y servicio. Ponemos a su disposición
                    el laboratorio central en el interior del Centro Médico Radiologico Piracantos. Ubicado en Av.
                    Solidaridad
                    No. 218 Col. Piracantos. Pachuca Hgo. Tels. 771 158 55 14 y 771 165 04 24, en esta unidad también
                    contamos con los servicios de Ultrasonido y Electrocardiograma que con agrado le atenderemos.
                </p>

            </div>


        </div>
        <br>
        <br>


        <div class="row ">
            <div class="col-12" align="right">

                <img class="img-fluid" src="{{ asset('img/Banner_3_Nosotros.png') }}" alt="...">

            </div>
        </div>
        <br>
        <br>
        <div class="row contornoPrin">
            <div class="col-5">
                <span class="center" style="padding: 2vw;">
                    <img src="img/Botones/mision.png" class="img-fluid">
                </span>

                <p class="probandoBorde" style="text-align: center!important;"> Somos un laboratorio de análisis clínicos
                    comprometidos con la calidad
                    técnica y humana en constante
                    crecimiento, aportando resultados confiables para la prevención y diagnóstico de la salud, logrando
                    así la satisfacción de las necesidades de nuestros usuarios.
                </p>


            </div>
            <div class="col-2">
                <br>
                <br>
                <img class="img-fluid center" src="{{ asset('img/Icon4.png') }}" style="width: 80%; " alt="...">

            </div>

            <div class="col-5">
                <span class="center" style="padding: 2vw;">
                    <img src="img/Botones/vision.png" class="img-fluid">
                </span>


                <p class="probandoBorde" style="text-align: center!important;">Ser el mejor grupo de apoyo al diagnóstico
                    para pacientes y médicos; y líderes
                    en fomentar la cultura de la prevención al cuidado de la salud, para mejorar la calidad de vida en
                    generaciones presentes y futuras, con la excelencia y calidad que nos distingue.
                </p>

            </div>

        </div>









    </div>



@endsection
@push('scripts')
    <script>
        document.getElementById("titulo1").classList.add('elegido');
    </script>
@endpush

@extends('layouts.plantilla')

@section('titulo', 'Nosotros')

@section('contenido')

    <div class="container">
        <div class="row ">

            <div class="row gx-5 align-items-center my-5" style="text-align: justify;">
                <div class="col-5"><img class="img-fluid rounded mb-0" src="{{ asset('img/quien.png') }}" alt="..."></div>
                <div class="col-7 contornoPrin">
                    <h1 class="font-weight-light">¿Quiénes somos?</h1>
                    <p> Laboratorio ProMédica surge en el año 2015 en Pachuca de Soto Hgo. Con el objetivo de ayudar al
                        diagnóstico oportuno y preventivo de la salud, a través de una amplia gama de estudios de
                        laboratorio, realizados por profesionales especializados en su área. Contando con estándares
                        internos y externos de calidad los cuales permiten garantizar la precisión y confiabilidad en los
                        resultados. </p>
                    <p> En <b>Laboratorio Promédica</b>, generamos calidad en atención y servicio. </p>
                    <p> Ponemos a su disposición el laboratorio central en el interior del <b>Centro Médico Radiológico
                            Piracantos</b>. Ubicado en <b>Av. Solidaridad No. 218 Col. Piracantos. Pachuca Hgo. Tels. 771
                            158 55 14 ó 771 165 04 24</b>, en esta unidad también contamos con los servicios de
                        <b>Ultrasonido y Electrocardiograma</b> que con agrado le atenderemos.
                    </p>

                </div>
            </div>
        </div>


        <div class="row contornoPrin">
            <div class="col-4" style="margin-bottom: 12vw;">
                <span style="padding: 2vw;">
                    <img src="img/Botones/mision.png" class="img-fluid" style="width: 80%; ">
                </span>

                <p class="probandoBorde"><b> Somos un laboratorio de análisis clínicos comprometidos con la calidad
                        técnica y humana en constante
                        crecimiento, aportando resultados confiables para la prevención y diagnóstico de la salud, logrando
                        así la satisfacción de las necesidades de nuestros usuarios.</b>
                </p>


            </div>
            <div class="col-4">
                <br>
                <br>
                <img class="img-fluid rounded mb-0" src="{{ asset('img/mivifle.png') }}" alt="...">

            </div>
            <div class="col-4" style="margin-top: 12vw">
                <span style="padding: 2vw;">
                    <img src="img/Botones/vision.png" class="img-fluid" style="width: 80%;">
                </span>


                <p class="probandoBorde"><b> Ser líderes en fomentar la cultura de la prevención al cuidado de la salud a
                        través de análisis
                        clínicos, para mejorar la calidad de vida en generaciones presentes y futuras, con la excelencia y
                        calidad que nos distingue con un enfoque de responsabilidad social y satisfacción de nuestros
                        pacientes.</b>
                </p>

            </div>

        </div>



        <div class="row ">
            <div class="row gx-3 align-items-center my-5">
                <div class="col-10 contornoPrin">

                    <h1 class="font-weight-light">NUESTROS VALORES</h1>

                    <div style="margin-top: 2vw" class="row ">
                        <div class="col-4">
                            <ul>

                                <li><i style="color: #303066" class="fa-solid fa-heart-circle-check fa-2xl"></i>&nbsp;&nbsp;Amor</li>
                                <li style="margin-top: 2vw"><i style="color: #303066" class="fa-solid fa-scale-balanced fa-2xl"></i>&nbsp;&nbsp;Ética</li>
                                <li style="margin-top: 2vw"><i style="color: #303066" class="fa-solid fa-people-group fa-2xl"></i>&nbsp;&nbsp;Compromiso</li>

                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li><i style="color: #303066" class="fa-solid fa-person-digging fa-2xl"></i>&nbsp;&nbsp;Resolución</li>
                                <li style="margin-top: 2vw"><i style="color: #303066" class="fa-solid fa-hand-holding-medical fa-2xl"></i>Pasión</li>
                                <li style="margin-top: 2vw"><i style="color: #303066" class="fa-solid fa-people-carry-box fa-2xl"></i>&nbsp;&nbsp;Responsabilidad</li>

                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li><i style="color: #303066" class="fa-solid fa-user-clock fa-2xl"></i>&nbsp;&nbsp;Puntualidad</li>
                                <li style="margin-top: 2vw"><i style="color: #303066" class="fa-solid fa-handshake-angle fa-2xl"></i>&nbsp;&nbsp;Claridad</li>
                            </ul>
                        </div>


                    </div>



                </div>



            </div>
        </div>
    </div>



@endsection
@push('scripts')
    <script>
        document.getElementById("titulo1").classList.add('elegido');
    </script>
@endpush

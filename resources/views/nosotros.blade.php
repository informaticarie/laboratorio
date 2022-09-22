@extends('layouts.plantilla')

@section('titulo', 'Nosotros')

@section('contenido')

    <div class="container">
        <div class="row ">

            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-5"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('img/quien.png') }}"
                        alt="..."></div>
                <div class="col-7">
                    <h1 class="font-weight-light">QUIÉNES SOMOS</h1>
                    <p> Laboratorio ProMédica surge en el año 2015 en Pachuca de Soto Hgo. Con el objetivo de ayudar al
                        diagnóstico oportuno y preventivo de la salud, a través de una amplia gama de estudios de
                        laboratorio, realizados por profesionales especializados en su área. Contando con estándares
                        internos y externos de calidad los cuales permiten garantizar la precisión y confiabilidad en los
                        resultados. </p>
                    <p> En <b>Laboratorio Promédica</b>, generamos calidad en atención y servicio. </p>
                    <p> Ponemos a su disposición el laboratorio central en el interior del <b>Centro Médico Radiológico
                            Piracantos</b>. Ubicado en <b>Av. Solidaridad No. 218 Col. Piracantos. Pachuca Hgo. Tels. 771
                            158 55 14 ó 771 165 04 24</b>, en esta unidad también contamos con los servicios de
                        <b>Ultrasonido y Electrocardiograma</b> que con agrado atenderemos.</p>

                </div>
            </div>
        </div>
        <div class="row ">
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-9">
                    <h1 class="font-weight-light">VISIÓN</h1>
                    <p> Ser líderes en fomentar la cultura de la prevención al cuidado de la salud a través de análisis
                        clínicos, para mejorar la calidad de vida en generaciones presentes y futuras, con la excelencia y
                        calidad que nos distingue con un enfoque de responsabilidad social y satisfacción de nuestros
                        pacientes.
                    </p>
                    <br>
                    <br>
                    <h1 class="font-weight-light">VALORES</h1>
                    <br><br>
                    <ul>

                        <li>Amor I Pasión11</li>
                        <li>Ética I Responsabilidad</li>
                        <li>Compromiso I Puntualidad</li>
                        <li>Resolución I Claridad</li>
                    </ul>


                </div>


                <div class="col-3">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('img/analisis.jpg') }}" alt="...">

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

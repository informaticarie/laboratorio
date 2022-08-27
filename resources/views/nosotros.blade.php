@extends('layouts.plantilla')

@section('titulo', 'Nosotros')

@section('contenido')

    <div class="container">
        <div class="row ">

            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('img/quien.png') }}"
                        alt="..."></div>
                <div class="col-5">
                    <h1 class="font-weight-light">QUIÉNES SOMOS</h1>
                    <p> Somos un laboratorio de análisis clínicos, apoyando al cuidado de la salud, contando con un
                        excelente equipo de trabajo de alta calidad técnica y humana, para un buen diagnostico
                        oportuno.</p>

                </div>
            </div>
        </div>
        <div class="row ">
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-9">
                    <h1 class="font-weight-light">VISIÓN</h1>
                    <p> Somos un laboratorio de análisis clínicos, apoyando al cuidado de la salud, contando con un
                        excelente equipo de trabajo de alta calidad técnica y humana, para un buen diagnostico
                        oportuno.</p>
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

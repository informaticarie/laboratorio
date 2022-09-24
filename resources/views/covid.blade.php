@extends('layouts.plantilla')

@section('titulo', 'Covid')

@section('contenido')

    <main class="container">


        <div class=" mb-4 text-white rounded ">
            <img src="img/Covid/Banner7.png" class="img-fluid">
        </div>



        <div class="row g-5">
            <div class="col-8">


                <article class="blog-post">
                    <h2 class="blog-post-title" style="background-color:#15006d; color:white">Prueba de Antígeno Nasal
                        COVID-19</h2>
                    <hr>
                    <p style="font-size: 1.3vw"><i class="fa-solid fa-circle-info fa-xl"></i> Determina infección activa en
                        el momento. <b>Especificidad del 100% y una sensibilidad del 94%.</b> </p>
                    <div class="row">
                        <div class="col-6">
                            <p style="font-size: 1.2vw"><b>Tipo de Muestra:</b> Hisopado nasal </p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-money-bill-1-wave fa-xl"></i><b> Costo:</b>
                                $300.00
                            </p>
                            <p style="font-size: 1.2vw">Indicaciones</p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-check"></i> 1h sin aseo nasal antes del
                                estudio.</p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-clock"></i> <b>Entrega de resultados 1h</b>
                            </p>

                        </div>
                        <div class="col-6">
                        </div>
                    </div>


                </article>
                <article class="blog-post">
                    <h2 class="blog-post-title" style="background-color:#15006d; color:white">Prueba Diagnóstica COVID-19
                        PCR</h2>
                    <hr>
                    <p style="font-size: 1.3vw"><i class="fa-solid fa-circle-info fa-xl"></i> Determina infección
                        activa <b>con un alto nivel de precisión.</b></p>
                    <div class="row">
                        <div class="col-6">

                            <p style="font-size: 1.2vw"><b>Tipo de Muestra:</b> Hisopado nasofaríngeo (nariz y garganta)
                            </p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-money-bill-1-wave fa-xl"></i><b> Costo:</b>
                                $1250.00</p>
                            <p style="font-size: 1.2vw">Indicaciones</p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-check"></i> Ayuno 4h </p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-check"></i> Sin aseo nasal y bucal 4h </p>
                            <p style="font-size: 1.2vw">(toma de muestra antes de las 14:00h) </p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-clock"></i> <b>Entrega de resultados 24h</b>
                            </p>

                        </div>
                        <div class="col-6">

                        </div>

                    </div>

                </article>
                <article class="blog-post">
                    <h2 class="blog-post-title" style="background-color: #15006d; color:white">Prueba Anticuerpos SARS CoV2
                        IgG/IgM</h2>
                    <hr>

                    <p style="font-size: 1.3vw"><i class="fa-solid fa-circle-info fa-xl"></i> Determina anticuerpos IgG e
                        IgM generados post-infección y post vacuna </p>
                    <div class="row">
                        <div class="col-6">
                            <p style="font-size: 1.2vw"><b>Tipo de Muestra:</b>Sangre Determina la presencia de anticuerpos
                                IgG e
                                IgM </p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-money-bill-1-wave fa-xl"></i><b> Costo:</b>
                                $650.00 probando como los resultados funcionan 
                            </p>
                            <p style="font-size: 1.2vw">Indicaciones</p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-check"></i> Ayuno 2h </p>
                            <p style="font-size: 1.2vw"><i class="fa-solid fa-clock"></i> <b>Entrega de resultados 24h</b>
                            </p>
                        </div>
                        <div class="col-6">
                        </div>
                    </div>


                </article>







            </div>

            <div class="col-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="rounded">
                        <img src="img/Covid/InfoCovid1.jpeg" class="img-fluid">
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="rounded">
                        <img src="img/Covid/Info2.jpeg" class="img-fluid">
                    </div>


                </div>
            </div>
        </div>

    </main>

@endsection

@push('scripts')
    <script>
        document.getElementById("titulo3").classList.add('elegido');
    </script>
@endpush

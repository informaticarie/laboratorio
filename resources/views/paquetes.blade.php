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

                           
                             {!!$agregar!!}


                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <img src="img/Botones/Estudios.png" class="img-fluid" style="width: 30%;margin-bottom: 10px;">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach ($TodosEstudios as $item)
                        @if ($item->TipoEstudio == 1)
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <div class="badge bg-dark text-white position-absolute"
                                        style="top: 0.5rem; right: 0.5rem">
                                        Promoción</div>
                                    <img class="card-img-top" src={{ asset('img/' . $item->NombreEstudio) }}
                                        alt="...">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder">{{ $item->NombreEstudio }}</h5>

                                        </div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                href="#">Más
                                                Información</a></div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col mb-5">
                                <div class="card h-100">

                                    <img class="card-img-top" src={{ asset('img/' . $item->NombreEstudio) }}
                                        alt="...">

                                    <div class="card-body p-4">
                                        <div class="text-center">

                                            <h5 class="fw-bolder">{{ 'Paquete ' . $loop->index }}</h5>


                                        </div>
                                    </div>

                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                href="#">Más
                                                Información</a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </section>
    </div>

@endsection

@push('scripts')
<script>
    
     document.getElementById("titulo2").classList.add('elegido');
</script>
@endpush
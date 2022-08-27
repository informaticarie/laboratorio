@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

    <div class="container" style="padding-right: 0px;padding-left: 0px;">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="25%" src="img/Propias/Banner1.png">
                </div>
                <div class="carousel-item ">
                    <img class="bd-placeholder-img" width="100%" height="25%" src="img/Propias/Banner2.png">
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

            <div class="col-8">
                <img src="img/Botones/Promociones2.gif" class="img-fluid" style="width: 40%;margin-bottom: 10px;">
                <div class="row justify-content-between">
                    @foreach ($PaquetesPromocion as $item)
                        <div class="col-4 ">
                            <div class="card mb-4 ">
                                <a class="btn-primary" href="#!"><img class="card-img-top"
                                        onclick='add("{{ $item->NombrePaquetes }}")'
                                        src={{ asset('img/Paquetes/' . $item->NombrePaquetes . '.jpg') }} alt="..."></a>
                                <div class="card-body">

                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Reiciendis
                                        aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>

            </div>

            <div class="col-4">
                <img src="img/Botones/Redes.gif" class="img-fluid" style="width: 85%;margin-bottom: 10px;">
                <div class="card mb-4">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpg%2FLaboratorioPromedica.Pachuca%2Fposts%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                   

                </div>

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div align="right">
                    <button type="button" style="background-color:white; color:white" class="btn-close "
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="traer"></div>
            </div>
        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
    

    

@endsection

@push('scripts')
<script>
    
     document.getElementById("titulo0").classList.add('elegido');
</script>
@endpush
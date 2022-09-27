@extends('layouts.plantilla')

@section('titulo', 'Paquetes')

@section('contenido')

    <div class="container-fluid">

        <div class="container">
			<div class="row">
				<div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
					
					<img src="img/Botones/Ubicacion.png" class="img-fluid" style="width: 30%;margin-bottom: 10px;">
				</div>
			</div>
			<div class="row">
				<div class="col-4  mb-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
					<div class="contact-info">

						<div class="address mt-4">
							<i class="icon-room"></i>
							<h4 class="mb-2" style="font-weight: bold;">Ubicación:</h4>
							<p>Av Solidaridad 218, Parque de Poblamiento,
                                42032 Pachuca de Soto, Hgo.</p>
						</div>

						<div class="open-hours mt-4">
							<i class="icon-clock-o"></i>
							<h4 class="mb-2" style="font-weight: bold;">Horario:</h4>
							<p>
								
								Lunes a Viernes:<br>07:00 a 19:00h <br>Sábados: <br>07:30 a 15:00h
							</p>
						</div>

						<div class="email mt-4">
							<i class="icon-envelope"></i>
							<h4 class="mb-2" style="font-weight: bold;">Email:</h4>
							<p>ventas@laboratoriopromedica.com</p>
						</div>

						<div class="phone mt-4">
							<i class="icon-phone"></i>
							<h4 class="mb-2" style="font-weight: bold;">Telefonos:</h4>
							<p>771 158 5514 , 771 165 0424</p>
						</div>

					</div>
				</div>
				<div class="col-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="col p-2 d-flex flex-column position-static">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119882.02054372206!2d-98.90519463750003!3d20.1209795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d10b6941c556cd%3A0x9c66543aed4c8771!2sLaboratorio%20ProM%C3%A9dica!5e0!3m2!1ses-419!2smx!4v1658899639317!5m2!1ses-419!2smx"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
				</div>
			</div>
		</div>


    @endsection
    @push('scripts')
    <script>
        
         document.getElementById("titulo4").classList.add('elegido');
    </script>
    @endpush
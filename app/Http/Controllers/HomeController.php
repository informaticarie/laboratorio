<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paquete;
use App\Models\Estudio;

class HomeController extends Controller
{

    public function __invoke()
    {
        $PaquetesPromocion = Paquete::where('TipoPaquetes', 1)->get();

        return view('home', compact('PaquetesPromocion'));
    }

    public function Nosotros()
    {
        return view('nosotros');
    }


    public function Paquetes()
    {

        $TodosPaquetes = Paquete::orderBy('TipoPaquetes', 'asc')->get()->toArray();
        $TodosEstudios = Estudio::orderBy('TipoEstudios', 'asc')->get();

        $FormandoGeneral = array();
        $contador = 1;
        $agregar = "";

        for ($i = 0; $i < count($TodosPaquetes); $i++) {
            
            if($contador==1){
                if($i==0){
                    $agregar .='<div class="carousel-item active">
                    <div class="row">';
                }else{
                    $agregar .='<div class="carousel-item">
                    <div class="row">';
                }
                
            }
            

            if ($contador == 3) {

                $agregar .=
                    '<div class="col-md-4 mb-3">
                        <div class="card">
                                <img class="img-fluid" alt="100%x280" src="img/Paquetes/'.$TodosPaquetes[$i]['NombrePaquetes'].'.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>';


                $contador = 1;
            } else {
               
                


                $agregar .=
                    '<div class="col-md-4 mb-3">
                        <div class="card">
                                <img class="img-fluid" alt="100%x280" src="img/Paquetes/'.$TodosPaquetes[$i]['NombrePaquetes'].'.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                        </div>
                    </div>';


                $contador++;
            }



           


        }





        return view('paquetes', compact('TodosEstudios','agregar'));
    }
    public function Covid()
    {
        return view('covid');
    }

    public function Contacto()
    {
        return view('contacto');
    }
}

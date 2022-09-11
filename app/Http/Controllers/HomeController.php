<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paquete;
use App\Models\Estudio;

class HomeController extends Controller
{

    public function __invoke()
    {
        $PaquetesPromocion = Paquete::where('TipoPaquetes', 1)->take(3)->get()->toArray();
        $EstudioCovid = Estudio::where('TipoEstudios', 1)->take(3)->get()->toArray();
        $TodosPaquetes1 = Paquete::orderBy('TipoPaquetes', 'asc')->take(3)->get();
        $TodosCovid = Estudio::orderBy('TipoEstudios', 'asc')->take(3)->get();
        $contador = 1;
        $contando = 1;
        $agregarCovi = "";
        $agregaPaque="";

        for ($i = 0; $i < count($EstudioCovid); $i++) {

            if ($contador == 1) {
                if ($i == 0) {
                    $agregarCovi .= '<div class="carousel-item active">
                    <div class="row">';
                } else {
                    $agregarCovi .= '<div class="carousel-item">
                    <div class="row">';
                }
            }


            if ($contador == 3) {
                

                $agregarCovi .=
                    '<div class="col-4 mb-3" >
                        <div class=" card disenoHome CambiaCarrusel" href="#!"  id="Estudios' . $EstudioCovid[$i]['idEstudios'] . '" onclick="opnCOvi(' . $EstudioCovid[$i]['idEstudios'] . ')" >
                            <div class="col-12 d-flex flex-column " >
                             
                            <div class="row  py-2">
                            <img class="card-img-top" src=\'img/Estudios/'. $EstudioCovid[$i]['ImagenEstudios'] .'\'  alt="...">
                            
                                <div class="col-12  titucardHome">
                                <label><i class="fa-solid fa-shield-virus fa-xl"></i>&nbsp;&nbsp;' . $EstudioCovid[$i]['NombreEstudios'] . '</label>
                                </div>
                            
                           
                            </div>
                                
                                <button style="font-size:0.8vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                              
                                
                            
                            </div>
                           
                        </div>

                        
                    </div>
                </div>
            </div>';


                $contador = 1;
            } else {


                $agregarCovi .=
                    '<div class="col-4 mb-3">
                        <div class=" card disenoHome CambiaCarrusel" href="#!"  id="Estudio' . $EstudioCovid[$i]['idEstudios'] . '" onclick="opnCOvi(' . $EstudioCovid[$i]['idEstudios'] . ')" >
                        <div class="col-12 d-flex flex-column">
                        <div class="row py-2">
                        <img class="card-img-top" src=\'img/Estudios/'. $EstudioCovid[$i]['ImagenEstudios'] .'\'  alt="...">
                          
                            <div class="col-12  titucardHome">
                            <label><i class="fa-solid fa-shield-virus fa-xl"></i>&nbsp;&nbsp;' . $EstudioCovid[$i]['NombreEstudios'] . '</label>
                            </div>
                            
                       
                              </div>
                     
                                <button style="font-size:0.8vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                        
                    </div>
                        </div>
                    </div>';


                $contador++;
            }
        }

        for ($i = 0; $i < count($PaquetesPromocion); $i++) {

            if ($contando == 1) {
                if ($i == 0) {
                    $agregaPaque .= '<div class="carousel-item active">
                    <div class="row">';
                } else {
                    $agregaPaque .= '<div class="carousel-item">
                    <div class="row">';
                }
            }


            if ($contando == 3) {
               
                $agregaPaque .=
                    '<div class="col-4 mb-3" >
                        <div class=" card disenoHome CambiaCarrusel" href="#!"  id="Paquete' . $PaquetesPromocion[$i]['idPaquetes'] . '" onclick="opn(' . $PaquetesPromocion[$i]['idPaquetes'] . ')" >
                            <div class="col-12 d-flex flex-column " >
                             
                            <div class="row  py-2">
                            <img class="card-img-top" src=\'img/Paquetes/'. $PaquetesPromocion[$i]['ImagenPaquetes'] .'\'  alt="...">
                       
                                <div class="col-12  titucardHome">
                                <label><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $PaquetesPromocion[$i]['NombrePaquetes'] . '</label>
                                </div>
                            
                            
                             </div>
                                
                                <button style="font-size:0.8vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                              
                                
                            
                            </div>
                           
                        </div>

                        
                    </div>
                </div>
            </div>';


                $contando = 1;
            } else {

                $agregaPaque .=
                    '<div class="col-4 mb-3">
                        <div class=" card disenoHome CambiaCarrusel" href="#!"  id="Paquete' . $PaquetesPromocion[$i]['idPaquetes'] . '" onclick="opn(' . $PaquetesPromocion[$i]['idPaquetes'] . ')" >
                        <div class="col-12 d-flex flex-column">
                        <div class="row py-2">
                         <img class="card-img-top" src=\'img/Paquetes/'. $PaquetesPromocion[$i]['ImagenPaquetes'] .'\'  alt="...">
                          
                            <div class="col-12  titucardHome">
                            <label><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $PaquetesPromocion[$i]['NombrePaquetes'] . '</label>
                            </div>
                            
                       
                        </div>
                     
                                <button style="font-size:0.8vw" type="button" class="btn btn-success propButon">Ver Más</button>
                        
                    </div>
                        </div>
                    </div>';


                $contando++;
            }
        }



        return view('home', compact('agregaPaque','agregarCovi','TodosPaquetes1','TodosCovid'));
    }

    public function Nosotros()
    {
        return view('nosotros');
    }


    public function Paquetes()
    {

        $TodosPaquetes = Paquete::orderBy('TipoPaquetes', 'asc')->get()->toArray();
        $TodosPaquetes1 = Paquete::orderBy('TipoPaquetes', 'asc')->get();
        $TodosEstudios = Estudio::where('TipoEstudios', '2')->get()->toArray();

        $contador = 1;
        $contadorEstudios = 1;
        $agregar = "";
        $agregarEstudios = "";

        for ($i = 0; $i < count($TodosPaquetes); $i++) {

            if ($contador == 1) {
                if ($i == 0) {
                    $agregar .= '<div class="carousel-item active">
                    <div class="row">';
                } else {
                    $agregar .= '<div class="carousel-item">
                    <div class="row">';
                }
            }


            if ($contador == 3) {
                $contenedor = "";

                $porciones = explode("|", $TodosPaquetes[$i]['ContienePaquetes']);

                foreach ($porciones as $index) {

                    $contenedor .= '<li>' . $index . '</li>';
                }


                $agregar .=
                    '<div class="col-4 mb-3 " >
                        <div class=" card diseno CambiaCarrusel" href="#!"  id="Paquete' . $TodosPaquetes[$i]['idPaquetes'] . '" onclick="opn(' . $TodosPaquetes[$i]['idPaquetes'] . ')" >
                            <div class="col-12 d-flex flex-column " >
                             
                            <div class="row  py-1">
                            <img class="card-img-top" src=\'img/Paquetes/'. $TodosPaquetes[$i]['ImagenPaquetes'] .'\'  alt="...">
                           
                                <div class="col-12  titucard">
                                <label ><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosPaquetes[$i]['NombrePaquetes'] . '</label>
                                </div>
                            
                           
                             </div>
                                
                                <button style="font-size:1vw" type="button" class="btn btn-success propButon">Ver Más</button>
                              
                                
                            
                            </div>
                           
                        </div>

                        
                    </div>
                </div>
            </div>';


                $contador = 1;
            } else {

                $contenedor = "";

                $porciones = explode("|", $TodosPaquetes[$i]['ContienePaquetes']);
                foreach ($porciones as $index) {

                    $contenedor .= '<li>' . $index . '</li>';
                }


                $agregar .=
                    '<div class="col-4 mb-3 ">
                        <div class=" card diseno CambiaCarrusel" href="#!"  id="Paquete' . $TodosPaquetes[$i]['idPaquetes'] . '" onclick="opn(' . $TodosPaquetes[$i]['idPaquetes'] . ')" >
                        <div class="col-12 d-flex flex-column">
                        <div class="row py-1">
                        <img class="card-img-top" src=\'img/Paquetes/'. $TodosPaquetes[$i]['ImagenPaquetes'] .'\'  alt="...">
                          
                            <div class="col-12  titucard">
                            <label ><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosPaquetes[$i]['NombrePaquetes'] . '</label>
                            </div>
                            
                       
                            </div>
                     
                                <button style="font-size:1vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                        
                    </div>
                        </div>
                    </div>';


                $contador++;
            }
        }

        for ($b = 0; $b < count($TodosEstudios); $b++) {

            if ($contadorEstudios == 1) {
                if ($b == 0) {
                    $agregarEstudios .= '<div class="carousel-item active">
                    <div class="row">';
                } else {
                    $agregarEstudios .= '<div class="carousel-item">
                    <div class="row">';
                }
            }


            if ($contadorEstudios == 3) {

                $agregarEstudios .=
                    '<div class="col-4 mb-3 " >
                        <div class=" card diseno CambiaCarrusel" href="#!"  id="Estudios' . $TodosEstudios[$b]['idEstudios'] . '" onclick="opn(' . $TodosEstudios[$b]['idEstudios'] . ')" >
                            <div class="col-12 d-flex flex-column " >
                             
                            <div class="row  py-2">
                            <img class="card-img-top" src=\'img/Estudios/'. $TodosEstudios[$b]['ImagenEstudios'] .'\'  alt="...">
                            
                                <div class="col-12  titucard">
                                <label><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosEstudios[$b]['NombreEstudios'] . '</label>
                                </div>
                            
                            </div>
                                
                                <button style="font-size:1vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                              
                                
                            
                            </div>
                           
                        </div>

                        
                    </div>
                </div>
            </div>';


                $contadorEstudios = 1;
            } else {

               
                $agregarEstudios .=
                    '<div class="col-4 mb-3 ">
                        <div class=" card diseno CambiaCarrusel" href="#!"  id="Estudios' . $TodosEstudios[$b]['idEstudios'] . '" onclick="opn(' . $TodosEstudios[$b]['idEstudios'] . ')" >
                        <div class="col-12 d-flex flex-column">
                        <div class="row py-2">
                        <img class="card-img-top" src=\'img/Estudios/'. $TodosEstudios[$b]['ImagenEstudios'] .'\'  alt="...">
                           
                            <div class="col-12  titucard">
                            <label ><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosEstudios[$b]['NombreEstudios'] . '</label>
                            </div>
                            
                       
                             </div>
                     
                                <button style="font-size:1vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                        
                    </div>
                        </div>
                    </div>';


                $contadorEstudios++;
            }
        }





        return view('paquetes', compact('agregarEstudios', 'agregar', 'TodosPaquetes1'));
    }
    /*public function Covid()
    {
        return view('covid');
    }*/

    public function Contacto()
    {
        return view('contacto');
    }
}

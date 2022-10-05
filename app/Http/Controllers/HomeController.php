<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paquete;
use App\Models\Estudio;
use App\Models\Perfile;

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
                            <div class="col-12 d-flex flex-column" >

                              
                            <div class="row  py-2 img__wrap">
                           
                              
                          
                               <img class="card-img-top img__img" src=\'img/Estudios/'. $EstudioCovid[$i]['ImagenEstudios'] .'\'  alt="...">
                                <div class="img__description_layer">
                                <p class="img__description"><b>'.str_replace('|', ', ', $EstudioCovid[$i]['TipoMuestraEstudios']).'</b></p>
                         
                                </div>
                                <div class="col-12  titucardHome">
                                <label style="line-height: 13px;"><i class="fa-solid fa-shield-virus fa-xl"></i>&nbsp;&nbsp;' . $EstudioCovid[$i]['NombreEstudios'] . '</label>
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
                        <div class="row py-2 img__wrap">
                        <img class="card-img-top img__img" src=\'img/Estudios/'. $EstudioCovid[$i]['ImagenEstudios'] .'\'  alt="...">
                            <div class="img__description_layer">
                            <p class="img__description"><b>'.str_replace('|', ', ', $EstudioCovid[$i]['TipoMuestraEstudios']).'</b></p>
                            </div>
                            <div class="col-12  titucardHome">
                            <label  style="line-height: 13px;"><i class="fa-solid fa-shield-virus fa-xl"></i>&nbsp;&nbsp;' . $EstudioCovid[$i]['NombreEstudios'] . '</label>
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
                             
                            <div class="row  py-2 img__wrap">
                            <img class="card-img-top img__img" src=\'img/Paquetes/'. $PaquetesPromocion[$i]['ImagenPaquetes'] .'\'  alt="...">
                                
                                <div class="img__description_layer">
                                <p class="img__description"><b>'.str_replace('|', ', ', $PaquetesPromocion[$i]['ContienePaquetes']).'</b></p>
                         
                                </div>
                                <div class="col-12  titucardHome">
                                <label  style="line-height: 13px;"><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $PaquetesPromocion[$i]['NombrePaquetes'] . '</label>
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
                        <div class="row py-2 img__wrap">
                         <img class="card-img-top img__img" src=\'img/Paquetes/'. $PaquetesPromocion[$i]['ImagenPaquetes'] .'\'  alt="...">
                         <div class="img__description_layer">
                         <p class="img__description"><b>'.str_replace('|', ', ', $PaquetesPromocion[$i]['ContienePaquetes']).'</b></p>
                         </div>
                            <div class="col-12  titucardHome">
                            <label  style="line-height: 13px;"><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $PaquetesPromocion[$i]['NombrePaquetes'] . '</label>
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
        $TodosPerfiles = Perfile::orderBy('TipoPerfiles', 'asc')->get()->toArray();
        $TodosPerfiles1 = Perfile::orderBy('TipoPerfiles', 'asc')->get();
       

        $contador = 1;
        $contadorPerfiles = 1;
        $agregar = "";
        $agregarPerfiles = "";

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
                             
                            <div class="row  py-1 img__wrap">
                            <img class="card-img-top img__img" src=\'img/Paquetes/'. $TodosPaquetes[$i]['ImagenPaquetes'] .'\'  alt="...">
                             <div class="img__description_layer">
                             <p class="img__description"><b>'.str_replace('|', ', ', $TodosPaquetes[$i]['ContienePaquetes']).'</b></p>
                             </div>
                                <div class="col-12  titucard">
                                <label  style="line-height: 13px;"><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosPaquetes[$i]['NombrePaquetes'] . '</label>
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
                        <div class="row py-1 img__wrap">
                        <img class="card-img-top img__img" src=\'img/Paquetes/'. $TodosPaquetes[$i]['ImagenPaquetes'] .'\'  alt="...">
                            <div class="img__description_layer">
                            <p class="img__description"><b>'.str_replace('|', ', ', $TodosPaquetes[$i]['ContienePaquetes']).'</b></p>
                            </div>
                            <div class="col-12  titucard">
                            <label  style="line-height: 13px;"><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosPaquetes[$i]['NombrePaquetes'] . '</label>
                            </div>
                            
                       
                            </div>
                     
                                <button style="font-size:1vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                        
                    </div>
                        </div>
                    </div>';


                $contador++;
            }
        }

        
        for ($b = 0; $b < count($TodosPerfiles); $b++) {

            if ($contadorPerfiles == 1) {
                if ($b == 0) {
                    $agregarPerfiles .= '<div class="carousel-item active">
                    <div class="row">';
                } else {
                    $agregarPerfiles .= '<div class="carousel-item">
                    <div class="row">';
                }
            }


            if ($contadorPerfiles == 3) {
                

                $agregarPerfiles .=
                    '<div class="col-4 mb-3 " >
                        <div class=" card diseno CambiaCarrusel" href="#!"  id="Perfiles' . $TodosPerfiles[$b]['idPerfiles'] . '" onclick="opn(\'Perfil' . $TodosPerfiles[$b]['idPerfiles'] . '\')" >
                            <div class="col-12 d-flex flex-column " >
                             
                            <div class="row  py-2 img__wrap">
                            <img class="card-img-top img__img" src=\'img/Perfiles/'. $TodosPerfiles[$b]['ImagenPerfiles'] .'\'  alt="...">
                            <div class="img__description_layer">
                            <p class="img__description"><b>'.str_replace('|', ', ', $TodosPerfiles[$b]['ContienePerfiles']).'</b></p>
                             
                            </div>
                                <div class="col-12  titucard">
                                <label  style="line-height: 13px;"><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosPerfiles[$b]['NombrePerfiles'] . '</label>
                                </div>
                            
                            </div>
                                
                                <button style="font-size:1vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                              
                                
                            
                            </div>
                           
                        </div>

                        
                    </div>
                </div>
            </div>';


                $contadorPerfiles = 1;
            } else {

               
                $agregarPerfiles .=
                    '<div class="col-4 mb-3 ">
                        <div class=" card diseno CambiaCarrusel" href="#!"  id="Perfiles' . $TodosPerfiles[$b]['idPerfiles'] . '" onclick="opn(\'Perfil' . $TodosPerfiles[$b]['idPerfiles'] . '\')"  >
                        <div class="col-12 d-flex flex-column">
                        <div class="row py-2 img__wrap">
                        <img class="card-img-top img__img" src=\'img/Perfiles/'. $TodosPerfiles[$b]['ImagenPerfiles'] .'\'  alt="...">
                            <div class="img__description_layer">
                            <p class="img__description"><b>'.str_replace('|', ', ', $TodosPerfiles[$b]['ContienePerfiles']).'</b></p>
                             
                            </div>
                            <div class="col-12  titucard">
                            <label  style="line-height: 13px;"><i class="fa-solid fa-flask-vial fa-xl"></i>&nbsp;&nbsp;' . $TodosPerfiles[$b]['NombrePerfiles'] . '</label>
                            </div>
                            
                       
                             </div>
                     
                                <button style="font-size:1vw"  type="button" class="btn btn-success propButon">Ver Más</button>
                        
                    </div>
                        </div>
                    </div>';


                $contadorPerfiles++;
            }
        }





        return view('paquetes', compact('agregarPerfiles', 'agregar', 'TodosPaquetes1','TodosPerfiles1'));
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

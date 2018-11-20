<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Auth;

class InstalacionesController extends Controller{

    public function ConsultaInicial(){

      $user = Auth::user();
    
	    $instalaciones = DB::table('instalaciones')
                        ->where("id", $user->instalacion_asignada)
                        ->get();
	    return view('/home', ['Instalacioness' => $instalaciones, "Usuario" => $user]); 

    }

     public function ConsultaInicialModal() { 



            $instalacion= DB::table("instalaciones")
                            ->where("id", $_POST["id_instalacion"])
                            ->first();




         
            $now = new \DateTime();
            $fecha = $now->format('d-m-Y H:i:s');;
            $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );


            $datos = DB::table($instalacion->tabla_asociada)
                ->select(DB::raw("SUM(mt_value) as valor, mt_time as fecha"))
                ->where("mt_name", "=", $instalacion->datos)
                ->where("mt_time", ">=", $nuevafecha)
                ->groupBy(DB::raw('HOUR(mt_time)'))
                ->orderBy("mt_time", "ASC")
                ->get();


                $UltimaMedicion = DB::table($instalacion->tabla_asociada)
                 ->where("mt_name", $instalacion->datos)
                 ->orderBy("mt_time", "DESC")
                 ->first();


                 if ($_POST["id_instalacion"]==2) {
                   return view("modals.modal1", ["datos" => $datos, "instalacion_info" => $instalacion, "ultima_medicion" => $UltimaMedicion]);
                 }

                 if ($_POST["id_instalacion"]==1) {
                   return view("modals.modal2", ["datos" => $datos, "instalacion_info" => $instalacion, "ultima_medicion" => $UltimaMedicion]);
                 }

     }

 


}

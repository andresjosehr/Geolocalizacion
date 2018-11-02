<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class InstalacionesController extends Controller{

    public function ConsultaInicial(){
    
	    $instalaciones = DB::table('instalaciones')
                        ->where("id","2")
                        ->get();
	    return view('/home', ['Instalacioness' => $instalaciones]); 

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
                    



        return view("modal", ["datos" => $datos, "instalacion_info" => $instalacion, "ultima_medicion" => $UltimaMedicion]);

     }

 


}

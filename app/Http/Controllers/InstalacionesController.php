<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class InstalacionesController extends Controller{

    public function ConsultaInicial(){
    	

	    $instalaciones = DB::table('instalaciones')->get();
	    // $instalaciones = json_decode($instalaciones, true); 
	    // print_r($instalaciones[0]["datos"]);

	    // $mt_value = DB::table($instalaciones[0]["tabla_asociada"])->where('mt_value', $instalaciones[0]["datos"])->get();

	    // print_r($mt_value);




	    return view('/home', ['Instalacioness' => $instalaciones]); 

    }

     public function post(Request $request) { 

     	$response = array( 'status' => 'success', 'msg' => $request->message, );

     	return response()->json($response); 

     }

    public function Consulta24Hrs(){

    	$id_instalacion =  $_POST['id_instalacion'];

    	if ($id_instalacion==2) {

    		$instalacion = DB::table('instalaciones')->where("id", $id_instalacion)->first();


    		$datos = DB::table($instalacion->tabla_asociada)
    			->where("mt_time", ">=", "NOW() - INTERVAL 1 DAY")
    			->get();
    			
    			print_r($datos);

    			echo "<br>";
    			
    			echo rand(1, 99999);

    	}


    }


}

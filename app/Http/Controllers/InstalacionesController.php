<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class InstalacionesController extends Controller{

    public function ConsultaInicial(){
    	

	    $instalaciones = DB::table('instalaciones')->get();

	    return view('/home', ['Instalacioness' => $instalaciones]); 

			// return view('/home', compact($instalaciones));

    }
}

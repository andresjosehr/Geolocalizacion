<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PruebaController extends Controller{

 		public function index(){ 


 			 // $datos = DB::select('SELECT mt_time, SUM(mt_value) mt_value 
 			 // 						FROM log_biofiltro 
 			 // 							WHERE mt_time >= NOW() - INTERVAL 1 DAY 
 			 // 								AND mt_name="Biofiltro--Pozo.AIL87" 
 			 // 									GROUP BY HOUR(mt_time) ORDER BY mt_time ASC');
    		


    		// $datos = DB::table("log_biofiltro")
    		// ->where("mt_time", ">=", "NOW() - INTERVAL 1 DAY")
    		// ->where("mt_name", "=", "Biofiltro--Pozo.AIL87")
    		// 	->get();


 					 // $data = log_biofiltro::select(DB::raw("mt_time, mt_value"))
					// 		        ->groupBy("HOUR(mt_time)")
					// 		        ->orderBy('mt_time', 'ASC')
					// 		        ->get();


			$now = new \DateTime();
			$fecha = $now->format('d-m-Y H:i:s');;
			$nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
			$nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );

    		$datos = DB::table("log_biofiltro")
    		->select(DB::raw("mt_time"), DB::raw("mt_value"))
    		->where("mt_name", "=", "Biofiltro--Pozo.AIL87")
    		->where("mt_time", ">=", $nuevafecha)
    			->get();

    		// $datos=$datos->groupBy('HOUR(mt_time)');

    			return $datos;
					 		} 
 	} 

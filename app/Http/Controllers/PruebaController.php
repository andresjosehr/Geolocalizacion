<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PruebaController extends Controller{

 		public function index(){ 


            $now = new \DateTime();
            $fecha = $now->format('d-m-Y H:i:s');;
            $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );


            $datos = DB::connection('mysql2')
                ->table("mt_biofil01")
                ->select(DB::raw("mt_time, TIME(DATE_SUB(mt_time,INTERVAL (MINUTE(mt_time)%10) MINUTE)) as fecha, SUM(IFNULL(mt_time,0)) as suma"))
                // ->where("mt_name", "=", "Biofiltro--Pozo.AIL87")
                ->where("mt_time", ">=", $nuevafecha)
                ->groupBy("tiempo")
                ->orderBy("mt_time", "ASC")
                ->get();


               return $datos;
 		} 
 	} 

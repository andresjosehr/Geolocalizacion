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

            $status=$_POST["status"];
            


            $instalacion= DB::table("instalaciones")
                            ->where("id", $_POST["id_instalacion"])
                            ->first();


            if ($status==0) {
                $now = new \DateTime();
                $fecha = $now->format('d-m-Y H:i:s');;
                $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
                $nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );
            }

            if ($status==1) {
                $now = new \DateTime();
                $fecha = $now->format('d-m-Y H:i:s');;
                $nuevafecha = strtotime ( '-7 day' , strtotime ( $fecha ) ) ;
                $nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );
            }

            if ($status==2) {
                $now = new \DateTime();
                $fecha = $now->format('d-m-Y H:i:s');;
                $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
                $nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );
            }

            if ($status==0 || $status==1 || $status==2) {


                $datos = DB::connection('mysql2')
                ->table($instalacion->tabla_asociada)
                ->select(DB::raw("mt_time, TIME(DATE_SUB(mt_time,INTERVAL (MINUTE(mt_time)%10) MINUTE)) as fecha, SUM(IFNULL(mt_time,0)) as valor"))
                ->where("mt_name", "=", $instalacion->datos)
                ->where("mt_time", ">=", $nuevafecha)
                ->groupBy('mt_time')
                ->orderBy("mt_time", "ASC")
                ->get();
                
            }

            if ($status==3) {

              $fecha_inicio=$_POST["fecha_inicio"];
              $fecha_fin=$_POST["fecha_fin"];
              $id_instalacion = $_POST["id_instalacion"];

              ?><script>
                alert("<?php echo $id_instalacion ?>")
                alert("<?php echo $fecha_inicio ?>")
                alert("<?php echo $fecha_fin ?>")
              </script><?php

                $datos = DB::connection('mysql2')
                ->table($instalacion->tabla_asociada)
                ->select(DB::raw("mt_time, TIME(DATE_SUB(mt_time,INTERVAL (MINUTE(mt_time)%10) MINUTE)) as fecha, SUM(IFNULL(mt_time,0)) as valor"))
                ->where("mt_name", "=", $instalacion->datos)
                ->where("mt_time", ">=", $fecha_inicio)
                ->where("mt_time", "<=", $fecha_fin)
                ->groupBy('mt_time')
                ->orderBy("mt_time", "ASC")
                ->get();
                
            }


                $UltimaMedicion = DB::connection('mysql2')
                 ->table($instalacion->tabla_asociada)
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

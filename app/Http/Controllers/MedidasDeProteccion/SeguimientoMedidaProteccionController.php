<?php

namespace App\Http\Controllers\MedidasDeProteccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\MedidasDeProteccion\SeguimientoMedidaProteccion;
use App\MedidasDeProteccion\MedidaDeProteccion;

use App\MedidasDeProteccion\FraccionesSeguimientoMedida;

use App\MedidasDeProteccion\AudienciaMedida;
use DB;
use Illuminate\Support\Carbon;

use App\MedidasDeProteccion\EvidenciaMedidaProteccion ;

class SeguimientoMedidaProteccionController extends Controller


{


    public function index (){

        $medidas_de_proteccion=MedidaDeProteccion::
        where('aceptada','=',1)
        ->where('id','>',1)
        ->get();
        
        return view('MedidasDeProteccion.medidasAceptadas',compact('medidas_de_proteccion'));
    }
    public  function store(Request $request){

    
        DB::beginTransaction();

        

        $seguimiento = new SeguimientoMedidaProteccion;
        $seguimiento->folio=$this->generarFolio();
        $seguimiento->fecha=$request->fecha_seguimiento;
        $seguimiento->nombre_mp_otorga=$request->nombre_mp;
        $seguimiento->nombre_agresor=$request->nombre_agresor;
        $seguimiento->duracion=$request->duracion;
        $seguimiento->fecha_notificacion=$request->fecha_notificacion_imputado;
        $seguimiento->numero_oficio=$request->numero_oficio;
        $seguimiento->incidencias=$request->incidencias;
        $seguimiento->medida_de_proteccion_id=$request->idMedidaProteccion;
     
        $seguimiento->save();

        $idSeguimiento =$seguimiento->id;

        $audiencia=new AudienciaMedida;
        $audiencia->fecha=$request->fecha_audiencia;
        $audiencia->resultado=$request->resultado;
        $audiencia->antecedente_medida=$request->antecedente_medida;
        $audiencia->antecedente_denuncia_medida=$request->antecedente_denuncia_medida;
        $audiencia->seguimiento_id=$idSeguimiento;
        $audiencia->save();
        $idAudiencia= $audiencia->id;
       

        $medida= MedidaDeProteccion::find($request->idMedidaProteccion);
        $medida->aceptada=1;
        $medida->update();


        $cont1=0;
        $fraccionServicios=$request->input('fraccionServicio');

        while($cont1< count($fraccionServicios))
        {
            $medida_delitos=new FraccionesSeguimientoMedida;
            $medida_delitos->seguimiento_id=$idSeguimiento;
            $medida_delitos->fracciones_id=$fraccionServicios[$cont1];
            $medida_delitos->save();
            $cont1=$cont1+1; 
        }



        DB::commit();

    

        $medidas_de_proteccion=MedidaDeProteccion::
        where('aceptada','=',0)
        ->where('id','>',1)
        ->get();

        return view('MedidasDeProteccion.medidasAceptadas',compact('medidas_de_proteccion'))->with('flash', 
        'Registros Actualizados.');

    }

    public function generarFolio(){
        $ultimoIdSeguimiento= SeguimientoMedidaProteccion::latest('id')->first();
        $folio="";
        $today = Carbon::now()->format('Y');
        if(SeguimientoMedidaProteccion::latest('id')->first() != null)
        {
          
            $ultimoIdSeguimiento= intval($ultimoIdSeguimiento->id)+1;
            
            
            $folio= "0".$ultimoIdSeguimiento."/".$today;
        }
        else {
            $folio= "01/".$today;
        }
        return $folio;
    }

    public function show($id){

        $medida_de_proteccion=MedidaDeProteccion::
         where('id',$id) 
         ->first();
   
   
         $evidencias = EvidenciaMedidaProteccion ::where('medida_de_proteccion_id', '=', $id)->get();
   
         return view('MedidasDeProteccion.segumiento_detalles',
               compact('medida_de_proteccion','evidencias'));
       }
}
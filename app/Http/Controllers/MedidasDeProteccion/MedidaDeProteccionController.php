<?php

namespace App\Http\Controllers\MedidasDeProteccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\AreaServicio;
use App\Admin\CategoriasLeyDeProteccion;
use App\Admin\Crimen;
use App\Admin\Distrito;
use App\Admin\Municipio;
use App\Admin\Estado;
use App\Admin\GrupoVulnerable;
use App\Admin\LeyesDeProteccion;
use App\Admin\Nacionalidad;
use App\Admin\Ocupacion;
use App\Admin\Servicio;
use App\Admin\Usuario;
use Mail;
use App\Mail\MedidaDeProteccionRecibida;
use Illuminate\Support\Carbon;
use App\MedidasDeProteccion\MedidaDeProteccion;
use App\MedidasDeProteccion\Testigo;
use App\MedidasDeProteccion\PesonaDeConfianza;
use App\MedidasDeProteccion\MedidaProteccionDescripcion;
use App\MedidasDeProteccion\PersonaDeConfianza;
use App\MedidasDeProteccion\TestigoGrupoVulnerable;
use App\MedidasDeProteccion\CrimenesMedidaDeProteccion;
use App\MedidasDeProteccion\ServicioMedidaDeProteccion;
use App\MedidasDeProteccion\EvidenciaMedidaProteccion ;


use DB;


class MedidaDeProteccionController extends Controller
{



    public function index(){

        $medidas_de_proteccion=MedidaDeProteccion::
        where('aceptada','=',0)
        ->where('id','>',1)
        ->get();
        return view('MedidasDeProteccion.index',
        compact('medidas_de_proteccion'));  
    
    }



    public function create(){
        $areasServicio=AreaServicio::get();
        $crimenes=Crimen::get();
        $distritos=Distrito::get();
        $municipios=Municipio::get();
        $nacionalidades=Nacionalidad::get();
        $ocupaciones=Ocupacion::get();
        $servicios=Servicio::get();
        $usuarios=Usuario::get();
        $grupos_vulnerables=GrupoVulnerable::get();
        $leyes=LeyesDeProteccion::get();
        $categorias= CategoriasLeyDeProteccion::get();

        $ultimoIdMedida = MedidaDeProteccion::latest('id')->first();
        return view('MedidasDeProteccion.medidaProteccion',
        compact(
            'areasServicio',
            'crimenes',
            'distritos',
            'municipios',
            'nacionalidades',
            'ocupaciones',
            'servicios',
            'usuarios',
            'grupos_vulnerables',
            'categorias',
            'leyes',
            'ultimoIdMedida'
        ));
    }


    public function store(Request $request)
    {
        
     

        DB::beginTransaction();



        $medida_proteccion= new MedidaDeProteccion;
        $medida_proteccion->carpeta= $request->carpeta;
        $medida_proteccion->causa_penal= $request->causaPenal;
        $medida_proteccion->municipio_id= (json_decode($request->input('municipio_carpeta'))->id);;
        $medida_proteccion->distrito_id=(json_decode($request->input('distrito'))->id);
        $medida_proteccion->fiscal= $request->fiscal;
        $medida_proteccion->fecha= $request->fecha_carpeta;
        $medida_proteccion->hora= $request->hora;
        $medida_proteccion->solicitante= $request->solicitante;
        $medida_proteccion->save();
        $idMedidaProteccion=$medida_proteccion->id;
     

        $testigo = new Testigo;
        $testigo->nombre=$request->nombre_involucrado;
        $testigo->edad=$request->edad;
        $testigo->nacionalidad_id=(json_decode($request->input('nacionalidad'))->id);
        $testigo->ocupacion_id=(json_decode($request->input('ocupacion'))->id);;
        $testigo->domicilio=$request->domicilio_testigo;
        $testigo->usuario_id=(json_decode($request->input('usuario'))->id);
        $testigo->correo=$request->correo_involucrado;
        $testigo->telefono=$request->telefono;
        $testigo->medida_de_proteccion_id= $idMedidaProteccion;
        $testigo->save();
        $testigoId=$testigo->id;

        $persona_confianza= new PersonaDeConfianza;
        $persona_confianza->nombre=$request->nombre_persona_confianza;
        $persona_confianza->telefono=$request->telefono_confianza;
        $persona_confianza->domicilio=$request->domicilio_confianza;
        $persona_confianza->medida_de_proteccion_id= $idMedidaProteccion;
        $persona_confianza->save();



        $medida_descripcion = new MedidaProteccionDescripcion;
        $medida_descripcion->medida_de_proteccion_id=$idMedidaProteccion;
        $medida_descripcion->descripcion = $request->descripcion;
        $medida_descripcion->save();

        $cont=0;
        $gruposVulnerables=$request->input('gruposVulnerables');
        while($cont< count($request->input('gruposVulnerables')))
        {
            $medida_gvulnerable=new TestigoGrupoVulnerable;
            $medida_gvulnerable->testigo_id=$testigoId;
            $medida_gvulnerable->grupo_vulnerable_id= json_decode($gruposVulnerables[$cont])->id;
            $medida_gvulnerable->save();
            $cont=$cont+1; 
        }

        $cont=0;
        $cont1=0;
        $cont2=0;
        $gruposVulnerables=$request->input('gruposVulnerables');
        $delitos=$request->input('delito');
        $servicios=$request->get('servicio');


       // return count($servicios);

       while($cont2< count($servicios))
       {
           $medida_servicios=new ServicioMedidaDeProteccion;
           $medida_servicios->medida_de_proteccion_id=$idMedidaProteccion;
           $medida_servicios->servicio_id= $servicios[$cont2];
           $medida_servicios->save();
           $cont2=$cont2+1; 
       }

       
        while($cont1< count($delitos))
        {
            $medida_delitos=new CrimenesMedidaDeProteccion;
            $medida_delitos->medida_de_proteccion_id=$idMedidaProteccion;
            $medida_delitos->crimen_id=json_decode($delitos[$cont1])->id;
            $medida_delitos->save();
            $cont1=$cont1+1; 
        }
        
       
        $evidencias = EvidenciaMedidaProteccion::
        select('imagen')
        ->where('predenuncia_id', '=', $idMedidaProteccion)
        ->get();
        $evidencias = $evidencias;

        Mail::to('medidas.proteccion@fiscaliazacatecas.gob.mx')->send(new MedidaDeProteccionRecibida($medida_proteccion,$evidencias));

        DB::commit();

        return redirect()->back()->with('flash', 
        'Su informacion ha sido recibida, personal de la Fiscalía se pondrá en
         contacto contigo vía correo electrónico para dar respuesta e indicar el trámite conducente.');
      
    }

    public function show($id){

     $medida_de_proteccion=MedidaDeProteccion::
      where('id',$id) 
      ->first();


      $evidencias = EvidenciaMedidaProteccion ::where('medida_de_proteccion_id', '=', $id)->get();

      return view('MedidasDeProteccion.detalles',
            compact('medida_de_proteccion','evidencias'));
    }

    public function seguimiento($id){

        $areasServicio=AreaServicio::get();
        $crimenes=Crimen::get();
        $distritos=Distrito::get();
        $municipios=Municipio::get();
        $nacionalidades=Nacionalidad::get();
        $ocupaciones=Ocupacion::get();
        $servicios=Servicio::get();
        $usuarios=Usuario::get();
        $grupos_vulnerables=GrupoVulnerable::get();
        $leyes=LeyesDeProteccion::get();
        $categorias= CategoriasLeyDeProteccion::get();

        return view('MedidasDeProteccion.seguimiento'
        ,
        compact(
            'areasServicio',
            'crimenes',
            'distritos',
            'municipios',
            'nacionalidades',
            'ocupaciones',
            'servicios',
            'usuarios',
            'grupos_vulnerables',
            'categorias',
            'leyes',
            'id'
        ));
      }
}

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

Use App\MedidasDeProteccion\MedidaDeProteccion;
Use App\MedidasDeProteccion\Testigo;

class MedidaDeProteccionController extends Controller
{
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
            'leyes'
        ));
    }

    public function index(){
        return view('MedidasDeProteccion.index');
    }

    public function store(Request $request)
    {

        $medida_proteccion= new MedidaDeProteccion;
        $medida_proteccion->carpeta= $request->carpeta;
        $medida_proteccion->causa_penal= $request->causaPenal;
        $medida_proteccion->municipio_id= (json_decode($request->input('municipio_carpeta'))->id);;
        $medida_proteccion->distrito_id=(json_decode($request->input('distrito'))->id);
        $medida_proteccion->fiscal= $request->fiscal;
        $medida_proteccion->fecha= $request->fecha_carpeta;
        $medida_proteccion->hora= $request->hora;
        $medida_proteccion->solicitante= $request->solcitante;
        $medida_proteccion->save();

        $testigo = new Testigo;
        $testigo->nombre
        $testigo->edad
        $testigo->nacionalidad_id
        $testigo->ocupacion_id
        $testigo->correo
        $testigo->domicilio
        $testigo->usuario_id
        $testigo->nacionalidad
        $testigo->ocupacion
        $testigo->telefono
        $telefono->correo=






      
        return $request;
    /*
       Mail::to('medidas.proteccion@fiscaliazacatecas.gob.mx')->send(new MedidaDeProteccionRecibida($request));
       return redirect()->back()->with('flash', 
       'Su informacion ha sido recibida, personal de la Fiscalía se pondrá en contacto contigo vía correo electrónico para dar respuesta e indicar el trámite conducente.');
      */
       


      // return  view('MedidasDeProteccionRecibida',compact('request'));
    
      
    }

    public function show(){


      return view('MedidasDeProteccion.detalles');
    }

    public function seguimiento(){
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
            'leyes'
        ));
      }
}

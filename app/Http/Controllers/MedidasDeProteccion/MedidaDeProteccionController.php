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
use App\MedidasDeProteccion\Carpeta;
use App\MedidasDeProteccion\Involucrado;
Use App\MedidasDeProteccion\MedidaProteccion;
class MedidaDeProteccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

       //json_decode($request->input('municipio_carpeta'))->nombre;
       

     

       Mail::to('medidas.proteccion@fiscaliazacatecas.gob.mx')->send(new MedidaDeProteccionRecibida($request));
        //dd($request);
       
      return redirect()->back()->with('flash', 'Se ha recibido su informacion, personal de la Fiscalía se pondrá en contacto contigo vía correo electrónico para dar respuesta e indicar el trámite conducente.');;
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

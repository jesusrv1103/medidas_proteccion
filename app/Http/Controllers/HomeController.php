<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedidasDeProteccion\MedidaDeProteccion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $medidas_de_proteccion=MedidaDeProteccion::
        where('aceptada','=',0)
        ->where('id','>',1)
        ->get();
        return view('MedidasDeProteccion.index',
        compact('medidas_de_proteccion'));  
    }
}

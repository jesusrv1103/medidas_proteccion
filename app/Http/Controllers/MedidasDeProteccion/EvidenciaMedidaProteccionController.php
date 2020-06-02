<?php

namespace App\Http\Controllers\MedidasDeProteccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\MedidasDeProteccion\EvidenciaMedidaProteccion;

class EvidenciaMedidaProteccionController extends Controller
{
    public function store(Request $request)
    {
      
        $evidencia = request()->file('evidencia')->store('public');
        $evidenciaUrl= $evidencia;
        //$evidenciaUrl= Storage::url($evidencia);
        
        
        EvidenciaMedidaProteccion::create([
            'imagen' => $evidenciaUrl,
            'medida_de_proteccion_id' => $request->id
        ]);

        //esto es una prueba
    }

    public function destroy(EvidenciaMedidaProteccion $evidencia)
    {
        $evidencia->delete();
        $evidenciaPath = str_replace('storage','public',$evidencia->url);
        Storage::delete($evidenciaPath);
        return back()->with('flash', 'Evidencia eliminada');
    }
}

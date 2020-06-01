<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Fraccion;

class FraccionController extends Controller
{
    

    public function fraccionPorCategoria($idLey,$idCategoria){
        return Fraccion::where('ley_proteccion_id', $idLey)
        ->where('cat_ley_proteccion_id', $idCategoria)
        ->get();
    }
}

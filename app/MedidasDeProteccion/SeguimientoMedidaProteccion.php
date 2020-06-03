<?php

namespace App\MedidasDeProteccion;

use Illuminate\Database\Eloquent\Model;

use App\Admin\Fraccion;
use App\MedidasDeProteccion\MedidaDeProteccion;

class SeguimientoMedidaProteccion extends Model
{
    protected $table ="seguimiento_medidas_proteccion";


    public function fracciones()
    {
    	return $this->belongsToMany(Fraccion::class,'fracciones_seguimiento_medidas');
    }


    public function medida()
    {
      return $this->belongsTo(MedidaDeProteccion::class);
    }

    
}

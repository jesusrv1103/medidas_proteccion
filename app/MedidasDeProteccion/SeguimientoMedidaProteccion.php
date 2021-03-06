<?php

namespace App\MedidasDeProteccion;

use Illuminate\Database\Eloquent\Model;

use App\Admin\Fraccion;
use App\MedidasDeProteccion\MedidaDeProteccion;

use App\MedidasDeProteccion\AudienciaMedida;

class SeguimientoMedidaProteccion extends Model
{
    protected $table ="seguimiento_medidas_proteccion";


    public function fracciones()
    {
    	return $this->belongsToMany(Fraccion::class,'fracciones_seguimiento_medidas','seguimiento_id','fracciones_id');
    }


    public function medida()
    {
      return $this->belongsTo(MedidaDeProteccion::class);
    }


    public function audiencia()
    {
        return $this->hasOne(AudienciaMedida::class,'seguimiento_id', 'id');
    }



    
}

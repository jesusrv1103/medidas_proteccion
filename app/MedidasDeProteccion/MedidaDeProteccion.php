<?php

namespace App\MedidasDeProteccion;

use App\Admin\Distrito;
use Illuminate\Database\Eloquent\Model;

use App\Admin\Municipio;
use App\MedidasDeProteccion\Testigo;
use App\Admin\Crimen;
use App\Admin\Servicio;
use App\Admin\AreaServicio;

use App\MedidasDeProteccion\PersonaDeConfianza;
use App\MedidasDeProteccion\SeguimientoMedidaProteccion;

use App\MedidasDeProteccion\MedidaProteccionDescripcion;


class MedidaDeProteccion extends Model
{
    protected $table="medidas_de_proteccion";


  

    public function delitos()
    {
    	return $this->belongsToMany(Crimen::class,'crimenes_medidas_de_proteccion');
    }



    public function testigo()
    {
        return $this->hasOne(Testigo::class,'medida_de_proteccion_id', 'id');
    }


    public function municipio()
    {
        return $this->belongsTo(Municipio::class,'municipio_id');
    }


    public function distrito()
    {
        return $this->belongsTo(Distrito::class,'distrito_id');
    }

    


    public function persona_confianza()
    {
        return $this->hasOne(PersonaDeConfianza::class,'medida_de_proteccion_id', 'id');
    }


    public function servicios_solicita()
    {
        return $this->belongsToMany(Servicio::class,'servicio_medidas_de_proteccion');
    }


    public function area_servicio($id=1){
       return AreaServicio::
        where('id',$id)
        ->first();
      
    }



    public function seguimiento()
    {
        return $this->hasOne(SeguimientoMedidaProteccion::class, 'medida_de_proteccion_id', 'id');
    }


    public function descripcion()
    {
        return $this->hasOne(MedidaProteccionDescripcion::class,'medida_de_proteccion_id', 'id');
    }


  

  

}

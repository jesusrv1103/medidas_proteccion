<?php

namespace App\MedidasDeProteccion;

use App\Admin\Distrito;
use Illuminate\Database\Eloquent\Model;

use App\Admin\Municipio;
use App\MedidasDeProteccion\Testigo;
use App\Admin\Crimen;

class MedidaDeProteccion extends Model
{
    protected $table="medidas_de_proteccion";


  

    public function delitos()
    {
    	return $this->belongsToMany(Crimen::class,'crimenes_medidas_de_proteccion');
    }



    public function testigo()
    {
        return $this->belongsTo(Testigo::class,'testigo_id');
    }


    public function municipio()
    {
        return $this->belongsTo(Municipio::class,'municipio_id');
    }


    public function distrito()
    {
        return $this->belongsTo(Distrito::class,'distrito_id');
    }


  

}

<?php

namespace App\MedidasDeProteccion;


use Illuminate\Database\Eloquent\Model;
use App\Admin\GrupoVulnerable;

class MedidaDeProteccion extends Model
{
    protected $table="medidas_de_proteccion";


    public function grupos_vulnerables()
    {
    	return $this->belongsToMany(GrupoVulnerable::class,'g_vulnerable_m_proteccion');
    }


  

}

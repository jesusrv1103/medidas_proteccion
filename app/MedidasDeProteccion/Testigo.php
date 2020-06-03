<?php

namespace App\MedidasDeProteccion;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Usuario;
use App\Admin\Ocupacion;
use App\Admin\Nacionalidad;
use App\Admin\GrupoVulnerable;

class Testigo extends Model
{
    public function grupos_vulnerables()
    {
    	return $this->belongsToMany(GrupoVulnerable::class,'testigo_grupos_vulnerables');
    }


    
    public function nacionalidad()
    {
        return $this->belongsTo(Nacionalidad::class,'nacionalidad_id');
    }


    public function ocupacion()
    {
        return $this->belongsTo(Ocupacion::class,'ocupacion_id');
    }


    public function  usuario()
    {
        return $this->belongsTo(Usuario::class,'usuario_id');
    }
}

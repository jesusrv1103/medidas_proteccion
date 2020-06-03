<?php

use Illuminate\Database\Seeder;
use App\MedidasDeProteccion\MedidaDeProteccion;

class MedidaDeProteccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedidaDeProteccion::create([
            'carpeta' => 'S/R',
            'causa_penal' => 'S/R',
            'municipio_id' => 1,
            'distrito_id' =>  1,
            'fiscal' => 'S/R',
            'solicitante' => 'S/R',
            'fecha' => '2010/12/09',
            'hora' => '10:23',
            'testigo_id'=>1,
            'persona_confianza_id' =>1,
        ]);
    }
}

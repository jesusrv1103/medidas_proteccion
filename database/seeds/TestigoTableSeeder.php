<?php

use Illuminate\Database\Seeder;

use App\MedidasDeProteccion\Testigo;


class TestigoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Testigo::create([
            'nombre' => 'S/R',
            'edad' => 10,
            'nacionalidad_id' => 1,
            'ocupacion_id' =>  1,
            'correo' => 'S/R',
            'domicilio' => 'S/R',
            'usuario_id' => 1,
        ]);
    }
}

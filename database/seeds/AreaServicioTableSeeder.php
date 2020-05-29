<?php

use App\Admin\AreaServicio;
use Illuminate\Database\Seeder;

class AreaServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //1
         AreaServicio::create([
            'nombre' => 'ÁREA DE TRABAJO SOCIAL',
        ]);
        //2
        AreaServicio::create([
            'nombre' => 'ÁREA LEGAL',
        ]);
        //3
        AreaServicio::create([
            'nombre' => 'ÁREA DE PSICLOGIA',
        ]);
    }
}

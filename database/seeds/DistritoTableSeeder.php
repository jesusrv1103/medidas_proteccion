<?php

use App\Admin\Distrito;
use Illuminate\Database\Seeder;

class DistritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //1
       Distrito::create([
            'nombre' => 'ZACATECAS',
        ]);
        //2
       Distrito::create([
            'nombre' => 'CALERA DE VÍCTOR ROSALES',
        ]);
        //3
       Distrito::create([
            'nombre' => 'OJOCALIENTE',
        ]);
        //4
       Distrito::create([
            'nombre' => 'VILLANUEVA',
        ]);
        //5
       Distrito::create([
            'nombre' => 'JEREZ DE GARCÍA SALINAS',
        ]);

        //6
       Distrito::create([
            'nombre' => 'FRESNILLO DE GONZÁLEZ ECHEVERRÍA',
        ]);
        //7
       Distrito::create([
            'nombre' => 'RIO GRANDE',
        ]);
        //8
       Distrito::create([
            'nombre' => 'SOMBRERETE',
        ]);

        //9
       Distrito::create([
            'nombre' => 'MIGUEL AUZA',
        ]);

        //10
       Distrito::create([
            'nombre' => 'CONCEPCIÓN DEL ORO',
        ]);

        //11
       Distrito::create([
            'nombre' => 'PINOS',
        ]);

        //12
       Distrito::create([
            'nombre' => 'LORETO',
        ]);
        //13
       Distrito::create([
            'nombre' => 'JALPA',
        ]);
        //14
       Distrito::create([
            'nombre' => 'JUCHIPILA',
        ]);
        //15
       Distrito::create([
            'nombre' => 'TLALTENANGO DE SÁNCHEZ ROMÁN',
        ]);
       Distrito::create([
            'nombre' => 'TEUL DE GONZÁLEZ ORTEGA',
        ]);
       Distrito::create([
            'nombre' => 'VALPARAÍSO',
        ]);

       Distrito::create([
            'nombre' => 'NOCHISTLÁN DE MEJÍA',
        ]);
    }
}

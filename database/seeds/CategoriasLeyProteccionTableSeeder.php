<?php

use App\Admin\CategoriasLeyDeProteccion;
use Illuminate\Database\Seeder;

class CategoriasLeyProteccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriasLeyDeProteccion::create([
            'nombre' => 'General',
        ]);

        CategoriasLeyDeProteccion::create([
            'nombre' => 'Órdenes de Protección de Emergencia',
        ]);

        CategoriasLeyDeProteccion::create([
            'nombre' => 'Órdenes de Protección Preventivas',
        ]);

        CategoriasLeyDeProteccion::create([
            'nombre' => 'Órdenes de protección de naturaleza civil',
        ]);

    }
}

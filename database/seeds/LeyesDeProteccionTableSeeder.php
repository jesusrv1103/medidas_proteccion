<?php

use App\Admin\LeyesDeProteccion;
use Illuminate\Database\Seeder;

class LeyesDeProteccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeyesDeProteccion::create([
            'nombre' => 'Artículo 137 del Código Nacional de Procedimientos Penales',
        ]);

        LeyesDeProteccion::create([
            'nombre' => 'Artículo 12 de la Ley para la Protección a Personas que Intervienen en los Procedimientos Penales en el Estado de Zacatecas',
        ]);

        LeyesDeProteccion::create([
            'nombre' => 'Ley General de Acceso de las Mujeres a una Vida Libre de Violencia',
        ]);

        LeyesDeProteccion::create([
            'nombre' => 'Órdenes de protección preventivas',
        ]);

        LeyesDeProteccion::create([
            'nombre' => 'Órdenes de protección de naturaleza civil',
        ]);
    }
}

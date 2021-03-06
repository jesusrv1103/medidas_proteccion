<?php

use App\Admin\GrupoVulnerable;
use Illuminate\Database\Seeder;

class GrupoVulnerableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        GrupoVulnerable::create([
            'nombre' => 'Ninguno',
        ]);


        GrupoVulnerable::create([
            'nombre' => 'Mujeres',
        ]);

       GrupoVulnerable::create([
            'nombre' => 'Niñas, Niños y Adolescentes',
        ]);

       GrupoVulnerable::create([
            'nombre' => 'Comunidad LGBTTTI',
        ]);

       GrupoVulnerable::create([
            'nombre' => 'Personas Indígenas',
        ]);

       GrupoVulnerable::create([
            'nombre' => 'Migrantes',
        ]);

       GrupoVulnerable::create([
            'nombre' => 'Personas con Discapacidad',
        ]);

        GrupoVulnerable::create([
            'nombre' => 'Personas con Problema de Salud',
        ]);

        GrupoVulnerable::create([
            'nombre' => 'Periodistas y Defensores Civiles',
        ]);

    }
}

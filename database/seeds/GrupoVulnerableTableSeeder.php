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
            'nombre' => 'Mujeres',
        ]);

       GrupoVulnerable::create([
            'nombre' => 'Niñas, Niños y Adolescentes',
        ]);

       GrupoVulnerable::create([
            'nombre' => 'Comunidad LGBTTTIQ',
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

    }
}

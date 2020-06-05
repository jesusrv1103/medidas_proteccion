<?php

use Illuminate\Database\Seeder;

use App\MedidasDeProteccion\PersonaDeConfianza;

class PersonaDeConfianzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonaDeConfianza::create([
            'nombre' => 'S/R',
            'telefono' => 'S/R',
            'domicilio' => 'S/R',
            
        ]);
    }
}

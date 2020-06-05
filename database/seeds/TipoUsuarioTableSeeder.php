<?php

use Illuminate\Database\Seeder;
use App\TipoUsuario;

class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create([
            'nombre' => 'Administrador',
        ]);

         TipoUsuario::create([
            'nombre' => 'M.P',
        ]);

        
    }
}

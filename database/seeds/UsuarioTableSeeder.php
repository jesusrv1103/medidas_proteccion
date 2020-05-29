<?php

use App\Admin\Usuario;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //1
        Usuario::create([
            'nombre' => 'VÍCTIMA DIRECTA',
        ]);
        //2
        Usuario::create([
            'nombre' => 'VÍCTIMAS INDIRECTAS',
        ]);
        //3
        Usuario::create([
            'nombre' => 'TESTIGO',
        ]);
        //4
        Usuario::create([
            'nombre' => 'IMPUTADA',
        ]);
        //5
        Usuario::create([
            'nombre' => 'FAMILIAR',
        ]);

        //6
        Usuario::create([
            'nombre' => 'PERÍTOS',
        ]);
        //7
        Usuario::create([
            'nombre' => 'JUEZ',
        ]);
        //8
        Usuario::create([
            'nombre' => 'POLICIA DE INVESTIGACÍON',
        ]);

        //9
        Usuario::create([
            'nombre' => 'FISCAL DEL MINISTERIO PÚBLICO',
        ]);

        //10
        Usuario::create([
            'nombre' => 'OTRO',
        ]);

      
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'user_name' => 'admin',
            'email' => 'admin@fiscaliazacatecas.gob.mx',
            'password' => Hash::make('SDGY669H0ME7'),
            'tipo_usuario_id' => 1,
            'area_id'   => 1,
            'activo' => 1,
        ]);
    }
}

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
            'name' => 'JESUS  RAMIREZ VARGAS',
            'user_name' => 'jramirezv',
            'email' => 'jramirezv@fiscaliazacatecas.gob.mx',
            'password' => Hash::make('ravj931103f33'),
            'tipo_usuario_id' => 1,
            'area_id'   => 1,
            'activo' => 1,
        ]);
    }
}

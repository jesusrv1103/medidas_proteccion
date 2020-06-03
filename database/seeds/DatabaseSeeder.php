<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadoTableSeeder::class);
        $this->call(MunicipioTableSeeder::class);
        $this->call(DistritoTableSeeder::class);
        $this->call(AreaServicioTableSeeder::class);
        $this->call(ServicioTableSeeder::class);
        $this->call(OcupacionTableSeeder::class);
        $this->call(NacionalidadTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(CrimenTableSeeder::class);
        $this->call(LeyesDeProteccionTableSeeder::class);
        $this->call(CategoriasLeyProteccionTableSeeder::class);
        $this->call(FraccionTableSeeder::class);
        $this->call(GrupoVulnerableTableSeeder::class);
        $this->call(TestigoTableSeeder::class);
        $this->call(PersonaDeConfianzaTableSeeder::class);
        $this->call(MedidaDeProteccionTableSeeder::class);

        
    }
}

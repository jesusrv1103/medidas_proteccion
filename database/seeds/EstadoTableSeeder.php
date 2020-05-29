<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            [
                "id"=> "1",
                "codigo"=> "01",
                "nombre"=> "Aguascalientes",
                "abreviacion"=> "Ags.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "2",
                "codigo"=> "02",
                "nombre"=> "Baja California",
                "abreviacion"=> "BC",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "3",
                "codigo"=> "03",
                "nombre"=> "Baja California Sur",
                "abreviacion"=> "BCS",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "4",
                "codigo"=> "04",
                "nombre"=> "Campeche",
                "abreviacion"=> "Camp.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "5",
                "codigo"=> "05",
                "nombre"=> "Coahuila de Zaragoza",
                "abreviacion"=> "Coah.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "6",
                "codigo"=> "06",
                "nombre"=> "Colima",
                "abreviacion"=> "Col.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "7",
                "codigo"=> "07",
                "nombre"=> "Chiapas",
                "abreviacion"=> "Chis.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "8",
                "codigo"=> "08",
                "nombre"=> "Chihuahua",
                "abreviacion"=> "Chih.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "9",
                "codigo"=> "09",
                "nombre"=> "Ciudad de M\u00e9xico",
                "abreviacion"=> "CDMX",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "10",
                "codigo"=> "10",
                "nombre"=> "Durango",
                "abreviacion"=> "Dgo.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "11",
                "codigo"=> "11",
                "nombre"=> "Guanajuato",
                "abreviacion"=> "Gto.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "12",
                "codigo"=> "12",
                "nombre"=> "Guerrero",
                "abreviacion"=> "Gro.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "13",
                "codigo"=> "13",
                "nombre"=> "Hidalgo",
                "abreviacion"=> "Hgo.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "14",
                "codigo"=> "14",
                "nombre"=> "Jalisco",
                "abreviacion"=> "Jal.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "15",
                "codigo"=> "15",
                "nombre"=> "M\u00e9xico",
                "abreviacion"=> "Mex.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "16",
                "codigo"=> "16",
                "nombre"=> "Michoac\u00e1n de Ocampo",
                "abreviacion"=> "Mich.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "17",
                "codigo"=> "17",
                "nombre"=> "Morelos",
                "abreviacion"=> "Mor.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "18",
                "codigo"=> "18",
                "nombre"=> "Nayarit",
                "abreviacion"=> "Nay.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "19",
                "codigo"=> "19",
                "nombre"=> "Nuevo Le\u00f3n",
                "abreviacion"=> "NL",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "20",
                "codigo"=> "20",
                "nombre"=> "Oaxaca",
                "abreviacion"=> "Oax.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "21",
                "codigo"=> "21",
                "nombre"=> "Puebla",
                "abreviacion"=> "Pue.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "22",
                "codigo"=> "22",
                "nombre"=> "Quer\u00e9taro",
                "abreviacion"=> "Qro.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "23",
                "codigo"=> "23",
                "nombre"=> "Quintana Roo",
                "abreviacion"=> "Q. Roo",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "24",
                "codigo"=> "24",
                "nombre"=> "San Luis Potos\u00ed",
                "abreviacion"=> "SLP",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "25",
                "codigo"=> "25",
                "nombre"=> "Sinaloa",
                "abreviacion"=> "Sin.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "26",
                "codigo"=> "26",
                "nombre"=> "Sonora",
                "abreviacion"=> "Son.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "27",
                "codigo"=> "27",
                "nombre"=> "Tabasco",
                "abreviacion"=> "Tab.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "28",
                "codigo"=> "28",
                "nombre"=> "Tamaulipas",
                "abreviacion"=> "Tamps.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "29",
                "codigo"=> "29",
                "nombre"=> "Tlaxcala",
                "abreviacion"=> "Tlax.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "30",
                "codigo"=> "30",
                "nombre"=> "Veracruz de Ignacio de la Llave",
                "abreviacion"=> "Ver.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "31",
                "codigo"=> "31",
                "nombre"=> "Yucat\u00e1n",
                "abreviacion"=> "Yuc.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> "32",
                "codigo"=> "32",
                "nombre"=> "Zacatecas",
                "abreviacion"=> "Zac.",
                "estado"=> "activo",
                "created_at"=> now(),
                "updated_at"=> now()
            ]
        ]);
    }
}

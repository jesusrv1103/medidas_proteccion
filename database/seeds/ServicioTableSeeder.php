<?php

use App\Admin\Servicio;
use Illuminate\Database\Seeder;

class ServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        Servicio::create([
            'nombre' => 'REALIZACIÓN DE ESTUDIO SOCIAL',
            'area_id' => '1',
        ]);

        Servicio::create([
            'nombre' => 'REALIZACIÓN DE EVALUACIÓN SOCIO-ECONÓMICA',
            'area_id' => '1',
        ]);

        Servicio::create([
            'nombre' => 'REALIZACIÓN DE EVALUACIÓN SOCIO-ECONÓMICA PARA ESTABLECER LAS NECESIDADES DE ASISTENCIA Y PROTECCIÓN A PERSONA QUE INTERVIENE EN EL PROCESO PENAL.',
            'area_id' => '1',
        ]);

        Servicio::create([
            'nombre' => 'ACOMPAÑAMIENTO A LA VÍCTIMA AL RETIRO DE PERTENENCIAS EN CASO DE REUBICACIÓN',
            'area_id' => '1',
        ]);

        Servicio::create([
            'nombre' => 'ACOMPAÑAMIENTO PARA EL RECONOCIMIENTO DEL ÁREA DE INSPECCIÓN OCULAR',
            'area_id' => '1',
        ]);

        Servicio::create([
            'nombre' => 'ACOMPAÑAMIENTO A OTRAS INSTITUCIONES PÚBLICAS O PRIVADAS',
            'area_id' => '1',
        ]);

        Servicio::create([
            'nombre' => 'LOGÍSTICA PARA LAS AUDIENCIAS (ALIMENTACIÓN, HOSPEDAJE Y GASTOS DE TRANSPORTE).',
            'area_id' => '1',
        ]);


        Servicio::create([
            'nombre' => 'OTRO',
            'area_id' => '1',
        ]);


        //Area legal

        Servicio::create([
            'nombre' => 'ORIENTACIÓN LEGAL',
            'area_id' => '2',
        ]);

        Servicio::create([
            'nombre' => 'INFORMACIÓN SOBRE DERECHOS Y OBLIGACIONES',
            'area_id' => '2',
        ]);



        Servicio::create([
            'nombre' => 'SEGUIMIENTO A MEDIDAS DE PROTECCIÓN DE CASOS DE RELEVANCIA',
            'area_id' => '2',
        ]);



        Servicio::create([
            'nombre' => 'PREPARACIÓN LEGAL PARA ASISTIR A AUDIENCIAS',
            'area_id' => '2',
        ]);

        //Area de psicologia

        Servicio::create([
            'nombre' => 'ACOMPAÑAMIENTO Y/O CONTENCIÓN EN CRISIS',
            'area_id' => '3',
        ]);

        Servicio::create([
            'nombre' => 'ENTREVISTA PSICOLÓGICA',
            'area_id' => '3',
        ]);

        Servicio::create([
            'nombre' => 'SEGUIMIENTO DE CASOS DE RELEVANCIA',
            'area_id' => '3',
        ]);

        Servicio::create([
            'nombre' => 'ACOMPAÑAMIENTO A LA VÍCTIMA O TESTIGO EN RECONOCIMIENTO DE PERSONAS',
            'area_id' => '3',
        ]);

        Servicio::create([
            'nombre' => 'PREPARACIÓN EMOCIONAL PARA DECLARAR AUDIENCIAS',
            'area_id' => '3',
        ]);

        Servicio::create([
            'nombre' => 'APOYO PSICOLÓGICO EN EL DESARROLLO DE AUDIENCIAS QUE SE REQUIERAN',
            'area_id' => '3',
        ]);

        Servicio::create([
            'nombre' => 'OTRO',
            'area_id' => '3',
        ]);


       
       



        
    }
}

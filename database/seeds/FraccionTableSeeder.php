<?php

use App\Admin\Fraccion;
use Illuminate\Database\Seeder;

class FraccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Artículo 137 del Código Nacional de Procedimientos Penales
        Fraccion::create([
            'nombre' => 'I.Prohibición de acercarse o comunicarse con la víctima u ofendido',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
            
        ]);


        Fraccion::create([
            'nombre' => 'II.Limitación para asistir o acercarse al domicilio de la víctima u ofendido o al lugar donde se encuentre',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'III.Separación inmediata del domicilio',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'IV.La entrega inmediata de objetos de uso personal y documentos de identidad de la víctima que tuviera en su posesión el probable responsable',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'V.La prohibición de realizar conductas de intimidación o molestia a la víctima u ofendido o a personas relacionados con ellos',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'VI.Vigilancia en el domicilio de la víctima u ofendido; VII. Protección policial de la víctima u ofendido',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'VII.Auxilio inmediato por integrantes de instituciones policiales, al domicilio en donde se localice o se encuentre la víctima u ofendido en el momento de solicitarlo',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);


        Fraccion::create([
            'nombre' => 'VIII.Traslado de la víctima u ofendido a refugios o albergues temporales, así como de sus descendientes',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);


        Fraccion::create([
            'nombre' => 'IX.El reingreso de la víctima u ofendido a su domicilio, una vez que se salvaguarde su seguridad',
            'ley_proteccion_id' => '1',
            'cat_ley_proteccion_id' => '1',
        ]);


        
        //Artículo 12 de la Ley para la Protección a Personas que Intervienen en los Procedimientos Penales en el Estado de Zacatecas
        Fraccion::create([
            'nombre' => 'I. La custodia personal o del domicilio, mediante la vigilancia directa o a través de otros medios',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);


        Fraccion::create([
            'nombre' => 'II. El desalojo del imputado o sentenciado del domicilio de la persona protegida, cuando se trate de delitos sexuales o de violencia familiar',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'III. El alojamiento temporal en lugares reservados o en centros de protección',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);


        Fraccion::create([
            'nombre' => 'IV. La prevención a las personas que generen un riesgo para que se abstengan de acercarse a cualquier lugar donde se encuentre la persona protegida',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'V. El traslado con custodia a las dependencias donde se deba practicar alguna diligencia o a su domicilio',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'VI. Las consultas telefónicas periódicas de la policía a la persona protegida',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'VII. Los botones de emergencia o seguridad, en el domicilio de la persona protegida',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'VIII. El aseguramiento del domicilio de la persona protegida',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'IX. El suministro de los recursos económicos para alojamiento, transporte, alimentos, comunicación, atención sanitaria, mudanza, reinserción laboral, servicios de educación, trámites, sistemas de seguridad, acondicionamiento de vivienda y demás gastos indispensables, dentro o fuera del Estado o del país, mientras la persona beneficiaria se encuentre imposibilitada de obtenerlos por sus propios medios',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

        Fraccion::create([
            'nombre' => 'XI. El traslado con custodia de los sujetos protegidos',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);


        Fraccion::create([
            'nombre' => 'XII. La entrega inmediata de objetos de uso personal y documentos de identidad que tuviera en su posesión el imputado',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);


        Fraccion::create([
            'nombre' => 'XIII. Proveer los servicios necesarios para asistir a la persona protegida',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
            
        ]);

        Fraccion::create([
            'nombre' => 'XIV. El uso de métodos que imposibiliten la identificación visual o auditiva de la persona protegida, en las diligencias en que intervenga. La aplicación de esta medida no deberá coartar la defensa adecuada del imputado.',
            'ley_proteccion_id' => '2',
            'cat_ley_proteccion_id' => '1',
        ]);

         //Artículo 12 Ley General de Acceso de las Mujeres a una Vida Libre de Violencia
         //Órdenes de protección de emergencia:
         Fraccion::create([
            'nombre' => 'I. Desocupación inmediata por el agresor del domicilio conyugal o donde habite la víctima, independientemente de la acreditación de propiedad o posesión del inmueble, aún en los casos de arrendamiento del mismo',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '2',
            
        ]);


        Fraccion::create([
            'nombre' => 'II.Prohibición inmediata al probable responsable de acercarse al domicilio, lugar de trabajo, de estudios, del domicilio de las y los ascendientes y descendientes o cualquier otro que frecuente la víctima',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '2',
            
        ]);

        Fraccion::create([
            'nombre' => 'III.Reingreso de la víctima al domicilio, una vez que se salvaguarde de su seguridad',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '2',
            
        ]);

        Fraccion::create([
            'nombre' => 'IV.Prohibición de intimidar o molestar a la víctima en su entorno social, así como a cualquier integrante de su familia',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '2',
            
        ]);

        //Órdenes de protección preventivas:

        Fraccion::create([
            'nombre' => 'I.Retención y guarda de armas de fuego propiedad del Agresor o de alguna institución privada de seguridad, independientemente si las mismas se encuentran registradas conforme a la normatividad de la materia. Es aplicable lo anterior a las armas punzocortantes y punzocontundentes que independientemente de su uso, hayan sido empleadas para amenazar o lesionar a la víctima',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);

        Fraccion::create([
            'nombre' => 'II.Inventario de los bienes muebles e inmuebles de propiedad común, incluyendo los implementos de trabajo de la víctima',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);

        Fraccion::create([
            'nombre' => 'III.Uso y goce de bienes muebles que se encuentren en el inmueble que sirva de domicilio de la víctima',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);


        Fraccion::create([
            'nombre' => 'III.Uso y goce de bienes muebles que se encuentren en el inmueble que sirva de domicilio de la víctima',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);


        Fraccion::create([
            'nombre' => 'IV.Acceso al domicilio en común, de autoridades policíacas o de personas que auxilien a la Víctima a tomar sus pertenencias personales y las de sus hijas e hijos',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);


        Fraccion::create([
            'nombre' => 'V.Entrega inmediata de objetos de uso personal y documentos de identidad de la víctima y de sus hijas e hijos',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);


        Fraccion::create([
            'nombre' => 'VI.Auxilio policíaco de reacción inmediata a favor de la víctima, con autorización expresa de ingreso al domicilio donde se localice o se encuentre la Víctima en el momento de solicitar el auxilio',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);


        Fraccion::create([
            'nombre' => 'VII.Brindar servicios reeducativos integrales especializados y gratuitos, con perspectiva de género al agresor en instituciones públicas debidamente acreditadas.',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);


          //Órdenes de protección de naturaleza civil: 
          Fraccion::create([
            'nombre' => 'I.Suspensión temporal al agresor del régimen de visitas y convivencia con sus descendientes',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);

        Fraccion::create([
            'nombre' => 'II.Prohibición al agresor de enajenar o hipotecar bienes de su propiedad cuando se trate del domicilio conyugal; y en cualquier caso cuando se trate de bienes de la sociedad conyugal',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);

        Fraccion::create([
            'nombre' => 'III.Posesión exclusiva de la víctima sobre el inmueble que sirvió de domicilio',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);

        Fraccion::create([
            'nombre' => 'IV.Embargo preventivo de bienes del agresor, que deberá inscribirse con carácter temporal en el Registro Público de la Propiedad, a efecto de garantizar las obligaciones alimentarias',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);

        Fraccion::create([
            'nombre' => 'V.Obligación alimentaria provisional e inmediata.',
            'ley_proteccion_id' => '3',
            'cat_ley_proteccion_id' => '3',
            
        ]);
    }
}

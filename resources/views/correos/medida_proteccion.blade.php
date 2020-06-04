<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medidas de Proteccion </title>
</head>

<body>

    <h1> Medidas de Proteccion</h1>
    <table>
        <tr>
            <th colspan="2">Datos de Medida de Proteccion</th>
        </tr>
        <tr>
            <td> Carpeta: </td>
            <td>{{$medida_proteccion->carpeta}} </td>
        </tr>



        <tr>
            <td>Causa Penal: </td>
            <td> {{$medida_proteccion->causa_penal}} </td>
        </tr>
        <tr>
            <td>Delitos: </td>
            <td>
                @foreach($medida_proteccion->delitos as $delito)
                {{$delito->nombre}}
                <br>
                @endforeach

            </td>
        </tr>


        <tr>
            <td>Municipio: </td>
            <td> {{$medida_proteccion->distrito->nombre}} </td>
        </tr>


        <tr>
            <td>Distritos: </td>
            <td>  {{$medida_proteccion->distrito->nombre}}</td>
        </tr>

        <tr>
            <td>Fiscal: </td>
            <td>{{$medida_proteccion->fiscal}}</td>
        </tr>


        <tr>
            <td>Fecha: </td>
            <td> {{$medida_proteccion->fecha}} </td>
        </tr>

        <tr>
            <td>Hora: </td>
            <td>   {{$medida_proteccion->hora}} </td>
        </tr>


        <tr>
            <td>Solicitante: </td>
            <td>  {{$medida_proteccion->solicitante}}</td>
        </tr>




    </table>


    <table>
        <tr>
            <th colspan="2">
                Datos de Víctima, Testigo o Diversa Persona que Intervenga en el Proceso Penal</th>
        </tr>
        <tr>
            <td> Nombre: </td>
            <td>    {{$medida_proteccion->testigo->nombre}}</td>
        </tr>


        <tr>
            <td> Edad: </td>
            <td>  {{$medida_proteccion->testigo->edad}} </td>
        </tr>

        <tr>
            <td> Edad: </td>
            <td>  {{$medida_proteccion->testigo->domicilio}} </td>
        </tr>

        <tr>
            <td> Nacionalidad: </td>
            <td> {{$medida_proteccion->testigo->nacionalidad->nombre}} </td>
        </tr>


        <tr>
            <td> Ocupacion: </td>
            <td>    {{$medida_proteccion->testigo->ocupacion->nombre}} </td>
        </tr>


        <tr>
            <td>Tipo de Usuario: </td>
            <td> {{$medida_proteccion->testigo->usuario->nombre}} </td>
        </tr>

        <tr>
            <td>Telefono: </td>
            <td> {{$medida_proteccion->testigo->telefono}}</td>
        </tr>

        <tr>
            <td>Correo electrónico: </td>
            <td>{{$medida_proteccion->testigo->correo}}</td>
        </tr>


        <tr>
            <td>Nombre Persona de confianza: </td>
            <td>   {{$medida_proteccion->persona_confianza->nombre}}</td>
        </tr>


        <tr>
            <td>Telefono Persona de confianza: </td>
            <td>  {{$medida_proteccion->persona_confianza->telefono}}</td>
        </tr>

        <tr>
            <td>Domicilio Persona de confianza: </td>
            <td>  {{$medida_proteccion->persona_confianza->domicilio}}</td>
        </tr>

     
        @php
        $areaId=$medida_proteccion->servicios_solicita[0]->area_id;
        @endphp



        <tr>
            <td>Area del servicio que solicita: </td>
            <td>   {{$medida_proteccion->area_servicio($areaId)->nombre}} </td>
        </tr>

        <tr>
            <td>Servicio que solicita: </td>
            <td>   
                @foreach($medida_proteccion->servicios_solicita as $servicio)
                {{$servicio->nombre}}
                <br>
                @endforeach</td>
        </tr>



    </table>

    <table>
        <tr>Relato Breve de los Hechos</tr>
        <tr><p>{{$medida_proteccion->descripcion->descripcion}}</p></tr>
    </table>




</body>

</html>
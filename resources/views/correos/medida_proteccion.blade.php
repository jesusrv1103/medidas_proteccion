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
            <th colspan="2">Datos de Carpeta de Investigación</th>
        </tr>
        <tr>
            <td> Nombre: </td>
            <td>{{$request->carpeta}} </td>
        </tr>

        <tr>
            <td>Causa Penal: </td>
            <td>{{$request->causaPenal}}  </td>
        </tr>


        <tr>
            <td>Municipio: </td>
            <td>{{json_decode($request->input('municipio_carpeta'))->nombre}}  </td>
        </tr>


        <tr>
            <td>Distritos: </td>
            <td>{{json_decode($request->input('distrito'))->nombre}}  </td>
        </tr>

        <tr>
            <td>Fecha: </td>
            <td>{{$request->fecha_carpeta}}  </td>
        </tr>

        <tr>
            <td>Solicitante: </td>
            <td>{{$request->solicitante}}  </td>
        </tr>


        <tr>
            <td>Fiscal: </td>
            <td>{{$request->fiscal}}  </td>
        </tr>

        <tr>
            <td>Tipo de Usuario: </td>
            <td>{{json_decode($request->input('usuario'))->nombre}} </td>
        </tr>
       
    </table>


    <table>
        <tr>
            <th colspan="2">
                Datos de Víctima, Testigo o Diversa Persona que Intervenga en el Proceso Penal</th>
        </tr>
        <tr>
            <td> Nombre: </td>
            <td>{{$request->nombre_involucrado}}</td>
        </tr>


        <tr>
            <td> Edad: </td>
            <td>{{$request->edad}} </td>
        </tr>

        <tr>
            <td> Nacionalidad: </td>
            <td>{{json_decode($request->input('nacionalidad'))->nombre}} </td>
        </tr>


        <tr>
            <td> Ocupacion: </td>
            <td>{{json_decode($request->input('ocupacion'))->nombre}} </td>
        </tr>

        <tr>
            <td>Telefono: </td>
            <td>{{$request->telefono}}</td>
        </tr>

        <tr>
            <td>Telefono Persona de confianza: </td>
            <td>{{$request->telefono_confianza}}</td>
        </tr>

        <tr>
            <td>Correo electrónico: </td>
            <td>{{$request->correo_involucrado}}</td>
        </tr>

        <tr>
            <td>Delito: </td>
            <td>{{json_decode($request->input('delito'))->nombre}} </td>
        </tr>

        <tr>
            <td>Area del servicio que solicita: </td>
            <td>{{json_decode($request->input('area'))->nombre}} </td>
        </tr>

        <tr>
            <td>Servicio que solicita: </td>
            <td>{{json_decode($request->input('servicio'))->nombre}} </td>
        </tr>
        
        
       
    </table>
  


  
</body>

</html>
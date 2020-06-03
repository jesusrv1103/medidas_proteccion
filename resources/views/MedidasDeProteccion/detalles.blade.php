@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Medidas de Proteccion
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Medida de Proteccion</a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-invoice-2">
                <div class="kt-invoice__head">
                    <div class="kt-invoice__container">
                        <div class="kt-invoice__brand">
                            <h1 class="kt-invoice__title">Medida de Proteccion</h1>
                            <div href="#" class="kt-invoice__logo">
                                <img src="/assets/logos_fiscalia/original180x90.png" width="200px">
                                <span class="kt-invoice__desc">
                                    <span>Medida de proteccion de la carpeta: {{$medida_de_proteccion->carpeta}} </span>

                                </span>
                            </div>
                        </div>

                        <span>
                            <h3>Datos de la Medida de Proteccion</h3>
                        </span>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Carpeta: </strong>&nbsp;&nbsp;&nbsp;
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->carpeta}}
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Causa Penal: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->causa_penal}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Delitos: </strong>
                            </span>
                            <br>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                @foreach($medida_de_proteccion->delitos as $delito)
                                {{$delito->nombre}}
                                <br>
                                @endforeach
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Municipio: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->municipio->nombre}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Distrito : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->distrito->nombre}}
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Fiscal : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->fiscal}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Fecha : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->fecha}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Hora : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->hora}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Solicitate : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->solicitante}}
                            </span>
                        </div>



                        <br><br>
                        <span>
                            <h3>Datos de la Víctima, Testigo o Diversa Persona que Intervenga en el Proceso Penal</h3>
                        </span>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Nombre : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->testigo->nombre}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Edad : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->testigo->edad}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->testigo->domicilio}}
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Nacionalidad: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->testigo->nacionalidad->nombre}}

                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Ocupacion : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$medida_de_proteccion->testigo->ocupacion->nombre}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Grupos VUlnerables : </strong>
                            </span>
                            <br>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                @foreach($medida_de_proteccion->testigo->grupos_vulnerables as $grupo)
                                {{$grupo->nombre}}
                                <br>
                                @endforeach
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Telefono : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                4991058737
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Correo Electronico : </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                maria@gmail.com
                            </span>
                        </div>


                        <br><br>
                        <span>
                            <h3>Datos de Persona de Confianza</h3>
                        </span>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Telefono: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                4571072456
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                VILLANUEVA ZACATECAS CALLE EMILIANO ZAPATA 23
                            </span>
                        </div>


                        <br><br>
                        <span>
                            <h3>Datos Generales</h3>
                        </span>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Area del servicio que solicita </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                AREA DE TRABAJO SOCIAL
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Servicios: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                REALIZACIÓN DE ESTUDIO SOCIAL
                                <br>
                            </span>
                        </div>


                        <br><br>
                        <span>
                            <h3>Relato Breve de los Hechos:</h3>
                        </span>


                        <p>
                            
                        </p>







                    </div>
                </div>


                <div class="kt-invoice__container">
                    <p></p>
                </div>

                <div class="kt-invoice__container">

                    <span>
                        <h3>Evidencia</h3>
                    </span>

                    <h5>La evidencia cuenta con
                        2 imagenes
                    </h5>


                    <img src="/assets/media/blog/blog1.jpg" width="200px">

                    <img src="/assets//media/blog/blog2.jpg" width="200px">



                    <h5>La evidencia cuenta con
                        1 archivos pdf
                    </h5>



                    <a target="_blank" href="https://archivos.juridicas.unam.mx/www/bjv/libros/9/4032/4.pdf" class="btn btn-light-success">
                        <i class="flaticon-doc"></i>
                        Ver archivo 1


                    </a>









                    <h5>La evidencia cuenta con
                        1 video(s)
                    </h5>




                    <video width="320" height="240" controls>
                        <source src="https://youtu.be/yAoLSRbwxL8" type="video/mp4" controls>
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>









                </div>




                <div class="kt-invoice__actions">
                    <div class="kt-invoice__container">
                        <center>
                            <a href="{{route('medidas.proteccion.seguimiento')}}" class="btn btn-light-primary font-weight-bold mr-2">Dar seguimiento</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end:: Content -->
@push('styles')

<!--begin::Page Custom Styles(used by this page) -->
<link href="/assets/css/demo1/pages/invoices/invoice-2.css" rel="stylesheet" type="text/css" />



@endpush
@push('scripts')
<!--begin::Page Custom Styles(used by this page) -->
<script src="/assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush
@stop
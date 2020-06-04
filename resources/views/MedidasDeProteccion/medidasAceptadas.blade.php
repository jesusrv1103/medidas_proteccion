@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Medidas de Proteccion Aceptadas
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Listado de Medidas De Proteccion Aceptadas</a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand
                    flaticon2-send"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Medidas de Proteccion Aceptadas
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">

                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>

                    <tr>
                        <th>Folio</th>
                        <td>Agente M.P que la otorgo</td>
                        <th>Fecha de Emision
                            <br>  de la Medida</th>
                        <th>Delito</th>
                        <th>Nombre de la Victima</th>
                        <th>Duracion</th>
                        <th>No. Oficio</th>
                       
                        <th>Acciones </th>




                    </tr>
                </thead>
                <tbody>
                    @foreach($medidas_de_proteccion as $medida)
                    <tr>
                        <td>{{$medida->seguimiento->folio}}</td>
                        <td>{{$medida->seguimiento->nombre_mp_otorga}}</td>
                        <td>{{$medida->seguimiento->fecha}}</td>

                        <td> 
                            
                            @foreach($medida->delitos as $delito)
                                {{$delito->nombre}}
                                <br>
                            @endforeach
                        </td>
                        <td>{{$medida->testigo->nombre}}</td>
                            
                        <td>{{$medida->seguimiento->duracion}} dias</td>
                        <td> {{$medida->seguimiento->numero_oficio}}</td>
                    
                        <td>

                            <center>

                                <a href="{{route('seguimiento.medidas.detalles',$medida->id)}}" type="button"
                                    class="btn btn-outline-hover-info btn-elevate btn-icon"><i
                                        class="la la-eye"></i></a>

                            </center>

                        </td>


                    </tr>
                    @endforeach





                </tbody>
            </table>


            <!--end: Datatable -->
        </div>
    </div>

</div>


<!-- end:: Content -->
@push('styles')

<!--begin::Page Vendors Styles(used by this page) -->
<link href="/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


@endpush
@push('scripts')

<!--begin::Page Vendors(used by this page) -->
<script src="/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/datatables/advanced/row-callback.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush
@stop
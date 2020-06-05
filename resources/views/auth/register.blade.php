@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Medidas de Protección
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Medida de Protección</a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@stop
@section('content')
<!-- begin:: Content -->
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Seguimiento Medida de Protección
                        </h3>
                    </div>
                </div>



         

                <!--begin::Form-->
                <form class="kt-form" method="POST" action="{{route('seguimiento.proteccion.store')}}">
                {{ csrf_field() }}
                   
                </form>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

            <!--begin::Portlet-->


            <!--end::Portlet-->
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


@endpush
@stop
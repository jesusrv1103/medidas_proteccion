@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Usuarios
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Registrar usuario</a>

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
                            Registrar usuario
                        </h3>
                    </div>
                </div>





                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" method="POST" action="{{ route('register') }}">

                    {{ csrf_field() }}

                    <div class="kt-portlet__body">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Nombre:<span
                                    style="color:red;">*</span></label>
                            <div class="col-9">
                                <input class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" type="text" name="name"
                                    placeholder="Ejemplo: Arturo Avila Soto">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Nombre de Usuario:<span
                                    style="color:red;">*</span></label>
                            <div class="col-9">
                                <input class="form-control @error('user_name') is-invalid @enderror"  value="{{ old('user_name') }}" type="text"
                                    name="user_name" placeholder="Ejemplo: avilas">

                                @error('user_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Correo electronico:<span
                                    style="color:red;">*</span></label>
                            <div class="col-9">
                                <input class="form-control @error('email') is-invalid @enderror" name="email"
                                    type="email" placeholder="avila@fiscaliazacatecas.gob.mx"   value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">Tipo de usuario: <span
                                    style="color:red;">*</span></label>
                            <div class="col-9">
                                <select class="form-control @error('tipo_usuario') is-invalid @enderror kt-select2"
                                    id="kt_select2-tusuario" style="width: 100%" name="tipo_usuario">

                                    @foreach ($tipo_usuarios as $tipo_usuario)
                                    <option></option>
                                    <option value="{{$tipo_usuario->id}}">
                                        {{$tipo_usuario->nombre}}</option>
                                    @endforeach

                                </select>
                                <span class="form-text text-muted">Por favor selecciona
                                    el tipo de usuario.</span>
                                @error('tipo_usuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">Area: <span style="color:red;">*</span></label>
                            <div class="col-9">
                                <select class="form-control @error('area_id') is-invalid @enderror  kt-select2"
                                    id="kt_select2-area" style="width: 100%" name="area_id">

                                    @foreach ($areas as $area)
                                    <option value=""></option>
                                    <option value="{{$area->id}}">
                                        {{$area->nombre}}</option>
                                    @endforeach

                                </select>

                                <span class="form-text text-muted">Por favor selecciona
                                    el area a la que corresponde el usuario.</span>
                                @error('area_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Contraseña:<span
                                    style="color:red;">*</span></label>
                            <div class="col-9">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="exampleInputPassword1" placeholder="Contraseña">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Confirmar contraseña:<span
                                    style="color:red;">*</span></label>
                            <div class="col-9">
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Confirmar contraseña">
                            </div>
                        </div>

                        name="password_confirmation"




                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-10">
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

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

<script>
    $('#kt_select2-tusuario, #kt_select2_3_validate').select2({
        placeholder: "Selecciona tipo de usuario",
    });

    $('#kt_select2-area, #kt_select2_3_validate').select2({
        placeholder: "Selecciona tipo de usuario",
    });
    
  

</script>


@endpush
@stop
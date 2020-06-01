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
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-md-12">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Seguimiento Medida de Proteccion
												</h3>
											</div>
										</div>

										<!--begin::Form-->
										<form class="kt-form">
											<div class="kt-portlet__body">

                                            <div class="row">
                                            <div class="form-group  col-sm-6">
                                                <label for="example-date-input" >Fecha <span
                                                        style="color:red;">*</span></label>

                                                    <input class="form-control" name="fecha_carpeta" type="date"
                                                        value="{{now()}}" id="example-date-input" required>

                                            </div>

                                            <div class="form-group  col-sm-6">
                                                <label for="example-date-input" >Nombre del MP que otorgo <span
                                                        style="color:red;">*</span></label>

                                                    <input class="form-control" name="fecha_carpeta" type="text"
                                                      id="example-date-input" required>

                                            </div>


                                            </div>




                                            <div class="row">
                                            <div class="form-group  col-sm-6">
                                                <label for="example-date-input" >Nombre del Agresor<span
                                                        style="color:red;">*</span></label>

                                                    <input class="form-control" name="fecha_carpeta" type="text"
                                                      id="example-date-input" required>

                                            </div>


                                            <div class="form-group  col-sm-6">
                                            <label for="example-date-input" >Duracion<span
                                                        style="color:red;">*</span></label>

                                                    <input class="form-control" name="fecha_carpeta" type="text"
                                                      id="example-date-input" required>


                                            </div>

                                            </div>

                                            <div class="row">
                                            <div class="form-group  col-sm-4">
                                                    <label for="example-date-input" >Ley del Servicio que Solicita <span
                                                            style="color:red;">*</span></label>

                                                            <select class="form-control kt-select2" id="kt-ley"
                                                        style="width: 100%" name="leyServicio[]" required>
                                                        <option></option>
                                                        @foreach ($leyes as $ley)
                                                        <option value="{{$ley}}">
                                                            {{$ley->nombre}}</option>
                                                        @endforeach

                                                    </select>

                                                </div>

                                                <div class="form-group  col-sm-4">
                                                    <label for="example-date-input" >Categoria del Servicio que Solicita <span
                                                            style="color:red;">*</span></label>
                                                            <select class="form-control kt-select2" id="kt-categoria"
                                                        style="width: 100%" name="categoriaServicio[]" required>
                                                        <option></option>
                                                        @foreach ($categorias as $categoria)
                                                        <option value="{{$categoria}}">
                                                            {{$categoria->nombre}}</option>
                                                        @endforeach

                                                    </select>


                                                </div>

                                                <div class="form-group  col-sm-4">
                                                    <label for="example-date-input" >Fracción del Servicio que Solicita <span
                                                            style="color:red;">*</span></label>
                                                            <select class="form-control kt-select2" id="select-fraccion"
                                                        style="width: 100%" name="fraccionServicio[]"
                                                        required>
                                                        <option value="">Seleccione el Servicio</option>

                                                    </select>

                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="form-group  col-sm-6">
                                                    <label for="example-date-input" >Fecha en que se Notifica al Imputado <span
                                                            style="color:red;">*</span></label>

                                                        <input class="form-control" name="fecha_carpeta" type="date"
                                                            value="{{now()}}" id="example-date-input" required>

                                                </div>

                                                <div class="form-group  col-sm-6">
                                                    <label for="example-date-input" >Numero de Oficio <span
                                                            style="color:red;">*</span></label>

                                                        <input class="form-control" name="fecha_carpeta" type="text"
                                                        id="example-date-input" required>

                                                </div>


                                            </div>

                                            <div class="row">


                                                <div class="form-group  col-sm-12">
                                                    <label for="example-date-input" >Incidencias <span
                                                            style="color:red;">*</span></label>

                                                        <input class="form-control" name="fecha_carpeta" type="text"
                                                        id="example-date-input" required>

                                                </div>


                                            </div>

                                    



                                            <div class="alert alert-secondary" role="alert">
                                                    <div class="alert-icon"><i
                                                            class="flaticon-avatar kt-font-brand"></i></div>
                                                    <div class="alert-text">
                                                        <h2>Audiencia Judicial de Rtificacion de Medida </h2>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                <div class="form-group  col-sm-4">
                                                    <label for="example-date-input" >Fecha  <span
                                                            style="color:red;">*</span></label>

                                                        <input class="form-control" name="fecha_carpeta" type="date"
                                                            value="{{now()}}" id="example-date-input" required>

                                                </div>

                                                <div class="form-group  col-sm-8">
                                                    <label for="example-date-input" >Resultado <span
                                                            style="color:red;">*</span></label>

                                                        <input class="form-control" name="fecha_carpeta" type="text"
                                                        id="example-date-input" required>

                                                </div>

                                            </div>


                                           
                                            <div class="row ">
                                            <div class="form-group col-sm-6">
                                                <label>¿Se han decretado Medidas de Protecion con anteriroridad?</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" name="antecedentes" /> Si
                                                        <span></span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio"  name="antecedentes" /> No
                                                        <span></span>
                                                    </label>
                                                
                                                </div>
                                                
                                              
                                            </div>

                                            <div class="form-group">
                                                <label>¿Hay Antecedentes de Denuncias Anteriores a Esta Medida?</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" name="antecedentes" /> Si
                                                        <span></span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio"  name="antecedentes" /> No
                                                        <span></span>
                                                    </label>
                                                
                                                </div>
                                                
                                              
                                            </div>
                                            </div>


                                           
                                         
                                    



















											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="reset" class="btn btn-primary">Guardar</button>
													<button type="reset" class="btn btn-secondary">Cancelar</button>
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
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });


$(function() {
    $('#kt-select-area').on('change',onSelectAreaCambio);

});

function onSelectAreaCambio(){
    var area= $(this).val();
    var area_json= JSON.parse(area)
    var area_id =area_json.id;

    $.get('/api/servicios/'+area_id,function(data){
        var html_select='<option value"">Seleccione un servicio</option>';
        for (let index = 0; index < data.length; index++) {

           html_select+='<option value="'+data[index].id+'">'+data[index].nombre+'</option>'
            $('#select-servicio').html(html_select);

        }
    });


}

$(document).on('change', '#select-servicio', function(event) {
     $('#nombre_servicio').val($("#select-servicio option:selected").text());
});

$('#kt-select-ocupacion, #kt_select2_3_validate').select2({
            placeholder: "Selecciona una Ocupacion",
        });


$('#kt_select2-delito, #kt_select2_3_validate').select2({
        placeholder: "Selecciona un Delito",
  });

$('#kt-select-municipio, #kt_select2_3_validate').select2({
        placeholder: "Selecciona un Municipio",
  });

  $('#kt-select-distrito, #kt_select2_3_validate').select2({
        placeholder: "Selecciona un Distrito",
  });


  $('#kt-select-nacionalidad, #kt_select2_3_validate').select2({
        placeholder: "Selecciona una Nacioanlidad",
  });

  $('#kt-select-area').select2({
            placeholder: "Selecciona una Area del Servicio que Solicita",
            allowClear: true
        });

  $('#select-servicio, #kt_select2_3_validate').select2({
        placeholder: "Selecciona Area del Servicio que se Solcita",
  });


  $('#kt-grupo-vulnerable, #kt_select2_3_validate').select2({
        placeholder: "Selecciona Grupos Vunerables",
  });

  $('#kt-categoria').select2({
            placeholder: "Selecciona una categoria del Servicio que Solicita",
            allowClear: true
        });

$('#kt-ley').select2({
    placeholder: "Selecciona una Ley del Servicio que Solicita",
    allowClear: true
       });


$('#select-fraccion').select2({
    placeholder: "Selecciona una Fraccion del Servicio que Solicita",
    allowClear: true
});


$(function() {
    $('#kt-ley').on('change',onSelectCategoriaCambio);
});




$(function() {
    $('#kt-categoria').on('change',onSelectCategoriaCambio);
});




function onSelectCategoriaCambio(){
    var ley= $(this).val();
    var ley_json= JSON.parse(ley)
    var ley_id =ley_json.id;
    //
    var categoria= $(this).val();
    var categoria_json= JSON.parse(categoria)
    var categoria_id =categoria_json.id;
    var html_select='';

    $.get('/api/fracciones/'+ley_id+'/'+categoria_id,function(data){
        console.log(data);
       if(data.length > 0) {
        for (let index = 0; index < data.length; index++) {
           html_select+='<option value="'+data[index].id+'">'+data[index].nombre+'</option>'
            $('#select-fraccion').html(html_select);

        }
       }
        else {

            $('#select-fraccion').html(html_select);
        }
    });


}
</script>


@endpush
@stop

@extends ('layouts.inicio')
@section ('content')

<div class="container">
<section class="content-header">
    <h4>
        Gestionar Cargo
    </h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Gestor Cargo</li>
    </ol>
</section>

 <section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="box">
                <div class="box-header">
                    <h4>lista de cargos</h4>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($cargo as $car)
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">{{ $car->id }}</td>
                                <td>{{ $car->nombre }}</td>
                                <td>
                                <div class="btn-group" >
                                    <a href="#" data-target="#modal-edit-{{$car->id}}" data-toggle="modal">
                                        <button class="btn btn-info"><i class="fa fa-pencil"></i>editar</button>    
                                    </a>                                  
                                    <a href="" data-target="#modal-delete-{{$car->id}}" data-toggle="modal">
                                        <button class="btn btn-danger btnEliminarPerfil" ><i class="fa fa-trash"></i>eliminar</button>
                                    </a>
                                </div>
                                </td>
                            </tr>
                            @include('administrador.cargo.modalEliminar')
                            @include('administrador.cargo.modalEditar')
                        </tbody>
                        @endforeach
                    </table>
                    {{ $cargo->render()}}        
                </div>
            </div>    
        </div>
        <div class="col-md-5">
            <div class="modal-content">
                <form action="{{ url('/administrador-cargo') }}" method="post" onsubmit="return validar();">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <!--=====================================
                       CABEZA DEL MODAL
                       ======================================-->
                    <div class="modal-header" style="background:#3c8dbc; color:white">
                        <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">Agregar Cargo</h4>
                    </div>
                    <div style="color: red;" id="mensajeCargo"></div>
                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control input-lg" value="" name="nombre" id="nombreCargo" placeholder="Ingresar nombre del Cargo">
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                            <input type="submit" value="Guardar Cargo" class="btn btn-primary ">
                        </div>
                    </form>            
            </div>
        </div>

    </div>
 </section>
 </div>


@endsection

@push('scripts')
<script>
    var url = "{{url('conteo/administrador-cargo')}}";
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
       console.log(datos);
        document.getElementById("contador").innerHTML = datos.cantidad  + '  visitas';
    })
</script>
@endpush
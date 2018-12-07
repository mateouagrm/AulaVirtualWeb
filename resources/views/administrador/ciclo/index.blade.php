@extends ('layouts.inicio')
@section ('content')

<div class="container">
<section class="content-header">
    <h4>
        Gestionar Ciclo
    </h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Gestor Ciclo</li>
    </ol>
</section>

 <section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="box">
                <div class="box-header">
                    <h4>lista de ciclo</h4>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Nombre</th>
                                <th>Puntaje</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($ciclo as $cic)
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">{{ $cic->id}}</td>
                                <td>{{ $cic->nombre}}</td>
                                <td>{{ $cic->puntaje}}</td>
                                <td>
                                <div class="btn-group" >
                                    <a href="#" data-target="#modal-edit-{{$cic->id}}" data-toggle="modal">
                                        <button class="btn btn-info btnEditarPerfil"  data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i> editar</button>    
                                    </a>                                   
                                    <a href="" data-target="#modal-delete-{{$cic->id}}" data-toggle="modal">
                                        <button class="btn btn-danger btnEliminarPerfil" ><i class="fa fa-trash"></i> eliminar</button>
                                    </a>
                                </div>
                                </td>
                            </tr>
                            @include('administrador.ciclo.modalEliminar')
                            @include('administrador.ciclo.modalEditar')
                        </tbody>
                        @endforeach
                    </table>
                    {{ $ciclo->render()}}        
                </div>
            </div>    
        </div>
        <div class="col-md-5">
            <div class="modal-content">
                <form action="{{ url('/administrador-ciclo') }}" method="post" onsubmit="return validarCliclo();">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <!--=====================================
                       CABEZA DEL MODAL
                       ======================================-->
                    <div class="modal-header" style="background:#3c8dbc; color:white">
                        <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">Agregar Ciclo</h4>
                    </div>
                    <div style="color: red;" id="mensajeCiclo"></div>
                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control input-lg" value="" name="nombre" id="nombreCiclo"d placeholder="Ingresar nombre del Ciclo">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="number" class="form-control input-lg" value="" name="puntaje" id="puntajeCliclo" placeholder="Ingresar el puntaje">
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                            <input type="submit" value="Guardar Ciclo" class="btn btn-primary ">
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
    var url = "{{url('conteo/administrador-ciclo')}}";
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
       console.log(datos);
        document.getElementById("contador").innerHTML = datos.cantidad  + '  visitas';
    })
</script>
@endpush
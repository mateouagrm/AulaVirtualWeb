@extends ('layouts.inicio')
@section ('content')

<div class="container">
<section class="content-header">
    <h4>
        Gestionar cronograma
    </h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Gestor cronograma</li>
    </ol>
</section>

 <section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="box">
                <div class="box-header">
                    <h4>lista de cronogramas</h4>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>fecha inicio</th>
                                <th>fecha fin</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($cronograma as $cro)
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">{{ $cro->id}}</td>
                                <td>{{ $cro->inicio}}</td>
                                <td>{{ $cro->fin}}</td>
                                <td>
                                <div class="btn-group" >
                                    <a href="#" data-target="#modal-edit-{{$cro->id}}" data-toggle="modal">
                                        <button class="btn btn-info btnEditarPerfil"  data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i> editar</button>    
                                    </a>                                   
                                    <a href="" data-target="#modal-delete-{{$cro->id}}" data-toggle="modal">
                                        <button class="btn btn-danger btnEliminarPerfil" ><i class="fa fa-trash"></i> eliminar</button>
                                    </a>
                                </div>
                                </td>
                            </tr>
                            @include('administrador.cronograma.modalEliminar')
                            @include('administrador.cronograma.modalEditar')
                        </tbody>
                        @endforeach
                    </table>
                    {{ $cronograma->render()}}        
                </div>
            </div>    
        </div>
        <div class="col-md-5">
            <div class="modal-content">
                <form action="{{ url('/administrador-cronograma') }}" method="post" >
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <!--=====================================
                       CABEZA DEL MODAL
                       ======================================-->
                    <div class="modal-header" style="background:#3c8dbc; color:white">
                        <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">Agregar cronograma</h4>
                    </div>
                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inicio">inicio</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="date" class="form-control input-lg" value="" name="inicio" placeholder="Ingresar nombre del cronograma">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fin">fin</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="date" class="form-control input-lg" value="" name="fin" placeholder="Ingresar nombre del cronograma">
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                            <input type="submit" value="Guardar cronograma" class="btn btn-primary ">
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
    var url = "{{url('conteo/administrador-cronograma')}}";
    
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
       console.log(datos);
        document.getElementById("contador").innerHTML = datos.cantidad  + '  visitas';
    })
</script>
@endpush
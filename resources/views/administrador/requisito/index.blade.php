@extends ('layouts.inicio')
@section ('content')

<div class="container">
<section class="content-header">
    <h4>
        Gestionar Requisito
    </h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Gestor Requisito</li>
    </ol>
</section>

 <section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="box">
                <div class="box-header">
                    <h4>lista de requisitos</h4>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Nombre</th>
                                <th>Puntaje</th>
                                <th>Id Ciclo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach ($requisitos as $car)
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
                            @include('administrador.requisito.modalEliminar')
                            @include('administrador.requisito.modalEditar')
                        </tbody>
                        @endforeach
                    </table>
                    {{ $requisitos->render()}}        
                </div>
            </div>    
        </div>
        <div class="col-md-5">
            <div class="modal-content">
                <form action="{{ url('/administrador-requisito') }}" method="post" >
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <!--=====================================
                       CABEZA DEL MODAL
                       ======================================-->
                    <div class="modal-header" style="background:#3c8dbc; color:white">
                        <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">Agregar requisito</h4>
                    </div>
                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->
                    <div class="modal-body">
                        <div class="box-body">
                            <!--=====================================
                            ATRIBUTO NOMBRE
                            ======================================-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control input-lg" value="" name="nombre" placeholder="Ingresar nombre del requisito">
                                </div>
                            </div>
                            <!--=====================================
                            ATRIBUTO PUNTAJE
                            ======================================-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control input-lg" value="" name="puntaje" placeholder="Ingresar puntaje del requisito">
                                </div>
                            </div>
                            <!--=====================================
                             ENTRADA PARA EL ID CICLO
                             ======================================-->
                            <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                    <select name="id_ciclo" class="form-control input-lg seleccionarTipo" required>
                                        <option selected value="none" disabled="disabled">Selecionar Ciclo</option>
                                        @foreach ($ciclo as $cic)
                                        <option value="{{$cic->id}}">{{$cic->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                            <input type="submit" value="Guardar Requisito" class="btn btn-primary ">
                        </div>
                    </form>            
            </div>
        </div>

    </div>
 </section>
 </div>

@push('scripts')
<script>
    
</script>
@endpush
@endsection
@extends ('administrador.layouts')
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
                                <td class="sorting_1" tabindex="0">{{ $car->id}}</td>
                                <td>{{ $car->nombre}}</td>
                                <td>
                                <div class="btn-group" >
                                    <button class="btn btn-info btnEditarPerfil"  data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i> editar</button>

                                    <button class="btn btn-danger btnEliminarPerfil" ><i class="fa fa-trash"></i> eliminar</button>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{ $cargo->render()}}        
                </div>
            </div>    
        </div>
        <div class="col-md-5">
            <div class="box">
                <div class="box-header">
                    <h4>Registro de cargo</h4>
                </div>
                <div class="box-body">
                    
                </div>
            </div>
        </div>
    </div>
  <!--  <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
                        Agregar Categoria
                    </button>
                    @include('mensajesucces')
                    @include('mensajeerror')
                </div>
                 <div class="col-md-9">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <a href="#">
                                <button class="btn btn-default backColor" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </a>
                        </span>
                    </div>
                 </div>
            </div>
        </div>
        <div class="box-body table-responsive">
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
                        <td class="sorting_1" tabindex="0">{{ $car->id}}</td>
                        <td>{{ $car->nombre}}</td>
                        <td>
                        <div class="btn-group" >
                            <button class="btn btn-info btnEditarPerfil"  data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i> editar</button>

                            <button class="btn btn-danger btnEliminarPerfil" ><i class="fa fa-trash"></i> eliminar</button>
                        </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{ $cargo->render()}}
        </div>
    </div>
-->
 </section>
 </div>
@endsection
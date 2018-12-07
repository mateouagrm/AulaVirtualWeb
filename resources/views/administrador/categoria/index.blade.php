@extends ('administrador.layouts')
@section ('content')

<div class="container">
<section class="content-header">
    <h4>
        Gestionar Categoria
    </h4>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Gestor Categoria</li>
    </ol>
</section>

 <section class="content">
    <div class="box">
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
                @foreach ($categoria as $cat)
                <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">{{ $cat->id}}</td>
                        <td>{{ $cat->nombre}}</td>
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
            {{ $categoria->render()}}
        </div>
    </div>
 </section>
 </div>
@include('administrador.categoria.modalAgregarCategoria')
@endsection


@extends ('layouts.inicio')
@section ('content')
<div class="container">
    <section class="content-header">
        <h4>
            Aula Virtual General
        </h4>
        <ol class="breadcrumb">
            <li><a href="{{url('/administrador')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Gestor Aula Virtual</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
            @include('mensajesucces')
            @include('mensajeerror')
            <h3>Usuario general
             <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRecomendado">
                    Agregar Aula Virtual
             </button>
            </h3>
             @include('administrador.aulaVirtual.modalAgregarUsuario')
            </div>
            

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                    <thead>
                    <tr>
                        <th style="width:10px">#</th>
                        <th>Ci</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Celular</th>
                        <th>Direccion</th>
                        <th>Email</th>
                        <th>Id Cargo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    @foreach ($aulas as $u)
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">{{ $u->id}}</td>
             
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
              {{ $aulas->render()}}
            </div>
        </div>
    </section>
</div>
@endsection
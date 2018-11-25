@extends ('administrador.layouts')
@section ('content')

<div class="container">
    <section class="content-header">
        <h4>
            Usuario General
            <div class="dropdown"  style="display: inline-block">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Visualizar por
                    <span class="caret"></span></button>
                <ul class="dropdown-menu" >
                    <li><a href="{{ url('/administrador') }}">Usuario general</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('administrador-usuarioConBono') }}">Usuario con bono</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('administrador-usuarioRecomendado') }}">Usuario recomendado</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Usuario con bono exipirado</a></li>
                </ul>
            </div>
        </h4>
        <ol class="breadcrumb">
            <li><a href="{{url('/administrador')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Gestor Usuarios</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
            @include('mensajesucces')
            @include('mensajeerror')
            <h3>Usuario recomendado
            </h3>
            <div class="input-group col-lg-6 col-md-12 col-sm-12 col-xs-12" id="buscador">
                @include('administrador.usuarioRecomendado.search')
            </div>
            </div>
            

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                    <thead>
                    <tr>
                        <th style="width:10px">#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Tutor</th>
                        <th>Categoria</th>
                        <th>Subcategoria</th>
                        <th>Producto</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    @foreach ($recomendado as $r)
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">{{ $r->id}}</td>
                        <td>{{ $r->nombreR}}</td>
                        <td>{{ $r->email}}</td>
                        <td>{{ $r->telefono}}</td>
                        <td>{{ $r->nombreC}}</td>
                        <td>{{ $r->nombreCa}}</td>
                        <td>{{ $r->nombreSC}}</td>
                        <td>{{ $r->titulo}}</td>
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
              {{ $recomendado->render()}}
            </div>
        </div>
    </section>
</div>

@endsection
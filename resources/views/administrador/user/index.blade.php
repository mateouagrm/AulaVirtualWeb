@extends ('layouts.inicio')
@section ('content')
<div class="container">
    <section class="content-header">
        <h4>
            Usuario General
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
                <h3>Usuario general
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRecomendado">
                            Agregar usuario
                    </button>
                </h3>
                <div class="input-group col-lg-6 col-md-12 col-sm-12 col-xs-12" id="buscador">
                    @include('administrador.user.search')
                </div>
                 @include('administrador.user.modalAgregarUsuario')
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
                    @foreach ($user as $u)
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">{{ $u->id}}</td>
                        <td>{{ $u->ci}}</td>
                        <td>{{ $u->codigo}}</td>
                        <td>{{ $u->nombre}}</td>
                        <td>{{ $u->apellido}}</td>
                        <td>{{ $u->celular}}</td>
                        <td>{{ $u->direccion}}</td>
                        <td>{{ $u->email}}</td>
                        <td>{{ $u->id_cargo}}</td>
                        <td>
                            <div class="btn-group" >
                                <a href="#" data-target="#modal-edit-{{$u->id}}" data-toggle="modal">
                                    <button class="btn btn-info btnEditarPerfil"  data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i> editar</button>    
                                </a>                                   
                                <a href="" data-target="#modal-delete-{{$u->id}}" data-toggle="modal">
                                    <button class="btn btn-danger btnEliminarPerfil" ><i class="fa fa-trash"></i> eliminar</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @include('administrador.user.modalEliminar')
                    @include('administrador.user.modalEditar')
                    </tbody>
                   @endforeach
                </table>
              {{ $user->render()}}
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    var url = "{{url('conteo/administrador-users')}}";
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
       console.log(datos);
        document.getElementById("contador").innerHTML = datos.cantidad  + '  visitas';
    })
</script>
@endpush
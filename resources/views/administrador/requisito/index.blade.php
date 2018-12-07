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
            <div class="box">
            <div class="box-header">
            @include('mensajesucces')
            @include('mensajeerror')
            <h3>Requisito  
             <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRecomendado">
             Agregar Requisito
             </button>
            </h3>
             @include('administrador.requisito.modalAgregarRequisito')
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
                                <td>{{ $car->puntaje }}</td>
                                <td>{{ $car->id_ciclo }}</td>
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
 </section>
 </div>
@endsection

@push('scripts')
<script>
    var url = "{{url('conteo/administrador-requisito')}}";
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
       console.log(datos);
        document.getElementById("contador").innerHTML = datos.cantidad  + '  visitas';
    })
</script>
@endpush
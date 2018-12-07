@extends ('layouts.inicio')
@section ('content')

<div class="container">
    <section class="content-header">
        <h4>
            Aulas Virtuales
        </h4>
        <ol class="breadcrumb">
            <li><a href="{{url('/administrador')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">personal</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                @include('mensajesucces')
                @include('mensajeerror')
                <h3>lista de aulas virtuales que dispongo</h3>

            </div>
            
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                    <thead>
                    <tr>
                        <th style="width:10px">#</th>
                        <th>Id_Creador</th>
                        <th>Id_Profesor</th>
                        <th>Id_Cronograma</th>
                        <th>Carrera</th>
                        <th>Materia</th>
                        <th>Proceso</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    @foreach ($aulaVirtual as $u)
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">{{ $u->id}}</td>
                        <td>{{ $u->id_creador}}</td>
                        <td>{{ $u->id_profesor}}</td>
                        <td>{{ $u->id_cronograma}}</td>
                        <td>{{ $u->carrera}}</td>
                        <td>{{ $u->materia}}</td>
                        <td> {{$puntajes[$u->id]}} %</td>
                        <td>
                            <div class="btn-group" >
                                <a href="{{url('profesor-aula-virtual/'.$u->id)}}" >
                                    <button class="btn btn-info btnEditarPerfil" ><i class="fa fa-eye"></i> Ver proceso</button>    
                                </a>                                   
                            </div>
                        </td>
                    </tr>
                    </tbody>
                   @endforeach
                </table>
            </div>
        </div>
    </section>
</div>

@endsection

@push('scripts')
<script>
    var url = "{{url('conteo/profesor-aula-virtuales')}}";
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
       console.log(datos);
        document.getElementById("contador").innerHTML = datos.cantidad  + '  visitas';
    })
</script>
@endpush
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
            
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>estado</th>
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
                                <td>
                                    <?php 
                                         $sql="SELECT * FROM archivo as a 
                                         INNER JOIN aula_virtual as av on av.id=a.id_aula 
                                         INNER join requisito as r on a.id_requisito=r.id 
                                         WHERE av.id=5 and r.id=$car->id";
                                     $info = \DB::select($sql);
                                    ?>
                                      @if($info)
                                             <span class="label label-success fontSize">enviado</span>
                                      @else
                                          <span class="label label-warning fontSize">no enviado</span>
                                      @endif
                                </td>
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
                        </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
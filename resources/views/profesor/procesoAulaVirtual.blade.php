@extends ('layouts.inicio')
@section ('content')

<div class="container">
    <section class="content-header">
        <h4>
            Aulas Virtuales 
            {{$aulaVirtual->id}}
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
                        @foreach ($requisitos as $key => $car)
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">{{ $car->id }}</td>
                                <td>
                                  
                                      @if($enviados[$key])
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
                                    <a href="#" data-target="#modal-inser-{{$car->id}}" data-toggle="modal">
                                        <button class="btn btn-info"><i class="fa fa-pencil"></i>enviar</button>    
                                    </a>
                                </div> 
                                </td>
                            </tr>
                        </tbody>
                            @include('profesor.modalEnviarArchivo')
                        @endforeach
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
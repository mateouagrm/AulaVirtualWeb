@extends ('administrador.layouts')
@section ('content')

    <div class="container">
        <section class="content-header" style="margin-bottom: 20px;">
            <ol class="breadcrumb">
                <li><a href="{{url('administrador')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Gestor Items</li>
            </ol>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                     <h3>Gestor Items
                     <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
                            Agregar Items
                     </button>
                    </h3>
                    <div class="input-group col-lg-6 col-md-12 col-sm-12 col-xs-12" id="buscador">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <a href="#">
                            <button class="btn btn-default backColor" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </span>
                </div>
                @include('administrador.producto.modalAgregarProducto')
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                        <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Titulo</th>
                            <th>Ciudad</th>
                            <th>Categoria</th>
                            <th>Sub-Categoria</th>
                            <th>Descripción</th>
                            <th>Imagen Principal</th>
                            <th>fecha de inicio</th>
                            <th>fecha de final</th>
                            <th>Precio</th>
                            <th>Bono</th>
                            <th>Oferta</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </section>
    </div>


@endsection
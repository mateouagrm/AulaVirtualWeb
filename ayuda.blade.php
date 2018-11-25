@extends ('administrador.layouts')
@section ('content')

<div class="container">
    <section class="content-header">
        <h1>
            Gestor Recomendados
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('administrador')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Gestor Recomendados</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRecomendado">
                    Agregar Recomendados
                </button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                    <thead>
                    <tr>
                        <th style="width:10px">#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Estado</th>
                        <th>bono</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<!--=====================================
MODAL AGREGAR RECOMENDADO
======================================-->
<div id="modalAgregarRecomendado" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
            <!--=====================================
           CABEZA DEL MODAL
           ======================================-->
            <div class="modal-header" style="background:#3c8dbc; color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar Recomendado</h4>
            </div>
            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->
            <div class="modal-body">
                <div class="box-body">
                    <!--=====================================
                        ENTRADA PARA EL NOMBRE
                    ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                            <input type="text" class="form-control input-lg validarProducto tituloProducto"  placeholder="Nombre del recomendado">
                        </div>
                    </div>
                    <!--=====================================
                        ENTRADA PARA EL APELLIDO
                    ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                            <input type="text" class="form-control input-lg validarProducto tituloProducto"  placeholder="Apellido del recomendado">
                        </div>
                    </div>
                    <!--=====================================
                        ENTRADA PARA EL BONO
                    ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="number" class="form-control input-lg validarProducto tituloProducto"  placeholder="bono de inicio">
                        </div>
                    </div>
                    <!--=====================================
                    PIE DEL MODAL
                    ======================================-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                        <button type="button" class="btn btn-primary guardarProducto">Guardar producto</button>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
        @endsection
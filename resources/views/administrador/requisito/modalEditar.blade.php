<div id="modal-edit-{{$car->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ action('CargoController@update', $car->id)}}" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!--=====================================
                CABEZA DEL MODAL
               ======================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar Cargo</h4>
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
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="nombre" value="{{ $car->nombre }}"  required>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=====================================
                PIE DEL MODAL
                ======================================-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary guardarProducto">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

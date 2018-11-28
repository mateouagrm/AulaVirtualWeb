<div id="modal-edit-{{$cro->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ action('CronogramaController@update', $cro->id)}}" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!--=====================================
                CABEZA DEL MODAL
               ======================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar cronograma</h4>
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
                                    <i class="fa fa-pencil"></i>
                                </span>
                                <input type="date" class="form-control" name="inicio" value="{{ $cro->inicio }}"  required>
                            </div>
                        </div>
                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="fa fa-pencil"></i>
                                </span>
                                <input type="date" class="form-control" name="fin" value="{{ $cro->fin }}"  required>
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

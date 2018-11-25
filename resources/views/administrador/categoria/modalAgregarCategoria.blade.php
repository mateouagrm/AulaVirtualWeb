<div id="modalAgregarCategoria" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('/administrador-categoria') }}" method="post" >
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!--=====================================
               CABEZA DEL MODAL
               ======================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Categoria</h4>
                </div>
                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control input-lg" value="" name="nombre" placeholder="Ingresar nombre de Categoria">
                            </div>
                        </div>
                    </div>
                </div>
                <!--=====================================
                PIE DEL MODAL
                ======================================-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <input type="submit" value="Guardar Categoria" class="btn btn-primary ">
                </div>
            </form>
        </div>
    </div>
</div>
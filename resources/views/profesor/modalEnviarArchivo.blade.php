<div id="modal-inser-{{$car->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('profesor-archivo')}}" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!--=====================================
                CABEZA DEL MODAL
               ======================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar Archivo</h4>
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
                                <input type="text" class="form-control" name="nombre" value="{{$car->nombre}}"  required>
                            </div>
                        </div>
                        <!--=====================================
                             ENTRADA PARA EL ID AULA
                         ======================================-->
                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="id_aula" value="{{$aulaVirtual->id}}"  required>
                            </div>
                        </div>
                        <!--=====================================
                             ENTRADA PARA EL ID AULA
                         ======================================-->
                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="id_requisito" value="{{$car->id}}"  required>
                            </div>
                        </div>
                        <!--=====================================
                             ENTRADA PARA EL ENLACE
                         ======================================-->
                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="enlace" value=""  placeholder="enlace de archivo" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=====================================
                PIE DEL MODAL
                ======================================-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary guardarProducto">Guardar Datos</button>
                </div>
            </form>
        </div>
    </div>
</div>

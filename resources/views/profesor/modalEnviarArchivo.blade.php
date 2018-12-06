<div id="modal-inser-{{$car->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('profesor-aula-virtual')}}"  method="post"  enctype="multipart/form-data" onsubmit="return validarArchivo({{$car->id}});">
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
                        <div style="color: red;" id="mensajeArchivoId">fcg</div>
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
                             ENTRADA PARA EL Archivo
                         ======================================-->
                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="file" class="form-control" name="fff" value="" id="{{$car->id}}f"  placeholder="subir archivo" >
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

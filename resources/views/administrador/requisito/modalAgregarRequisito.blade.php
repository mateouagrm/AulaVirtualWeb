   <div id="modalAgregarRecomendado" class="modal fade" role="dialog">
    <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('/administrador-requisito') }}" onsubmit="return validarRequisito();" method="post" >
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <!--=====================================
                       CABEZA DEL MODAL
                       ======================================-->
                    <div class="modal-header" style="background:#3c8dbc; color:white">
                        <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">Agregar requisito</h4>
                    </div>
                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->
                    <div class="modal-body">
                        <div class="box-body">
                            <div style="color: red;" id="mensajeRequisito"></div>
                            <!--=====================================
                            ATRIBUTO NOMBRE
                            ======================================-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control input-lg" value="" name="nombre" id="nombreRequisito" placeholder="Ingresar nombre del requisito">
                                </div>
                            </div>
                            <!--=====================================
                            ATRIBUTO PUNTAJE
                            ======================================-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control input-lg" value="" name="puntaje" id="puntajeRequisito" placeholder="Ingresar puntaje del requisito">
                                </div>
                            </div>
                            <!--=====================================
                             ENTRADA PARA EL ID CICLO
                             ======================================-->
                            <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                    <select name="id_ciclo" class="form-control input-lg seleccionarTipo" required>
                                        <option selected value="none" disabled="disabled">Selecionar Ciclo</option>
                                        @foreach ($ciclo as $cic)
                                        <option value="{{$cic->id}}">{{$cic->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                            <input type="submit" value="Guardar Requisito" class="btn btn-primary ">
                        </div>
                    </form>            
            </div>
        </div>
     </div>
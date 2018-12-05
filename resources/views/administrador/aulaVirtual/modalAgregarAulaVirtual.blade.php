<div id="modalAgregarRecomendado" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('administrador-aula-virtual') }}" onsubmit="return validarAulaVitual();" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!--=====================================
                CABEZA DEL MODAL
               ======================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Aula Virtual</h4>
                </div>
                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->
                <div class="modal-body">
                    <div class="box-body">
                        <div style="color: red;" id="mensajeAulaVirtual"></div>
                        <!--=====================================
                             ENTRADA PARA EL ID CREADOR
                         ======================================-->
                        <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select name="id_creador" class="form-control input-lg seleccionarTipo" required>
                                    <option selected value="none" disabled="disabled">Selecionar Creador</option>
                                    @foreach ($director as $cre)
                                    <option value="{{$cre->id}}">{{$cre->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--=====================================
                             ENTRADA PARA EL ID PROFESOR
                         ======================================-->
                        <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select name="id_profesor" class="form-control input-lg seleccionarTipo" required>
                                    <option selected value="none" disabled="disabled">Selecionar Profesor</option>
                                    @foreach ($profesor as $pro)
                                    <option value="{{$pro->id}}">{{$pro->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         <!--=====================================
                             ENTRADA PARA EL ID CRONOGRAMA
                         ======================================-->
                        <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select name="id_cronograma" class="form-control input-lg seleccionarTipo" required>
                                    <option selected value="none" disabled="disabled">Selecionar Cronograma</option>
                                    @foreach ($cronograma as $pro)
                                    <option value="{{$pro->id}}">{{$pro->inicio}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--=====================================
                             ENTRADA PARA EL CARRERA
                         ======================================-->
                        <div class="form-group">   
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="carrera" id="carreraAulaVirtual" placeholder="ingrese la carrera a registrar" required>
                            </div>
                        </div>
                        <!--=====================================
                             ENTRADA PARA EL MATERIA DE CARRERA
                         ======================================-->
                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="materia" id="materiaAulaVirtual" placeholder="ingrese la materia de una carrera" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=====================================
                PIE DEL MODAL
                ======================================-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary guardarProducto">Guardar Aula Virtual</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal-edit-{{$u->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ action('AulaVirtualController@update', $u->id)}}" onsubmit="return validarAulaVitualEdit();" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!--=====================================
                CABEZA DEL MODAL
               ======================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar ciclo</h4>
                </div>
                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->
                <div class="modal-body">
                    <div class="box-body">
                        <div style="color: red;" id="mensajeAulaVirtualEdit"></div>
                        <!--=====================================
                             ENTRADA PARA EL ID CREADOR
                         ======================================-->
                        <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select name="id_creador" class="form-control input-lg seleccionarTipo" required>
                                    @foreach ($director as $cre)
                                        @if ($cre->id == $u->id_creador)
                                            <option value="{{$cre->id}}" selected>{{$cre->nombre}}</option>
                                        @else
                                            <option value="{{$cre->id}}">{{$cre->nombre}}</option>
                                        @endif
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
                                    @foreach ($profesor as $pro)
                                        @if ($pro->id == $u->id_profesor)
                                            <option value="{{$pro->id}}" selected>{{$pro->nombre}}</option>
                                        @else
                                            <option value="{{$pro->id}}">{{$pro->nombre}}</option>
                                        @endif
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
                                    @foreach ($cronograma as $pro)
                                        @if ($pro->id == $u->id_cronograma)
                                            <option value="{{$pro->id}}" selected>{{$pro->inicio}}</option>
                                        @else
                                            <option value="{{$pro->id}}">{{$pro->inicio}}</option>
                                        @endif
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
                                <input type="text" class="form-control" name="carrera" id="carreraAulaVirtualEdit" value="{{ $u->carrera }}"  required>
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
                                <input type="text" class="form-control" name="materia" id="materiaAulaVirtualEdit" value="{{ $u->materia }}" required>
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

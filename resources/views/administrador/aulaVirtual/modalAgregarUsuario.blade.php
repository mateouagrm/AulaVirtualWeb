<div id="modalAgregarRecomendado" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('administrador') }}" method="post"  enctype="multipart/form-data">
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
                    <!--=====================================
                         ENTRADA PARA EL ID CREADOR
                     ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <select name="id_creador" class="form-control input-lg seleccionarTipo" required>
                                <option selected value="none" disabled="disabled">Selecionar Creador</option>
                                @foreach ($creador as $cre)
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
                            <select name="id_creador" class="form-control input-lg seleccionarTipo" required>
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
                            <select name="id_creador" class="form-control input-lg seleccionarTipo" required>
                                <option selected value="none" disabled="disabled">Selecionar Cronograma</option>
                                @foreach ($cronograma as $pro)
                                <option value="{{$pro->id}}">{{$pro->inicio}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--=====================================
                         ENTRADA PARA EL CODIGO
                     ======================================-->
                    <div class="form-group">   
                        <div class="input-group">
                            <span class="input-group-addon"> 
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" name="codigo" placeholder="codigo del usuario" required>
                        </div>
                    </div>
                    <!--=====================================
                         ENTRADA PARA EL NOMBRE
                     ======================================-->
                    <div class="form-group">  
                        <div class="input-group">
                            <span class="input-group-addon"> 
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required>
                        </div>
                    </div>
                    <!--=====================================
                         ENTRADA PARA EL APELLIDO
                     ======================================-->
                    <div class="form-group">  
                        <div class="input-group">
                            <span class="input-group-addon"> 
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido Completo" required>
                        </div>
                    </div>
                     <!--=====================================
                      ENTRADA PARA EL CELULAR
                  ======================================-->
                    <div class="form-group">
                        <div class="input-group"> 
                            <span class="input-group-addon">   
                                    <i class="glyphicon glyphicon-phone"></i>
                            </span>
                            <input type="number" class="form-control" name="celular" placeholder="Numero telefonico celular" required>
                        </div>
                    </div>
                    <!--=====================================
                         ENTRADA PARA EL DIRECCION
                     ======================================-->
                    <div class="form-group">  
                        <div class="input-group">
                            <span class="input-group-addon"> 
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" name="direccion" placeholder="direccion del usuario" required>
                        </div>
                    </div>
                    <!--=====================================
                       ENTRADA PARA LA Cargo
                   ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <select name="idciudad" class="form-control input-lg seleccionarTipo" required>
                                <option selected value="none" disabled="disabled">Selecionar Cargo</option>
                                @foreach ($user as $c)
                                <option value="{{$c->id}}">{{$c->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--=====================================
                        ENTRADA PARA EL TIPO DE USUARIO
                    ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <select id="tipo" name="tipo" class="form-control input-lg seleccionarTipo">
                            <option selected value="none" disabled="disabled">Selecionar tipo de usuario</option>
                                <option value="administrador">Administrador</option>
                                <option value="coordinador">Coordinador</option>
                            </select>
                        </div>
                    </div>
                    
                    <div id="visibleUsuario" class="form-group" style="display: none;">
                        <h3>PRIVILEGIOS</h3>
                          <hr style="background: black;">
                        <div class="input-group">
                            <div class="checkbox">
                                <label><input type="checkbox">actualizar datos</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">editar datos</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">eliminar datos</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--=====================================
            PIE DEL MODAL
            ======================================-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-primary guardarProducto">Guardar usuario</button>
            </div>
         </form>
        </div>
    </div>
</div>
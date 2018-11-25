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
                <h4 class="modal-title">Agregar Usuario</h4>
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
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required>
                        </div>
                    </div>
                    <!--=====================================
                       ENTRADA PARA LA CIUDAD
                   ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <select name="idciudad" class="form-control input-lg seleccionarTipo" required>
                                <option selected value="none" disabled="disabled">Selecionar Ciudad</option>
                                @foreach ($ciudad as $c)
                                <option value="{{$c->id}}">{{$c->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--=====================================
                      ENTRADA PARA EL TELEFONO
                  ======================================-->
                    <div class="form-group">
                        <div class="input-group"> 
                            <span class="input-group-addon">   
                                    <i class="glyphicon glyphicon-phone"></i>
                            </span>
                            <input type="number" class="form-control" name="telefono" placeholder="Numero telefonico celular" required>
                        </div>
                    </div>
                    <!--=====================================
                        ENTRADA PARA EL TELEFONO
                    ======================================-->
                    <div class="form-group"> 
                        <div class="input-group"> 
                            <span class="input-group-addon"> 
                            <i class="glyphicon glyphicon-envelope"></i>
                                </span>
                            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
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
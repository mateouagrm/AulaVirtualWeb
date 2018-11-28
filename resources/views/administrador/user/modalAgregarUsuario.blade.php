<div id="modalAgregarRecomendado" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('administrador-users') }}" method="post"  enctype="multipart/form-data">
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
                         ENTRADA PARA EL CI
                     ======================================-->
                    <div class="form-group">  
                        <div class="input-group">
                            <span class="input-group-addon"> 
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" name="ci" placeholder="carnet de identidad" required>
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

                    <div class="form-group">  
                        <div class="input-group">
                            <span class="input-group-addon"> 
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="email" class="form-control" name="email" placeholder="email del usuario" required>
                        </div>
                    </div>

                    <div class="form-group">  
                        <div class="input-group">
                            <span class="input-group-addon"> 
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="password" class="form-control" name="password" placeholder="password del usuario" required>
                        </div>
                    </div>
                    <!--=====================================
                       ENTRADA PARA el Cargo
                   ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <select name="id_cargo" class="form-control input-lg seleccionarTipo" required>
                                <option selected value="none" disabled="disabled">Selecionar Cargo</option>
                                @foreach ($cargo as $c)
                                    <option value="{{$c->id}}">{{$c->nombre}}</option>
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
                <button type="submit" class="btn btn-primary guardarProducto">Guardar usuario</button>
            </div>
         </form>
        </div>
    </div>
</div>
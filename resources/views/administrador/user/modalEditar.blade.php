<div id="modal-edit-{{$u->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ action('UserController@update', $u->id)}}" method="post"  enctype="multipart/form-data">
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
                        <!--=====================================
                             ENTRADA PARA EL CI
                         ======================================-->
                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="ci" value="{{ $u->ci }}" required>
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
                                <input type="text" class="form-control" name="codigo" value="{{ $u->codigo }}" required>
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
                                <input type="text" class="form-control" name="nombre" value="{{ $u->nombre }}" required>
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
                                <input type="text" class="form-control" name="apellido" value="{{ $u->apellido }}"ng-app="string" required>
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
                                <input type="number" class="form-control" name="celular" value="{{ $u->celular }}" required>
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
                                <input type="text" class="form-control" name="direccion" value="{{ $u->direccion }}" required>
                            </div>
                        </div>

                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="email" class="form-control" name="email" value="{{ $u->email }}" required>
                            </div>
                        </div>

                        <div class="form-group">  
                            <div class="input-group">
                                <span class="input-group-addon"> 
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="password" class="form-control" name="password" value="{{ $u->password }}" required>
                            </div>
                        </div>
                        <!--=====================================
                           ENTRADA PARA el Cargo
                       ======================================-->
                        <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select name="id_cargo" class="form-control input-lg seleccionarTipo" required>
                                    @foreach ($cargo as $c)
                                        @if ($c->id == $u->id_cargo)
                                            <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                                        @else
                                            <option value="{{$c->id}}">{{$c->nombre}}</option>
                                        @endif
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
                    <button type="submit" class="btn btn-primary guardarProducto">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

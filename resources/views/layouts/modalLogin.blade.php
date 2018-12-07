<!--=====================================
VENTANA MODAL PARA EL INGRESO
======================================-->

<div class="modal fade modalFormulario" id="modalIngreso" role="dialog">
    <div class="modal-content modal-dialog">
        <div class="modal-body modalTitulo">
            <h3 class="backColor">INGRESAR</h3>
           <button type="button" class="close" data-dismiss="modal">&times;</button> 
            <!--=====================================
            INGRESO DIRECTO
            ======================================-->
            <form action="{{url('login3')}}"  method="POST">   
                 {{ csrf_field() }}
                 sss
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <hr>
                <div class="form-group">
                    <div class="input-group">  
                        <span class="input-group-addon">   
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> 
                        <span class="input-group-addon">   
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                    </div>
                </div>

                <input type="submit" class="btn btn-default backColor btn-block btnIngreso" value="ENVIAR"> 
                <br>
                <center> 
                    <a href="#modalPassword" data-dismiss="modal" data-toggle="modal"><strong style="color: blue;">¿Olvidaste tu contraseña?</strong></a>
                </center>
            </form>
        </div>
        <div class="modal-footer">
            ¿No tienes una cuenta registrada? | <a href="#modalRegistro" data-dismiss="modal" data-toggle="modal"><strong style="color: blue;">Registrarse</strong></a>
        </div>
    </div>
</div>

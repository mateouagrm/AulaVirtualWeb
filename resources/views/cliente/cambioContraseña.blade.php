@extends ('cliente.panelUsuario')
@section ('contenido')

<div class="container">
    <h3>Cambiar contraseña</h3>
            <!--=====================================
            REGISTRO DIRECTO
            ======================================-->
    <form method="post" action="">  
     <hr>
          <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
            <div class="form-group">  
                <div class="input-group">
                    <span class="input-group-addon"> 
                        <i class="  glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="password" class="form-control" id="regUsuario" name="regUsuario" placeholder="Contraseña actual" required>
                </div>
            </div>
            <div class="form-group">  
                <div class="input-group">
                    <span class="input-group-addon"> 
                        <i class="  glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="password" class="form-control" id="regUsuario" name="regUsuario" placeholder="Nueva contraseña" required>
                </div>
            </div>
            <div class="form-group">  
                <div class="input-group">
                    <span class="input-group-addon"> 
                        <i class="  glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="password" class="form-control" id="regUsuario" name="regUsuario" placeholder="Repite tu contraseña nueva" required>
                </div>
            </div>

            <input type="submit" class="btn backColor btn-lg" value="ENVIAR">
          </div>    
    </form> 
</div>


@endsection
@extends ('cliente.panelUsuario')
@section ('contenido')

<div class="container">
    <h3>PERFIL</h3>
     <hr>
          <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
            <div class="form-group">  
                <div class="input-group">
                    <span class="input-group-addon"> 
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Nombre Completo" disabled="disabled">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group"> 
                    <span class="input-group-addon">   
                            <i class="glyphicon glyphicon-phone"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Numero telefonico celular" disabled="disabled">
                </div>
            </div>
            <div class="form-group"> 
                <div class="input-group"> 
                    <span class="input-group-addon"> 
                    <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                    <input type="text" class="form-control" placeholder="Correo Electrónico" disabled="disabled">
                </div>
            </div>

          </div>     
</div>


@endsection
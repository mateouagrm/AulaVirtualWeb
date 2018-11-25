@extends ('cliente.panelUsuario')
@section ('contenido')

<div class="container">
    <h3>RECOMENDAR</h3>
            <!--=====================================
            REGISTRO DIRECTO
            ======================================-->
    <form method="post" action="">  
     <hr>
        <h3>Recomendado:</h3>
          <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                    <select class="form-control input-lg seleccionarTipo">
                        <option value="">Selecionar Ciudad</option>
                        <option value="">Santa Cruz</option>
                        <option value="">Cochabamba</option>
                        <option value="">Lapaz</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-th"></i></span>
                    <select class="form-control input-lg seleccionarTipo">
                    <option value="">Selecionar la categoria</option>
                    <option value="">Open Box</option>
                    <option value="">Esi Expertos</option>
                    <option value="">Segurity Expert</option>
                    <option value="">Academy Xperts</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn backColor btn-lg" value="ENVIAR">
          </div>    
    </form> 
</div>


@endsection
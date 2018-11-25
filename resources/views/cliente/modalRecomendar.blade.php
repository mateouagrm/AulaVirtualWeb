<!--=====================================
VENTANA MODAL PARA EL REGISTRO
======================================-->

<div class="modal fade modalFormulario" id="modalRecomendar" role="dialog">
    <div class="modal-content modal-dialog">
        <div class="modal-body modalTitulo">
            <h3 class="backColor">RECOMENDAR</h3>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!--=====================================
            REGISTRO DIRECTO
            ======================================-->
            <form method="post" action=""> 
            <p style="font-size: 20px;">Recomendado:</p> 
            <hr>
                <div class="form-group">  
                    <div class="input-group">
                        <span class="input-group-addon"> 
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text" class="form-control text-uppercase" id="regUsuario" name="regUsuario" placeholder="Nombre Completo" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> 
                        <span class="input-group-addon">   
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input type="number" class="form-control" id="regTelefono" name="regTelefono" placeholder="Numero telefonico" required>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="input-group"> 
                        <span class="input-group-addon"> 
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Correo Electrónico" required>
                    </div>
                </div>

                <input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">    
            </form>
        </div>
    </div>
</div>
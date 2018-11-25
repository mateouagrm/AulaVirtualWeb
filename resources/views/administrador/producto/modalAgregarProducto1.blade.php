<div id="modalAgregarProducto" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form> 
            <!--=====================================
           CABEZA DEL MODAL
           ======================================-->
            <div class="modal-header" style="background:#3c8dbc; color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar Items</h4>
            </div>
            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->
            <div class="modal-body">
                <div class="box-body">
                    <!--=====================================
                    ENTRADA PARA EL TÍTULO
                    ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control input-lg validarProducto tituloProducto"  placeholder="Ingresar título Items">
                        </div>
                    </div>
                    <!--=====================================
                     ENTRADA PARA LA SELECCIONAR CIUDAD
                     ======================================-->
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
                    <!--=====================================
                     ENTRADA PARA LA SELECCIONAR CATEGORIA
                     ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <select class="form-control input-lg seleccionarTipo">
                                <option value="">Selecionar Categoria</option>
                                <option value="">OpenBox</option>
                                <option value="">ESI Expertos</option>
                                <option value="">Security Expert</option>
                                <option value="">Academy Xperts</option>
                            </select>
                        </div>
                    </div>
                    <!--=====================================
                     ENTRADA PARA LA SELECCIONAR SUB-CATEGORIA
                     ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            <select class="form-control input-lg seleccionarTipo">
                                <option value="">Selecionar Sub-categoia</option>
                                <option value="">Sub-categoia 1</option>
                                <option value="">Sub-categoia 2</option>
                                <option value="">Sub-categoia 2</option>
                                <option value="">Sub-categoia 4</option>
                            </select>
                        </div>
                    </div>
                    <!--=====================================
                     AGREGAR DESCRIPCIÓN
                     ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <textarea type="text" maxlength="320" rows="3" class="form-control input-lg descripcionProducto" placeholder="Ingresar descripción producto"></textarea>
                        </div>
                    </div>
                    <!--=====================================
                    AGREGAR FOTO DE MULTIMEDIA
                    ======================================-->
                    <div class="form-group">
                        <div class="panel">SUBIR FOTO PRINCIPAL DEL PRODUCTO</div>
                        <input type="file" class="fotoPrincipal">
                        <p class="help-block">Tamaño recomendado 400px * 450px <br> Peso máximo de la foto 2MB</p>
                        <img src="{{asset('img/productos/cursos/curso05.jpg')}}" class="img-thumbnail previsualizarPrincipal" width="200px">
                    </div>

                    <!--=====================================
                   AGREGAR TIEMPO DE CAMPAÑA
                   ======================================-->
                    <div class="form-group row">
                        <!-- INICIO-->
                        <div class="col-md-6 col-xs-12">
                            <div class="panel">INICIO</div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-hourglass"></i></span>
                                <input type="date" class="form-control input-lg precio" step="any">
                            </div>
                        </div>
                        <!-- FIN-->
                        <div class="col-md-6 col-xs-12">
                            <div class="panel">FIN</div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-hourglass-end"></i></span>
                                <input type="date" class="form-control input-lg precio" step="any">
                            </div>
                        </div>
                    </div>
                    <!--=====================================
                     PRECIO
                     ======================================-->
                    <div class="form-group">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                            <input type="number" class="form-control input-lg precio" min="0" step="any" placeholder="precio">
                        </div>
                    </div>
                    <!--=====================================
                     BONO
                     ======================================-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="number" class="form-control input-lg precio" min="0" step="any" placeholder="bono %">
                        </div>
                    </div>
                    <!--=====================================
                    AGREGAR OFERTA
                    ======================================-->
                    <div class="form-group">
                        <div class="panel">OFERTA DEL ITEM</div> 
                         <div class="checkbox">
                            <label><input type="checkbox"> activar</label>
                          </div> 
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="number" class="form-control input-lg precio" min="0" step="any" placeholder="descuento %">
                        </div> 
                    </div>
                    <!--=====================================
                   AGREGAR TIEMPO DE LA OFERTA
                   ======================================-->
                    <div class="form-group row">
                        <!-- INICIO-->
                        <div class="col-md-6 col-xs-12">
                            <div class="panel">INICIO</div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-hourglass"></i></span>
                                <input type="date" class="form-control input-lg precio" step="any">
                            </div>
                        </div>
                        <!-- FIN-->
                        <div class="col-md-6 col-xs-12">
                            <div class="panel">FIN</div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-hourglass-end"></i></span>
                                <input type="date" class="form-control input-lg precio" step="any">
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
                <button type="button" class="btn btn-primary guardarProducto">Guardar Items </button>
            </div>
         </form>
        </div>
    </div>
</div>
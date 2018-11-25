@extends ('layouts.inicio')
@section ('content')

<!--=====================================
BREADCRUMB INFOPRODUCTOS
======================================-->
<div class="container-fluid well well-sm">
    <div class="container"> 
        <div class="row">   
            <ul class="breadcrumb fondoBreadcrumb text-uppercase">  
                <li><a href="#">INICIO</a></li>
                <li class="active pagActiva">segurity xpert</li>

                <span class="pull-right">
                <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" style="width: 100%">sub categorias
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#11">sub categoria 1</a></li>
                    <li class="divider"></li>
                    <li><a href="#22">sub categoria 2</a></li>
                  </ul>
                </div>
                </span>

            </ul>
        </div>
    </div>
</div>

<!--=====================================
LISTAR PRODUCTOS
======================================-->
<div class="container-fluid productos">
    <div class="container">
        <div class="row"> 
            <ul class="grid0">
                <div id="11" class="col-xs-12">
                  <h3 >Sub categoria 1</h3>
                  <hr>  
                </div>
                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                                Nombre Producto 
                                <br>
                                <span>
                                    <a href="{{ url('/infoProducto') }}" class="text-muted">
                                        <i class="fa fa-mail-forward"></i> Detalle
                                    </a>
                                </span>
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2 style="margin-top: 30px;">
                            <small>
                                 <span style="color:rgba(0,0,0,0)">-</span>
                                 <span>
                                    <strong class="oferta">BS 41</strong>
                                 </span>
                                 <span>     
                                    43
                                 </span>
                            </small>
                        </h2>
                    </div>
                    <div class="col-xs-6 enlaces">
                        <div class="btn-group pull-right">
                             <a href="#modalRecomendar" data-toggle="modal">
                                <button class="btn btn-default btn-block btn-md backColor"> RECOMENDAR</button>  
                             </a>
                        </div>
                    </div>
                </li>

                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                                Nombre Producto 
                                <br>
                                <span>
                                    <a href="{{ url('/infoProducto') }}" class="text-muted">
                                        <i class="fa fa-mail-forward"></i> Detalle
                                    </a>
                                </span>
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                         <h2 style="margin-top: 30px;">
                            <small>
                                 <span style="color:rgba(0,0,0,0)">-</span>
                                 <span>
                                    <strong class="oferta">BS 41</strong>
                                 </span>
                                 <span>     
                                    43
                                 </span>
                            </small>
                        </h2>
                    </div>
                    <div class="col-xs-6 enlaces">
                        <div class="btn-group pull-right">
                             <a href="#modalRecomendar" data-toggle="modal">
                                <button class="btn btn-default btn-block btn-md backColor"> RECOMENDAR</button>  
                             </a>
                        </div>
                    </div>
                </li>
                @include('cliente.modalRecomendar')
                 <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                                Nombre Producto 
                                <br>
                                <span>
                                    <a href="{{ url('/infoProducto') }}" class="text-muted">
                                        <i class="fa fa-mail-forward"></i> Detalle
                                    </a>
                                </span>
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                         <h2 style="margin-top: 30px;">
                            <small>
                                 <span style="color:rgba(0,0,0,0)">-</span>
                                 <span>
                                    <strong class="oferta">BS 41</strong>
                                 </span>
                                 <span>     
                                    43
                                 </span>
                            </small>
                        </h2>
                    </div>
                    <div class="col-xs-6 enlaces">
                        <div class="btn-group pull-right">
                             <a href="#modalRecomendar" data-toggle="modal">
                                <button class="btn btn-default btn-block btn-md backColor"> RECOMENDAR</button>  
                             </a>
                        </div>
                    </div>
                </li>

                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                                Nombre Producto 
                                <br>
                                <span>
                                    <a href="{{ url('/infoProducto') }}" class="text-muted">
                                        <i class="fa fa-mail-forward"></i> Detalle
                                    </a>
                                </span>
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                         <h2 style="margin-top: 30px;">
                            <small>
                                 <span style="color:rgba(0,0,0,0)">-</span>
                                 <span>
                                    <strong class="oferta">BS 41</strong>
                                 </span>
                                 <span>     
                                    43
                                 </span>
                            </small>
                        </h2>
                    </div>
                    <div class="col-xs-6 enlaces">
                        <div class="btn-group pull-right">
                             <a href="#modalRecomendar" data-toggle="modal">
                                <button class="btn btn-default btn-block btn-md backColor"> RECOMENDAR</button>  
                             </a>
                        </div>
                    </div>
                </li>
                <div id="22" class="col-xs-12">
                  <h3 >Sub categoria 2</h3>
                  <hr>  
                </div>
                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio05.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                            <a href="#" class="pixelProducto">
                                Nombre Producto
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                            </a>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2><small>GRATIS</small></h2>
                    </div>
                </li>

                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio06.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                            <a href="#" class="pixelProducto">
                                Nombre Producto
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                            </a>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2>
                            <small>
                                <strong class="oferta">BS 500</strong>
                            </small>
                        </h2>
                    </div>
                    <div class="col-xs-6 enlaces">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs deseos" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </button>

                            <button type="button" class="btn btn-default btn-xs agregarCarrito" data-toggle="tooltip" title="Agregar al carrito de compras">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </button>

                            <a href="#" class="pixelProducto">
                                <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/cursos/curso03.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                            <a href="#" class="pixelProducto">
                                Nombre Producto
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                            </a>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2><small>GRATIS</small></h2>
                    </div>
                </li>

                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/cursos/curso02.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                            <a href="#" class="pixelProducto">
                                Nombre Producto
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                            </a>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2>
                            <small>
                                <strong class="oferta">BS 500</strong>
                            </small>
                        </h2>
                    </div>
                    <div class="col-xs-6 enlaces">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs deseos" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </button>

                            <button type="button" class="btn btn-default btn-xs agregarCarrito" data-toggle="tooltip" title="Agregar al carrito de compras">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </button>

                            <a href="#" class="pixelProducto">
                                <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </li>
                
                 <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                        <img src="{{asset('img/productos/accesorios/accesorio01.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                            <a href="#" class="pixelProducto">
                                Nombre Producto
                            <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                            </a>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2><small>GRATIS</small></h2>
                    </div>
                </li>

                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                            <a href="#" class="pixelProducto">
                                Nombre Producto
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                            </a>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2>
                            <small>
                                <strong class="oferta">BS 500</strong>
                            </small>
                        </h2>
                    </div>
                    <div class="col-xs-6 enlaces">
                        <div class="btn-group pull-right">
                             <a href="#modalRecomendar" data-toggle="modal">
                                <button type="button" class="btn btn-default btn-xs agregarCarrito" data-toggle="tooltip" title="Recomendar">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                               </button>  
                             </a>
                            <a href="#" class="pixelProducto">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12">
                    <figure>
                        <a href="#" class="pixelProducto">
                            <img src="{{asset('img/productos/accesorios/accesorio03.jpg')}}" class="img-responsive">
                        </a>
                    </figure>
                    <h4>
                        <small>
                            <a href="#" class="pixelProducto">
                                Nombre Producto
                                <br>
                                <span style="color:rgba(0,0,0,0)">-</span>
                                <span class="label label-warning fontSize">Nuevo</span>
                                <span class="label label-warning fontSize">20% off</span>
                            </a>
                        </small>
                    </h4>
                    <div class="col-xs-6 precio">
                        <h2><small>GRATIS</small></h2>
                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
            <!--=====================================
			PAGINACIÓN
			======================================-->
            <center>
                <ul class="pagination">
                    <li id="item"><a href="#">1</a></li>
                    <li id="item"><a href="#">2</a></li>
                    <li id="item"><a href="#">3</a></li>
                    <li class="disabled"><a>...</a></li>
                    <li id="item2"><a href="#">5</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </center>
        </div>
    </div>
</div>
@endsection
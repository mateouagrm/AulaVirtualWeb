@extends ('layouts.inicio')
@section ('content')

<!--=====================================
SLIDESHOW  
======================================-->
<div class="container-fluid" id="slide">
	<div class="row">	
		<!--=====================================
		DIAPOSITIVAS
		======================================-->
		<ul>
			<!-- SLIDE 1 -->
			<li>
				<img src="{{asset('img/slide/default/back_default.jpg')}}">
				<div class="slideOpciones slideOpcion1">	
					<img class="imgProducto" src="{{asset('img/slide/slide1/calzado.png')}}" style="top:15%; right:10%; width:45%">
					<div class="textosSlide" style="top:20%; left:10%; width:40%">	
						<h1 style="color:#333">Lorem Ipsum</h1>
						<h2 style="color:#777">Lorem ipsum dolor sit</h2>
						<h3 style="color:#888">Lorem ipsum dolor sit</h3>
						<a href="#">	
							<button class="btn btn-default backColor text-uppercase">
							VER PRODUCTO <span class="fa fa-chevron-right"></span>
							</button>
						</a>
					</div>	
				</div>
			</li>	
			<!-- SLIDE 2 -->
			<li>
				<img src="{{asset('img/slide/default/back_default.jpg')}}">
				<div class="slideOpciones slideOpcion2">	
					<img class="imgProducto" src="{{asset('img/slide/slide2/curso.png')}}" style="top:5%; left:15%; width:25%">
					<div class="textosSlide" style="top:15%; right:15%; width:40%">	
						<h1 style="color:#333">Lorem Ipsum</h1>
						<h2 style="color:#777">Lorem ipsum dolor sit</h2>
						<h3 style="color:#888">Lorem ipsum dolor sit</h3>
						<a href="#">	
							<button class="btn btn-default backColor text-uppercase">
							VER PRODUCTO <span class="fa fa-chevron-right"></span>
							</button>
						</a>
					</div>	
				</div>
			</li>	
			<!-- SLIDE 3 -->
			<li>
				<img src="{{asset('img/slide/default/back_default.jpg')}}">
				<div class="slideOpciones slideOpcion2">	
					<img class="imgProducto" src="{{asset('img/slide/slide3/iphone.png')}}" style="top:5%; left:15%; width:25%">
					<div class="textosSlide" style="top:15%; right:15%; width:40%">	
						<h1 style="color:#eee">Lorem Ipsum</h1>
						<h2 style="color:#ccc">Lorem ipsum dolor sit</h2>
						<h3 style="color:#aaa">Lorem ipsum dolor sit</h3>
						<a href="#">	
							<button class="btn btn-default backColor text-uppercase">
							VER PRODUCTO <span class="fa fa-chevron-right"></span>
							</button>
						</a>
					</div>	
				</div>
			</li>
			<!-- SLIDE 4 -->
			<li>
				<img src="{{asset('img/slide/default/back_default.jpg')}}">
				<div class="slideOpciones slideOpcion1">
					<img class="imgProducto" src="" style="top:5%; right:15%; width:25%">
					<div class="textosSlide" style="top:20%; left:10%; width:40%">	
						<h1 style="color:#333">Lorem Ipsum</h1>
						<h2 style="color:#777">Lorem ipsum dolor sit</h2>
						<h3 style="color:#888">Lorem ipsum dolor sit</h3>
						<a href="#">	
						<!-- 	<button class="btn btn-default backColor text-uppercase">
							VER PRODUCTO <span class="fa fa-chevron-right"></span>
							</button> -->
						</a>
					</div>	
				</div>
			</li>		
		</ul>
		<!--=====================================
		PAGINACIÓN
		======================================-->
		<ol id="paginacion">
        	<li item="1"><span class="fa fa-circle"></span></li>
			<li item="2"><span class="fa fa-circle"></span></li>
			<li item="3"><span class="fa fa-circle"></span></li>
			<li item="4"><span class="fa fa-circle"></span></li>
		</ol>	
		<!--=====================================
		FLECHAS
		======================================-->	
		<div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
		<div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>
	</div>
</div>

<center>
	<button id="btnSlide" class="backColor">
			<i class="fa fa-angle-up"></i>
	</button>
</center>

<div class="container">
  <hr>
  <div class="row">
  	  <div class="col-xs-12 tituloDestacado">	
		<!--===============================================-->
		<div class="col-sm-6 col-xs-12">	
			<h1><small>TUTORIALES </small></h1>
		</div>
		<!--===============================================-->
	</div>
	<div class="clearfix"></div>
	<hr>
    <div class="col-sm-6">
      	<h3>Column 1</h3>
	      sfsd
	    </div>
	    <div class="col-sm-6">
	      <h3>Column 2</h3>
			<div class="card">
			  <div class="card-body">
			
			   </div>
			</div>
	    </div>
  </div>
</div>


<!--=====================================
VITRINA DE PRODUCTOS MÁS VENDIDOS
======================================-->
<div class="container-fluid productos">
	<div class="container">
		<hr>
		<div class="row">
			<!--=====================================
			BARRA TÍTULO
			=====================================-->
			<div class="col-xs-12 tituloDestacado">	
				<!--===============================================-->
				<div class="col-sm-6 col-xs-12">	
					<h1><small>LO NUEVO </small></h1>
				</div>
				<!--===============================================-->
				<div class="col-sm-6 col-xs-12">
					<a href="#">	
						<button class="btn btn-default backColor pull-right">
							VER MÁS <span class="fa fa-chevron-right"></span>
						</button>
					</a>
				</div>
				<!--===============================================-->
			</div>
			<div class="clearfix"></div>
			<hr>
		</div>
		<!--=====================================
		VITRINA DE PRODUCTOS EN CUADRÍCULA
		======================================-->
		<ul class="grid1">
			<!-- Producto 1 -->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<!--===============================================-->
				<figure>
					<a href="#" class="pixelProducto">
						<img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
					</a>
				</figure>
				<!--===============================================-->
				<h4>
					<small>
						<a href="#" class="pixelProducto">
							Falda de Flores<br>
							<span class="label label-warning fontSize">Nuevo</span> 
							<span class="label label-warning fontSize">40% off</span>
						</a>	
					</small>			
				</h4>
				<!--===============================================-->
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $29</strong>
						</small>
						<small>$11</small>
					</h2>
				</div>
				<!--===============================================-->
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">	
								<i class="fa fa-eye" aria-hidden="true"></i>
							</button>	
						</a>
					</div>
				</div>
			</li>
			<!-- Producto 2 -->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<!--===============================================-->
				<figure>
					<a href="#" class="pixelProducto">
						<img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
					</a>
				</figure>
				<!--===============================================-->
				<h4>
					<small>
						<a href="#" class="pixelProducto">
							Vestido Jean<br>
							<span class="label label-warning fontSize">40% off</span>
						</a>	
					</small>			
				</h4>
				<!--===============================================-->
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $29</strong>
						</small>
						<small>$11</small>
					</h2>
				</div>
				<!--===============================================-->
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">	
								<i class="fa fa-eye" aria-hidden="true"></i>
							</button>	
						</a>
					</div>
				</div>
			</li>
			<!-- Producto 3 -->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<!--===============================================-->
				<figure>
					<a href="#" class="pixelProducto">
						<img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
					</a>
				</figure>
				<!--===============================================-->
				<h4>
					<small>
						<a href="#" class="pixelProducto">
							Vestido Clásico<br>
							<span class="label label-warning fontSize">40% off</span>
						</a>	
					</small>			
				</h4>
				<!--===============================================-->
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $29</strong>
						</small>
						<small>$11</small>
					</h2>
				</div>
				<!--===============================================-->
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">	
								<i class="fa fa-eye" aria-hidden="true"></i>
						 </button>	
						</a>
					</div>
				</div>
			</li>
			<!-- Producto 4 -->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<!--===============================================-->
				<figure>
					<a href="#" class="pixelProducto">	
						<img src="{{asset('img/productos/accesorios/accesorio02.jpg')}}" class="img-responsive">
					</a>
				</figure>
				<!--===============================================-->
				<h4>
					<small>
						<a href="#" class="pixelProducto">	
							Top Dama
							<br>
							<br>
						</a>	
					</small>			
				</h4>
				<!--===============================================-->
				<div class="col-xs-6 precio">
					<h2>
						<small>USD $29</small>
					</h2>
				</div>
				<!--===============================================-->
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</button>
						<a href="#" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</button>	
						</a>
					</div>
				</div>
			</li>	
		</ul>
	</div>
</div>


<div class="container">
  <hr>
  <div class="row">	
	 <div class="col-xs-12 tituloDestacado">	
		<!--===============================================-->
		<div class="col-sm-6 col-xs-12">	
			<h1><small>GRUPO WRITEL </small></h1>
		</div>
		<!--===============================================-->
	</div>
	<div class="clearfix"></div>
	<hr>
    <div class="col-sm-6 col-md-3">
        <img src="{{asset('img/cursos/open_box.png')}}" alt="Lights" class="img-rounded" style="width:300px;height: 150px;">
       <div class="caption">
          <p>Empresa de ventas masivas en soluciones para el hogar o empresa.</p>
       </div>
        <div class="dropdown" >
		  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%">selecciona tu ciudad
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu" style="width: 100%">
		    <li><a href="#">La paz</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Santa Cruz</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Cochabamba</a></li>
		  </ul>
		</div>
    </div>
    <div class="col-sm-6 col-md-3">
        <img src="{{asset('img/cursos/esi.png')}}" class="img-rounded" alt="Lights" style="width: 300px; height: 150px;">
        <div class="caption">
          <p>Empresa de servicios informáticos, help-desk.</p>
        </div>
        <div class="dropdown" >
		  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%">selecciona tu ciudad
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu" style="width: 100%">
		    <li><a href="#">La paz</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Santa Cruz</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Cochabamba</a></li>
		  </ul>
		</div>
    </div>
    <div class="col-sm-6 col-md-3">
        <img src="{{asset('img/cursos/security_xperts.png')}}" class="img-rounded" alt="Lights" style="width: 300px; height: 150px;">
        <div class="caption">
          <p>Empresa de servicios y ventas al por menor y mayor de equipos de seguridad electrónica y domótica.</p>
        </div>
        <div class="dropdown" >
		  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%">selecciona tu ciudad
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu" style="width: 100%">
		    <li><a href="#">La paz</a></li>
		    <li class="divider"></li>
		    <li><a href="{{ url('/productos') }}">Santa Cruz</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Cochabamba</a></li>
		  </ul>
		</div>
    </div>
    <div class="col-sm-6 col-md-3">
        <img src="{{asset('img/cursos/academy_xperts.png')}}" class="img-rounded" alt="Lights" style="width: 300px; height: 150px;">
        <div class="caption">
          <p>Certificadora internacional en el área de networking y sistemas.</p>
        </div>
        <div class="dropdown" >
		  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%">selecciona tu ciudad
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu" style="width: 100%">
		    <li><a href="#">La paz</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Santa Cruz</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Cochabamba</a></li>
		  </ul>
		</div>
    </div>
   </div>
  </div>
</div>

@push('scripts')
<script src="{{asset('js/slide.js')}}"></script>
@endpush
@endsection
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
				<li class="active pagActiva">fhdgbfv</li>
			</ul>
		</div>
	</div>
</div>

<!--=====================================
INFOPRODUCTOS
======================================-->
<div class="container-fluid infoproducto">
	<div class="container">
		<div class="row">
		<!--=============================================
		VISOR DE IMÁGENES
		=============================================-->
         <div class="col-md-5 col-sm-6 col-xs-12 visorImg">			
		   <figure class="visor">
             <img class="img-thumbnail" src="{{asset('img/slide/slide1/calzado.png')}}" style="height: 300px;">
           </figure>
		 </div>
		<!--=====================================
		PRODUCTO
		======================================-->
        <div class="col-md-7 col-sm-6 col-xs-12">
				<!--=====================================
				REGRESAR A LA TIENDA
				======================================-->
				<div class="col-xs-6">
					<h6>
						<a href="javascript:history.back()" class="text-muted">
							<i class="fa fa-reply"></i> Continuar viendo
						</a>
					</h6>
				</div>
					<!--=============================================
					TITULO
					=============================================-->	
				<br><br>
                <h1 class="text-muted text-uppercase">vgvv,bd
				  <br>
                    <small>
					  <span class="label label-warning">Nuevo</span> 
					  <span class="label label-warning">21% off</span> 
					</small>
				</h1>
					<!--=============================================
					TITULO
					=============================================-->	
                   <h2 class="text-muted">
				     <span>
						<strong class="oferta">BS 41</strong>
					 </span>
					 <span>		
						43
					 </span>
					</h2>
					<!--=============================================
					DESCRIPCIÓN
					=============================================-->		
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<!--=============================================
					ENTREGA
					=============================================-->
				<h4 class="col-md-12 col-sm-0 col-xs-0">
				  <hr>
				  <span class="label fondo" style="font-weight:100">
					<i class="fa fa-clock-o" style="margin-right:5px"></i>
					Disponible |
					<i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
					 12 ventas
				  </span>
				</h4>
				<h4 class="col-lg-0 col-md-0 col-xs-12">
				 <hr>
					<small>		
						<i class="fa fa-clock-o" style="margin-right:5px"></i>
						Disponible  <br>
						<i class="fa fa-shopping-cart" style="margin-right:5px"></i>
					    12 ventas
					</small>
				</h4>
		<!--=====================================
		BOTONES DE COMPRA
		======================================-->
		<div class="row botonesCompra">
		  <div class="col-md-6 col-xs-12">
		  	<hr>
			 <a href="#" data-toggle="modal">
				<button class="btn btn-default btn-block btn-lg backColor">	RECOMENDAR</button>
			 </a>
		  </div>
		</div>
	  </div>
	</div>	
  </div>
</div>
	
@endsection
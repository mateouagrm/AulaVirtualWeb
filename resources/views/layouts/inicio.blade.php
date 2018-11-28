<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>writel Bolivia S.R.L.</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{asset('css/plantilla.css')}}">
    <link rel="stylesheet" href="{{asset('css/cabezote.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/slide.css')}}">
    <link rel="stylesheet" href="{{asset('css/productos.css')}}">
    <link rel="stylesheet" href="{{asset('css/infoproducto.css')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
</head>
<body>
<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!--=====================================
            SOCIAL
            ======================================-->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                <ul>
                    <li>
                        <a href="http://facebook.com/" target="_blank">
                            <i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://youtube.com/" target="_blank">
                            <i class="fa fa-youtube redSocial youtubeBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/" target="_blank">
                            <i class="fa fa-twitter redSocial twitterBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/" target="_blank">
                            <i class="fa fa-instagram redSocial instagramBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrador <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('administrador-cargo')}}">Cargo</a></li>
                        <li class="divider"></li>
                        <li><a href="{{url('administrador-ciclo')}}">Ciclo</a></li>
                        <li class="divider"></li>
                        <li><a href="{{url('administrador-cronograma')}}">Cronograma</a></li>
                        <li class="divider"></li>
                        <li><a href="{{url('administrador-users')}}">Users</a></li>
                        <li><a href="{{url('administrador-aula-virtual')}}">Aula Virtual</a></li>
                        <li><a href="{{url('administrador-requisito')}}">requisito</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
            <!--=====================================
            REGISTRO
            ======================================-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
                <ul>
                    <li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
                    <li>|</li>
                    <li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>
                </ul>
            </div>
            @include('layouts.modalRegister')
            @include('layouts.modalLogin')
        </div>
    </div>
</div>
<!--=====================================
HEADER
======================================-->
<header class="container-fluid">
    <div class="container">
        <div class="row" id="cabezote">
            <!--=====================================
            LOGOTIPO
            ======================================-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
                <a href="{{ url('/') }}">
                    <img src="{{asset('img/logo.png')}}" class="img-responsive">
                </a>
            </div>
            <!--=====================================
            BLOQUE CATEGORÍAS Y BUSCADOR
            ======================================-->
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <!--=====================================
                BUSCADOR
                ======================================-->
                <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="buscador">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
						<a href="#">
							<button class="btn btn-default backColor" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</a>
					</span>
                </div>
            </div>
            <!--=====================================
            CARRITO DE COMPRAS
            ======================================-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                <a href="#">
                    <button class="btn btn-default pull-left backColor">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </button>
                </a>
                <p>ACUMULADO <span class="cantidadCesta"></span> <br> BS <span class="sumaCesta">20</span></p>
            </div>
        </div>
    </div>
</header>
 
 <div>
      @yield('content') 
 </div>




<!--=====================================
FOOTER
======================================-->
<footer class="container-fluid">
    <div class="container">
        <div class="row">

            <!--=====================================
            DATOS CONTACTO
            ======================================-->
            <div class="col-md-3 col-sm-6 col-xs-12 text-left infoContacto">
                <h1 style="color: #ffffff">Bolivia:</h1>
                <br>
                <h5>

                    <i class="fa fa-phone-square" aria-hidden="true"></i> (591–3) 359 6671 (INT. 501) | 71092872
                    <br><br>
                    <i class="fa fa-envelope" aria-hidden="true"></i> INFO@WRITELBOLIVIA.COM
                    <br><br>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Calle puerto pailas, 82, Santa Cruz
                    <br><br>
                    <i class="fa fa-globe" aria-hidden="true"></i> writelbolivia.com
                    <br><br>
                    santa cruz | Bolivia
                </h5>

            </div>

            <!--=====================================
                MAPS  FOOTER
            ======================================-->
            <div class="col-lg-5 col-md-6 col-xs-12 footerCategorias">
                <div style="width: 100%">
                    <iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&height=300&hl=es&coord=-17.788695114548204,-63.19747857857756&q=Writel%20Bolivia%20S.R.L.+(Writel%20Bolivia%20S.R.L.)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/crear-un-mapa-de-google/">Crear Google Map</a> by <a href="https://www.mapsdirections.info/">Mapa España</a></iframe>
                </div><br />
            </div>

            <!--=====================================
            FORMULARIO CONTÁCTENOS
            ======================================-->
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 formContacto">
                <h4>CONTACTO</h4>
                <form role="form" method="post" onsubmit="return validarContactenos()">
                    <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required>
                    <br>
                    <input type="email" id="emailContactenos" name="emailContactenos" class="	form-control" placeholder="Escriba su correo electrónico" required>
                    <br>
                    <input type="text"  name="asunto" class="	form-control" placeholder="Escriba su asunto" required>
                    <br>
                    <textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="3" required></textarea>
                    <br>
                    <input type="submit" value="Enviar" class="btn btn-default backColor pull-right" id="enviar">
                </form>
            </div>
        </div>
    </div>
</footer>
<!--=====================================
FINAL
======================================-->
<div class="container-fluid final">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12 text-left text-muted">
                <h5>&copy; 2018 Todos los derechos reservados. Sitio elaborado por www.writelbolivia.com</h5>
            </div>
            <div class="col-sm-6 col-xs-12 text-right social">
                <ul>
                    <li>
                        <a href="http://facebook.com/" target="_blank">
                            <i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://youtube.com/" target="_blank">
                            <i class="fa fa-youtube redSocial youtubeBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/" target="_blank">
                            <i class="fa fa-twitter redSocial twitterBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/" target="_blank">
                            <i class="fa fa-instagram redSocial instagramBlanco" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<a id="scrollUp" href="#top"></a>
</div>


<script src="{{asset('js/plugins/jquery.min.js')}}"></script>
@stack('scripts')
<script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.easing.js')}}"></script>
<script src="{{asset('js/plugins/jquery.scrollUp.js')}}"></script>
<script src="{{asset('js/plugins/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/slide.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/plantilla.js')}}"></script>
<script src="{{asset('js/infoproducto.js')}}"></script>

</body>
</html>
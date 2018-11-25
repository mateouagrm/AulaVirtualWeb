<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>writel Bolivia S.R.L.</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{asset('css/plantilla.css')}}">
    <link rel="stylesheet" href="{{asset('css/cabezote.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/slide.css')}}">

    <link rel="shortcut icon" type="image/ico" href="{{asset('favicon.ico')}}">
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
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 social">
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
            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12 social">
                <ul>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestionar <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/administrador') }}">Usuario</a></li>
                        <li><a href="{{ url('/administrador-productos') }}">Items</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/administrador-categoria') }}">Categoria</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sub-Categoria</a></li>
                      </ul>
                    </li>
                    
                </ul>
            </div>
            <!--=====================================
            REGISTRO
            ======================================-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 registro">
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
            <div class="col-lg-12 col-md-12 col-sm-2 col-xs-12" id="logotipo">
                <center>
                <a href="{{ url('/administrador') }}">
                <img src="{{asset('img/logo.png')}}" class="img-responsive">
                </a>
                </center>
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
            <div class="col-xs-12 infoContacto">
                <h2 style="color: #ffffff">Bolivia:</h2>
                 <h5>
                    <i class="fa fa-phone-square" aria-hidden="true"></i> (591–3) 359 6671 (INT. 501) | 71092872
                    &nbsp;
                    <i class="fa fa-envelope" aria-hidden="true"></i> INFO@WRITELBOLIVIA.COM
                  &nbsp;
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Calle puerto pailas, 82, Santa Cruz
                   &nbsp;
                    <i class="fa fa-globe" aria-hidden="true"></i> writelbolivia.com
                   <br><br>
                    santa cruz | Bolivia
                </h5>
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
</div>


<script src="{{asset('js/plugins/jquery.min.js')}}"></script>
@stack('scripts')
<script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.easing.js')}}"></script>
<script src="{{asset('js/slide.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/registrarUsuario.js')}}"></script>
<script src="{{asset('js/registrarProducto.js')}}"></script>

</body>
</html>
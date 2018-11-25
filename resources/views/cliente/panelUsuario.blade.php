@extends ('layouts.inicio')
@section ('content')

<div class="container">
    <div class="wrapper">

  <div class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color: black;"><b>panel usuario</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" >
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </div>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <center><li class="header"><strong>NAVEGACION</strong></li></center>
        <li>
          <a href="{{ url('/perfil') }}">
            <i class="fa fa-user"></i> <span>Perfil</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/bono') }}">
            <i class="fa fa-money"></i> <span>Bonos de cursos</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/recomendar') }}">
            <i class="fa fa-pencil-square-o"></i> <span>Recomendar curso</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Ofertas</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/cambioContraseña') }}">
            <i class="fa fa-lock"></i> <span>Cambiar contraseña</span>
          </a>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #ffffff">
    <!-- Main content -->

      <!-- Default box -->


           @yield('contenido')

        <!-- /.box-body -->

      <!-- /.box -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
</div>


@endsection
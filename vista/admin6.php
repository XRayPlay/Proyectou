<?php
  include "../php/clases.php";

    
    session_start();

    if(!isset($_SESSION['usuario'])){
      include('../php/cerrar_sesion.php');
      session_destroy();
      die();
  }

    $fechaDActual= date('d');
    $fechaMActual= date('m');
    $fechaAActual= date('Y');
    $f=array(
        $fechaDActual,
        $fechaMActual,
        $fechaAActual
    );

    $fechaDmin= date("01");
    $fechaMmin= date("01");
    $fechaAmin= date('Y');
    $f2=array(
        $fechaDmin,
        $fechaMmin,
        $fechaAmin
    );


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion - UECPPB</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plantilla/AdminLTE/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../public/css/estilt.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../plantilla/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            
          </a>

          </a>

        </div>
      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio.php" class="brand-link">
      <img src="../asset/Ponlecorazon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Elecciones</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../asset/usuario.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
          $userr= $_SESSION['usuario'];
          echo $userr;
          ?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Comunidad
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comunas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin6.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro habitante</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de postulados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de votantes</p>
                </a>
              </li>

          </li>


        </ul>

        <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Votaciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="votante.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Votar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postulados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin5.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resultados</p>
                </a>
              </li>
          </li>
        </ul>



        <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Opciones de Usuario
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="chpass.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambio de Contraseña</p>
                </a>
            </li>

            <li class="nav-item">
                  <a href="../php/cerrar_sesion.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cerrar Sesion</p>
                  </a>
            </li>
          </li>
        </ul>     
      </nav>

      <li class="nav-item">
            <a href="../php/cerrar_sesion.php" class="nav-link">

              <p>Cerrar Sesion</p>
            </a>
          </li>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <main>

    <center><h1 class="titulo">Registro Habitantes</h1></center><br><br>
    
  <?php       
    $c= new conectar();
    $conexion=$c->conexion();
  ?>

    <form action="../php/insertar_datos.php" class="formulario" id="formulario" enctype="multipart/form-data" method="post">

      <div class="formulario__grupo" id="grupo__cedula">
      <label for="cedula" class="formulario__label">Cedula</label>
      <div class="formulario__grupo-input">
        <div class="input-group">
        <select class="formulario__input" name="cedulanac" id="cedulanac" placeholder="">
        <option value="">Seleccione</option>
        <option value="V">Venezolano</option>
        <option value="E">Extranjero</option>
      </select>
          <input type="text" class="formulario__input" name="cedula" id="cedula" placeholder="cedula" max="9" value="">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
      </div>
      <p class="formulario__input-error">La Cedula debe comenzar con V, E, P o J y debe contener 8 digitos.</p>
      </div>


      <div class="formulario__grupo" id="grupo__nombre">
      <label for="nombre" class="formulario__label">Nombre</label>
      <div class="formulario__grupo-input">
      <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">El Nombre tiene que tener solo letras y espacios.</p>
      </div>

      <div class="formulario__grupo" id="grupo__apellido">
      <label for="apellido" class="formulario__label">Apellido</label>
      <div class="formulario__grupo-input">
      <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Apellido">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">El Apellido tiene que tener solo letras y espacios.</p>
      </div>

      <div class="formulario__grupo" id="grupo__sexo">
      <label for="sexo" class="formulario__label">Sexo</label>
      <div class="formulario__grupo-input">
      <select class="formulario__input" name="sexo" id="sexo" placeholder="">

        <option value="">Seleccione</option>
        <option value="F">Femenino</option>
        <option value="M">Masculino</option>

      </select>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Tiene que seleccionar una opción</p>
      </div>


      <div class="formulario__grupo" id="grupo__fechanacimiento">
      <label for="fechanacimiento" class="formulario__label">fecha de nacimiento</label>
      <div class="formulario__grupo-input">
      <input type="date" class="formulario__input" name="fechanacimiento" id="fechanacimiento" placeholder="">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Introduzca una fecha validad</p>
      </div>

      <div class="formulario__grupo" id="grupo__familia">
      <label for="familia" class="formulario__label">Familia</label>
      <div class="formulario__grupo-input">
      <select class="formulario__input" name="familia" id="familia" placeholder="">

      <option value="">Seleccione</option>
        <?php
            $query = "SELECT * FROM `familia`";
            $ejecutar = mysqli_query($conexion, $query);

            foreach ($ejecutar as $option) {
            ?>
        <option value="<?php echo $option['familiaid']." - ".$option['parentesco'];?>"><?php echo $option['parentesco'];?></option>
        <?php } ?>


      </select>
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Tiene que seleccionar una opción</p>
      </div>

      <div class="formulario__grupo" id="grupo__direccion">
      <label for="direccion" class="formulario__label">Direccion</label>
      <div class="formulario__grupo-input">
      <select class="formulario__input" name="direccion" id="direccion" placeholder="">
        
      <option value="">Seleccione</option>
        <?php
            $query = "SELECT * FROM `direccion`";
            $ejecutar = mysqli_query($conexion, $query);

            foreach ($ejecutar as $option) {
            ?>
        <option value="<?php echo $option['direccid'];?>"><?php echo $option['bloque']." ".$option['letra']." ".$option['piso']." ".$option['apto'];?></option>
        <?php } ?>
        
      </select>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Tiene que seleccionar una opción</p>
      </div>

      <div class="formulario__grupo" id="grupo__comunidad">
      <label for="comunidad" class="formulario__label">Comunidad</label>
      <div class="formulario__grupo-input">
      <select class="formulario__input" name="comunidad" id="comunidad" placeholder="">

      <option value="">Seleccione</option>
      <?php
            $query = "SELECT * FROM `consejocomunal`";
            $ejecutar = mysqli_query($conexion, $query);

            foreach ($ejecutar as $option) {
            ?>
        <option value="<?php echo $option['idcomunidad']." - ".$option['nombrecomuna'];?>"><?php echo $option['nombrecomuna'];?></option>
        <?php } ?>

      </select>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Tiene que seleccionar una opción</p>
      </div>


      <!-- Grupo: Imagen del postulado -->
      <div class="formulario__grupo" id="grupo__imagen">
      <label for="imagen" class="formulario__label">Imagen del postulado</label>
      <input type="file" class="formulario__input" name="imagen" id="imagen" placeholder="imagen">
      </div>



      <div class="formulario__mensaje" id="formulario__mensaje">
        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
      </div>

      <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" name="btn" class="formulario__btn">Enviar</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Datos enviados exitosamente!</p>


      </div>

    </form>
    <script src="../public/js/formhabitantes.js"></script>




    </main>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plantilla/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plantilla/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plantilla/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plantilla/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plantilla/AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plantilla/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plantilla/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plantilla/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plantilla/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="../plantilla/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plantilla/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plantilla/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plantilla/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../plantilla/AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../plantilla/AdminLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../plantilla/AdminLTE/dist/js/pages/dashboard.js"></script>
</body>
</html>

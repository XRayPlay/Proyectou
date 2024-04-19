<?php
  require_once "../php/clases.php";

    
    session_start();

    if(!isset($_SESSION['usuario'])){
        include('../php/cerrar_sesion.php');
        session_destroy();
        die();
    }

    $fechaDActual= date('d');
    $fechaMActual= date('m');
    $fechaAActual= date('Y')-4;
    $f=array(
        $fechaDActual,
        $fechaMActual,
        $fechaAActual
    );

    $fechaDmin= date("01");
    $fechaMmin= date("01");
    $fechaAmin= date('Y')-15;
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
  <link rel="stylesheet" href="../css/estilo.css">
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
    <a href="index3.html" class="brand-link">
      <img src="../asset/images/CPPB.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Postulación a elecciones</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../asset/images/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
          $c= new conectar();
          $conexion=$c->conexion();
          $query = $conexion -> query ("SELECT * FROM `user` WHERE `usuario`= '".$_SESSION['usuario']."'");
          while ($row = mysqli_fetch_array($query)) { 
            $obj= new Estudiante();
            $sql="SELECT * from representante where id_representante='".$row['id_user']."'";
            $datos=$obj->listar($sql);

            foreach ($datos as $key) {
              echo $key['nombres'];

          }}?></a>
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
                Inscripcion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./admin2.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estudiantes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uniforme</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estudiantes Inscritos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos del Perfil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="chpassa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambio de Contraseña</p>
                </a>
              </li>

          </li>


        </ul>
        <li class="nav-item">
            <a href="../php/cerrar_sesion.php" class="nav-link">

              <p>Cerrar Sesion</p>
            </a>
        </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <main>

    


    <form action="dbestudiantes.php" class="formulario" id="formulario" method="post">

      <div class="formulario__grupo" id="grupo__cedula">
      <label for="cedula" class="formulario__label"></label>
      <div class="formulario__grupo-input">
        <div class="input-group">
          <input type="text" class="formulario__input" name="doc" id="cedula" placeholder="Cedula">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
      </div>
      <p class="formulario__input-error">La Cedula debe contener 8 digitos.</p>
      </div>

      <!-- Grupo: Nombre -->
      <div class="formulario__grupo" id="grupo__nombre">
      <label for="nombre" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <input type="text" class="formulario__input" name="name" id="nombre" placeholder="Nombre">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">El Nombre tiene que ser de 4 a 30 Caracteres.</p>
      </div>

      <div class="formulario__grupo" id="grupo__apellido">
      <label for="apellido" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <input type="text" class="formulario__input" name="apel" id="apellido" placeholder="Apellido">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">El Apellido tiene que ser de 4 a 30 Caracteres.</p>
      </div>


      <!-- Grupo: Contraseña -->
      <div class="formulario__grupo" id="grupo__sexo">
      <label for="sexo" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <select type="sexo" class="formulario__input" name="sex" id="sexo" placeholder="Sexo">
                  <option value="">Sexo</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
              </select>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
      </div>


      <div class="formulario__grupo" id="grupo__fechanacimiento">
      <label for="fechanacimiento" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <input type="date" class="formulario__input" name="fn" id="fechanacimiento" placeholder="Fecha de Nacimiento">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
      </div>

      <!-- Grupo: Correo Electronico -->
      <div class="formulario__grupo" id="grupo__lugarnacimiento">
      <label for="lugarnacimiento" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <input type="text" class="formulario__input" name="ln" id="lugarnacimiento" placeholder="Lugar de Nacimiento">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">El Lugar de Nacimiento solo puede contener letras.</p>
      </div>

      <!-- Grupo: Teléfono -->
      <div class="formulario__grupo" id="grupo__condicionvivienda">
      <label for="condicionvivienda" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <select type="text" class="formulario__input" name="con" id="condicionvivienda" placeholder="Condicion de Vivienda">
                <option value="">Condicion de Vivienda</option>
                <option value="mama">Mama</option>
                <option value="papa y mama">papa y mama</option>
                <option value="papa">papa</option>
              </select>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">La condicion de vivienda.</p>
      </div>

      <div class="formulario__grupo" id="grupo__catedra">
      <label for="catedra" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <select class="formulario__input" name="aec" id="catedra" placeholder="Catedra Extra Fuera de la institucion">
                  <option value="">Catedra Extra Fuera de la institucion</option>
                  <option value="1">Ninguno</option>
                  <option value="2">Baloncesto</option>
                  <option value="3">Fútbol</option>
                  <option value="4">Tenis</option>
                  <option value="5">Golf</option>
                  <option value="6">Béisbol</option>
                  <option value="7">Ciclismo</option>
                  <option value="8">Voleibol</option>
                  <option value="9">Boxeo</option>
              </select>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">La condicion de vivienda.</p>
      </div>

      <div class="formulario__grupo" id="grupo__aulaintegrada">
      <label for="aulaintegrada" class="formulario__label"></label>
      <div class="formulario__grupo-input">
      <select class="formulario__input" name="ai" id="aulaintegrada">
                  <option value="1">Aula Integrada</option>
                  <option value="2">No</option>
                  <option value="3">Si</option>
              </select>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">La condicion de vivienda.</p>
      </div>

      <div class="formulario__mensaje" id="formulario__mensaje">
        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
      </div>

      <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" name="btn111" class="formulario__btn">Enviar</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Datos enviados exitosamente!</p>


      </div>

      <input type="hidden" name="idrepre" value="
      <?php
        $c = new conectar();
        $conexion = $c->conexion();
        $query = $conexion -> query ("SELECT * FROM `user` WHERE `usuario`= '".$_SESSION['usuario']."'");
        while ($row = mysqli_fetch_array($query)) {
          echo $row['id_user'];

          }?>
      ">
      <input type="hidden" name="idgrado" value="1">
      <input type="hidden" name="idnivel" value="1">
                            <p class="warnings" id="warnings"></p>
    </form>
    <script src="../asset/js/formestudiante.js"></script>




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

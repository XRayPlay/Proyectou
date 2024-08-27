<?php
    require_once "../../php/clases.php";    
    session_start();

    if(!isset($_SESSION['usuario'])){
        include('../../php/cerrar_sesion.php');
        session_destroy();
        die();
    }

    $cedula = $_POST['cedula'];
    

    $c= new conectar();
    $conexion=$c->conexion();
    $obj= new usuario;
    $obj->votante($cedula);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion - UECPPB</title>
  <link rel="stylesheet" href="../../public/css/table.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../../public/css/estilt.css">

  <link rel="stylesheet" href="../../public/css/votar/comite1.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
      <img src="../../asset/Ponlecorazon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Elecciones</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../asset/usuario.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php

          echo $_SESSION['usuario'];

        ?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item menu-close">
            <a href="#" class="nav-link">
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
                <a href="admin6.php" class="nav-link">
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

        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Votaciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="votante.php" class="nav-link active">
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
                  <a href="../../php/cerrar_votante.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cerrar Sesion</p>
                  </a>
            </li>
          </li>
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">





    <!-- Votacion del Commite 1 -->
      

      
      <?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite1'] > 0){
    ?>
  <main>
<center><h1>Comite de Salud</h1></center>
      <form action="check.php" id="comite1" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb1_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Comite</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 1
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              <th><b><?php echo $row['nomvoce']; ?></b></th>
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite1[]" id="comite1_1"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite1">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   </main>
   <?php
          }
      ?>


<!-- Votacion del Commite 2 -->


<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
            if ($row['comite1'] < 0){
                echo'<script>
                  window.location = "votar3.php";
                </script>';
              }
    ?>
    <main>
    <center><h1>Comite vivienda, habitat y gestion de riesgo</h1></center>
      <form action="check.php" id="comite2" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb2_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 2
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite2[]" id="comite2_2"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }
      ?>

   </table>
   <input type="hidden" name="comite" value="comite2">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   </main>
   <?php
          }
      ?>






<!-- Votacion del Commite 3 -->




<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite3'] > 0){
    ?>
    <main>
    <center><h1>Comite seguridad y defensa</h1></center>
      <form action="check.php" id="comite3" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb3_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 3
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite3[]" id="comite3_3"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite3">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   </main>
   <?php
          }
      ?>



<!-- Votacion del Commite 4 -->


<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite4'] > 0){
    ?>
    <main>
    <center><h1>Comite Alimentacion y defensa al consumidor y economia comunal</h1></center>
      <form action="check.php" id="comite4" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb4_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 4
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite4[]" id="comite4_4"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite4">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>



<!-- Votacion del Commite 5 -->
<center><h1>Comite Comunicacion informacion y telecomunicaciones</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite5'] > 0){
    ?>
      <form action="check.php" id="comite5" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb5_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 5
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite5[]" id="comite5_5"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite5">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>



<!-- Votacion del Commite 6 -->
<center><h1>Comite Proteccion social Ninos adolescente y familia</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite6'] > 0){
    ?>
      <form action="check.php" id="comite6" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb6_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 6
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite6[]" id="comite6_6"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite6">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>




<!-- Votacion del Commite 7 -->
<center><h1>Comite Adulto Mayor y Discapacidad</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite7'] > 0){
    ?>
      <form action="check.php" id="comite7" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb7_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 7
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite7[]" id="comite7_7"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite7">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>




<!-- Votacion del Commite 8 -->
<center><h1>Comite Educacion y formacion Ciudadana</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite8'] > 0){
    ?>
      <form action="check.php" id="comite8" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb8_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 8
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite8[]" id="comite8_8"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite8">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>





<!-- Votacion del Commite 9 -->
<center><h1>Comite Mujeres e Igualdad de genero  y parto humanizado</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite9'] > 0){
    ?>
      <form action="check.php" id="comite9" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb9_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 9
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite9[]" id="comite9_9"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite9">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>





<!-- Votacion del Commite 10 -->
<center><h1>Comite Cutura Deporte y recreacion</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite10'] > 0){
    ?>
      <form action="check.php" id="comite10" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb10_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 10
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite10[]" id="comite10_10"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite10">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>





<!-- Votacion del Commite 11 -->
<center><h1>Unidad Administrativa y Financiera</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite11'] > 0){
    ?>
      <form action="check.php" id="comite11" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb11_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 11
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite11[]" id="comite11_11"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite11">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>




<!-- Votacion del Commite 12 -->
<center><h1>Unidad Contraloria Social</h1></center>

<?php 
        $query = $conexion -> query ("SELECT * FROM habitantes h inner join votantes v on h.cedula=$cedula and h.idhabitantes=v.habitantesid");
        while ($row = mysqli_fetch_array($query)) {  
        if ($row['comite12'] > 0){
    ?>
      <form action="check.php" id="comite12" method="post">

      <div class="text-right mb-2">
      <button type="submit" class="btn btn-success">Enviar Voto</button>      
      </div>


          <span id="cb12_validacion"></span>

      <table border="1" class="table table-bordered table-hover w-100">

      
        <thead>
        <tr>
                                    <th><b>Nombre</b></th>
                                    <th><b>Imagen</b></th>
                                    <th><b>Acción</b></th>
        </tr>
        </thead>

      <?php
        $query = $conexion -> query ("SELECT * FROM postulado p 
        INNER JOIN habitantes h on p.habitantesid = h.idhabitantes 
        INNER JOIN vocerias v on p.idvocerias = v.voceriasid and p.idvocerias = 12
        ORDER BY p.idvocerias asc, p.conteovotos desc");
        while ($row = mysqli_fetch_array($query)) {
      ?>

          <tbody>
            <tr>
              <th><b><?php echo $row['nombre']." ".$row['apellido']; ?></b></th>
              <th><b><img src="<?php echo $row['imagen']; ?>" alt="" width="180" height="180"></b></th>
              
              <th><b>
                <label>
                  <input type="checkbox" value="<?php echo $row['habitantesid']; ?>" name="comite12[]" id="comite12_12"><span>Votar</span>
                </label>
              </b></th>


            </tr>
          </tbody>
          
      <?php
          }}
      ?>

   </table>
   <input type="hidden" name="comite" value="comite12">
   <input type="hidden" name="votante" value="<?php echo $cedula; ?>">
   </form>
   <?php
          }
      ?>
    </main>



    
  </div>
  <script src="../../public/js/votar/comite.js"></script>
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
<script src="../../plantilla/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plantilla/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plantilla/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plantilla/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plantilla/AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plantilla/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plantilla/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plantilla/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plantilla/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="../../plantilla/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plantilla/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plantilla/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plantilla/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../plantilla/AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plantilla/AdminLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../plantilla/AdminLTE/dist/js/pages/dashboard.js"></script>
</body>
</html>

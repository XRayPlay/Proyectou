<?php
    include 'php/conexion_be.php';
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: vista/admin.php");
    }

    $fechaDActual= date('d');
    $fechaMActual= date('m');
    $fechaAActual= date('Y')-18;
    $f=array(
        $fechaDActual,
        $fechaMActual,
        $fechaAActual
    );

    $fechaDmin= date("01");
    $fechaMmin= date("01");
    $fechaAmin= date('Y')-80;
    $f2=array(
        $fechaDmin,
        $fechaMmin,
        $fechaAmin
    );

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuario</title>
    <link rel="stylesheet" href="public/css/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/login.css">
  </head>
  <body>
    <center><h1 class="titulo">Consejo Comunal Las Islas</h1></center>
    
      <img src="asset/Ponlecorazon.png" class="img" alt="" srcset="">
   
    <div class="formulario" id="formulario-login">
      <h1>Inicio de Sesiόn</h1>
      <form method="post" action="php/login_usuario_be.php">
        <div class="username">
          <input type="text" name="usuario" id="usuario" Required>
          <label>Usuario</label>
        </div>                    
        <div class="username">
          <input type="password" name="pass" id="pass" Required>
          <label>Contraseña</label>
        </div>
        <div class="recordar">¿Olvidaste la contraseña?</div>
        <input type="submit" value="Entrar">                    
        <div class="registrarse">
          <a href="registro.php">Registrarse como postulado o votante</a>
        </div>
        <p class="warning" id="warning"></p>
       </form>

    </div>
    <script src="public/js/bootstrapjs/bootstrap.min.js"></script>
    <script src="public/js/formuser.js"></script>
  </body>
</html>
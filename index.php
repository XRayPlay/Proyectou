<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: inicio.php");
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
    <div class="formulario">
      <h1>Inicio de Sesion</h1>
      <form method="post">
        <div class="username">
          <input type="text" Required>
          <label>Usuario</label>
        </div>                    
        <div class="username">
          <input type="password" Required>
          <label>Contraseña</label>
        </div>
        <div class="recordar">¿Olvido su contraseña?</div>
        <input type="submit" value="Entrar">                    
        <div class="registrarse">
          <a href="#">registrarse</a>
        </div>
       </form>

    </div>
    <script src="public/js/bootstrapjs/bootstrap.min.js"></script>
  </body>
</html>
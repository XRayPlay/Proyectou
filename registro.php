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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro - UECPPB</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="public/css/css2.css" rel="stylesheet">


    <link rel="stylesheet" href="public/css/registropv.css">
</head>
<body>
    <main>
        <!--Caja Trasera-->
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">

                    <h3>¿Ya tienes una Cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">iniciar sesion</button>

                </div>

                <div class="caja__trasera-register">

                    <h3>¿Aun no tienes una Cuenta?</h3>
                    <p>Registrate para iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>

                </div>
            </div>
<!--Formulario Login y Registro-->
            <div class="contenedor__login-register">
<!--Login-->
                <form action="../php/login_usuario_be.php" method="post" id="formulario-login" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Usuario" name="usuario" id="usuario">
                    <input type="password" placeholder="Contraseña" name="pass" id="pass">
                    <button id="btn2">Entrar</button>
                    <p class="warning" id="warning"></p>
                </form>
  
<!--Registro-->
                <form action="../php/registro_usuario_be.php" method="post" id="formulario-register" class="formulario__register">
                    <h2>registrarse</h2>
                    <input type="text" placeholder="Cedula de indentidad" name="cedula" id="cedula">
                    <input type="text" placeholder="Nombres" name="nom" id="nom">
                    <input type="date" placeholder="Fecha de Nacimiento" name="fn" id="fn">
                    <input type="text" placeholder="example@example.com" name="correo" id="correo">
                    <input type="text" placeholder="Usuario" name="usuario" id="usuarior">
                    <input type="password" placeholder="Contraseña" name="pass" id="passr">
                    <input type="hidden" value="<?php echo $f2[2]."-".$f2[1]."-".$f2[0]; ?>" id="fmin">
                    <input type="hidden" value="<?php echo $f[2]."-".$f[1]."-".$f[0]; ?>" id="fmax">
                    <button id="btnregistrar">Registrarse</button>
                    <p class="warnings" id="warnings"></p>
                </form>
                <script src="public/js/formregisterpv.js"></script>

            </div>

        </div>

    </main>

    <script src="public/js/script.js"></script>



</body>
</html>



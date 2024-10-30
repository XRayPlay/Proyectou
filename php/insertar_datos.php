<?php

    include 'clases.php';
    $cedulanac = $_POST['cedulanac'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $fechanacimiento = $_POST['fechanacimiento'];
    $familia = $_POST['familia'];
    $direccion = $_POST['direccion'];
    $comunidad = $_POST['comunidad'];

    $n_img = $_FILES['imagen']['name'];
    $archivo = $_FILES['imagen']['tmp_name'];
    $img = "../imagen/".$n_img;
    
    move_uploaded_file($archivo,$img);

    
    $c= new conectar();
    $conexion=$c->conexion();

    if(mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM habitantes WHERE cedula='$cedula'")) < 1){

            $datos=array(
                $cedulanac,        // 0
                $cedula,           // 1
                $nombre,           // 2
                $apellido,         // 3
                $sexo,             // 4
                $fechanacimiento,  // 5
                $img,              // 6
                $familia,          // 7
                $direccion,        // 8
                $comunidad);       // 9

                
                $obj= new usuario;
                $obj->registrarDatos($datos);
        
    }else{
        echo'<script>
                alert("El habitante ya esta registrado");
                window.location = "../vista/admin6.php";
                </script>';
            exit();
    }
?>
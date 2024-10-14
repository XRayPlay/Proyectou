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
    $a_img = $_FILES['imagen']['tmp_name'];
    $img = "../imagen/".$n_img;

    move_uploaded_file($a_img,$img);


    $cedula=$_POST['cedula'];
    $c= new conectar();
    $conexion=$c->conexion();

    if(mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM habitantes WHERE cedula='$cedula'")) < 1){

            $datos=array(
                $cedulanac,
                $cedula, 
                $nombre, 
                $apellido, 
                $sexo, 
                $fechanacimiento, 
                $familia, 
                $direccion, 
                $comunidad
                $img);

                $voceria
                $obj= new usuario;
                $obj->registrarDatos($datos);
        
    }else{
        echo'<script>
                alert("No se encuentra al habitante en la base de datos");
                window.location = "../vista/admin2.php";
                </script>';
            exit();
    }
?>
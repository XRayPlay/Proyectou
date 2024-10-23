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



    if (!empty($FILES['imagen']['name'])){
    $n_img = $_FILE['imagen']['name'];
    $a_img = $_FILE['imagen']['tmp_name'];
    $img = "../imagen/".$n_img;

    move_uploaded_file($a_img,$img);
    }
    if (empty($FILES['imagen']['name'])){
        exit();
        echo "no existe una imagen";
        echo $n_img;
        }
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
                $comunidad,
                $img);

                
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
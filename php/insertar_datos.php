<?php

    include 'clases.php';

    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $fechanacimiento = $_POST['fechanacimiento'];
    $familia = $_POST['familia'];
    $direccion = $_POST['direccion'];
    $comunidad = $_POST['comunidad'];

    $datos=array(
        $cedula, 
        $nombre, 
        $apellido, 
        $sexo, 
        $fechanacimiento, 
        $familia, 
        $direccion, 
        $comunidad
    );


    $obj= new usuario;
    $obj->registrarDatos($datos);
      

?>
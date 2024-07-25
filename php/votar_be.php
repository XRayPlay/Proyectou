<?php

        session_start();
        include 'clases.php';

        
    $usuario = $_POST['cedula'];

    $data=array(
        $usuario,
        $pass
    );

    $obj= new usuario;
    $obj->login($data);

?>
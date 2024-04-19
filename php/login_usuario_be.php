<?php

        session_start();
        include 'clases.php';

        
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    //$pass = hash('sha512', $pass);

    $data=array(
        $usuario,
        $pass
    );

    $obj= new usuario;
    $obj->login($data);

?>
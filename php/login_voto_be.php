<?php

        session_start();
        include 'clases.php';

        
    $cedula = $_POST['usuario'];


    $obj= new usuario;
    $obj->Votantee($cedula);

?>
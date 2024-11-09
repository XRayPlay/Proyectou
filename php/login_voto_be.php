<?php

        session_start();
        include 'clases.php';

        
    $cedula = $_POST['cedula'];


    $obj= new usuario;
    $obj->Votantee($cedula);

?>
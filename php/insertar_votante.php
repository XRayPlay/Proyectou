<?php
include 'clases.php';
    $cedula=$_POST['cedula'];

    $c= new conectar();
    $conexion=$c->conexion();
    $query = $conexion -> query ("SELECT * FROM habitantes WHERE cedula='$cedula'");
    while ($row = mysqli_fetch_array($query)) {
        $limite=22;
        $idd=$row['idhabitantes'];
        $datos=array(
            $limite,
            $idd
        );
        $obj= new usuario();
        $obj->registrarVotante($datos);
    }
?>
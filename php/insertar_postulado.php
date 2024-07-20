<?php
include 'clases.php';
    $cedula=$_POST['cedula'];
    $c= new conectar();
    $conexion=$c->conexion();

    if(mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM habitantes WHERE cedula='$cedula'")) > 0){
        $query = $conexion -> query ("SELECT * FROM habitantes WHERE cedula='$cedula'");
        while ($row = mysqli_fetch_array($query)) {
            $cedula=$row['cedula'];
            $limite=0;
            $idd=$row['idhabitantes'];
            $voceria= $_POST['vocerias'];
            $datos=array(
                $limite,
                $idd,
                $voceria,
                $cedula
            );
            $obj= new usuario();
            $obj->registrarPostulado($datos);
        }
    }else{
        echo'<script>
                alert("No se encuentra al habitante en la base de datos");
                window.location = "../vista/admin2.php";
                </script>';
            exit();
    }
?>
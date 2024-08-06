<?php
include 'clases.php';
    $cedula=$_POST['cedula'];

    $c= new conectar();
    $conexion=$c->conexion();

    $verificar_habitante = mysqli_query($conexion, "SELECT * FROM habitantes WHERE cedula='$cedula'");

    if(mysqli_num_rows($verificar_habitante) > 0){

    $query = $conexion -> query ("SELECT * FROM habitantes WHERE cedula='$cedula'");
    while ($row = mysqli_fetch_array($query)) {
    

        $com1=1;
        $com2=1;
        $com3=2;
        $com4=1;
        $com5=1;
        $com6=1;
        $com7=1;
        $com8=1;
        $com9=1;
        $com10=2;
        $com11=5;
        $com12=5;
        $idd=$row['idhabitantes'];

        $datos=array(
            $com1,
            $com2,
            $com3,
            $com4,
            $com5,
            $com6,
            $com7,
            $com8,
            $com9,
            $com10,
            $com11,
            $com12,
            $idd
        );
        $obj= new usuario();
        $obj->registrarVotante($datos);
    }}


    if(mysqli_num_rows($verificar_habitante) == 0){
        echo'<script>
        alert("El habitante no se encuentra en la base de datos");
        window.location = "../vista/admin3.php";
        </script>';
    exit();}
?>
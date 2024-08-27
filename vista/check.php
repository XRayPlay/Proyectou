<?php
include '../php/clases.php';
$c= new conectar();
$conexion=$c->conexion();
$comite = $_POST['comite'];

switch ($comite){
    case 'comite1':
        $votante = $_POST['votante'];
        $option = $_POST['comite1'];
        foreach($option as $check1 => $valor){
            $query = $conexion -> query ("SELECT * FROM habitantes where cedula=$votante");    
            while ($row = mysqli_fetch_array($query)) {
                $idh = $row['idhabitantes'];
                    $obj = new usuario();
                    $obj->votar($valor, $idh, $comite);
            }
        }
        unset($valor);              
        echo'
        <script>
            alert("Voto exitoso");
            window.location = "../vista/votar/votar2.php";
        </script>';

    case 'comite2':
        $votante = $_POST['votante'];
        $option = $_POST['comite2'];
        foreach($option as $check1 => $valor){
            $query = $conexion -> query ("SELECT * FROM habitantes where cedula=$votante");

    
            while ($row = mysqli_fetch_array($query)) {
                $idh = $row['idhabitantes'];
                    $obj = new usuario();
                    $obj->votar($valor, $idh, $comite);

            }
        }
        unset($valor);              
        echo'
        <script>
            alert("Voto exitoso");
            window.location = "../vista/votante.php";
        </script>';
        exit();

    /*case comite3:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite3'];
        foreach($option as $check3 => $valor){}
    case comite4:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite4'];
        foreach($option as $check4 => $valor){}
    case comite5:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite5'];
        foreach($option as $check5 => $valor){}
    case comite6:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite6'];
        foreach($option as $check6 => $valor){}
    case comite7:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite7'];
        foreach($option as $check7 => $valor){}
    case comite8:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite8'];
        foreach($option as $check8 => $valor){}
    case comite9:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite9'];
        foreach($option as $check9 => $valor){}
    case comite10:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite10'];
        foreach($option as $check10 => $valor){}
    case comite11:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite11'];
        foreach($option as $check11 => $valor){}
    case comite12:
        $cedula = $_POST['cedula'];
        $option = $_POST['comite12'];
        foreach($option as $check12 => $valor){}*/
    }
?>
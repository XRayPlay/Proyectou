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
            window.location = "../vista/votante.php";
        </script>';
        exit();
        
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

    case 'comite3':
        $votante = $_POST['votante'];
        $option = $_POST['comite3'];
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
        
    case 'comite4':
        $votante = $_POST['votante'];
        $option = $_POST['comite4'];
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

    case 'comite5':
            $votante = $_POST['votante'];
            $option = $_POST['comite5'];
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

    case 'comite6':
        $votante = $_POST['votante'];
        $option = $_POST['comite6'];
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

    case 'comite7':
        $votante = $_POST['votante'];
        $option = $_POST['comite7'];
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

    case 'comite8':
        $votante = $_POST['votante'];
        $option = $_POST['comite8'];
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

    case 'comite9':
        $votante = $_POST['votante'];
        $option = $_POST['comite9'];
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

    case 'comite10':
        $votante = $_POST['votante'];
        $option = $_POST['comite10'];
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

    case 'comite11':
        $votante = $_POST['votante'];
        $option = $_POST['comite11'];
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


    case 'comite12':
        $votante = $_POST['votante'];
        $option = $_POST['comite12'];
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
    }
?>
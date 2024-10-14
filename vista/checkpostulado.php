<?php
include '../php/clases.php';
$c= new conectar();
$conexion=$c->conexion();

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
            
        </script>';
        exit();
        
    
?>
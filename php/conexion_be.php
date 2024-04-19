<?php
class conectar{
    private $servidor="localhost";
    private $usuario="root";
    private $pass="";
    private $bd="proyect";

    public function conexion(){
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->bd);
        return $conexion;

        

    }
}

?>
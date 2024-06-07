<?php
    include 'conexion_be.php';
    class usuario{

        public function actualizarUsuarioa($datos){
            $c= new conectar();
            $conexion=$c->conexion();
            $query = "UPDATE `user` SET `pass`='$datos[0]' WHERE `id_user`= '$datos[1]'";
            $ejecutar = mysqli_query($conexion, $query);
            echo'<script>
                alert("Se Cambio la contraseña con exito");
                window.location = "admin.php";
                </script>';
            exit();

        }



        public function actualizarUsuario($datos){
            $c= new conectar();
            $conexion=$c->conexion();
            $query = "UPDATE `user` SET `pass`='$datos[0]' WHERE `id_user`= '$datos[1]'";
            $ejecutar = mysqli_query($conexion, $query);
            echo'<script>
                alert("Se Cambio la contraseña con exito");
                window.location = "../index.php";
                </script>';
            exit();

        }









        public function registrarDatos($datos){
            $c= new conectar();
            $conexion=$c->conexion();


            $query = "
            INSERT INTO habitantes(cedula, nombre, apellido, sexo, fechanacimiento, familiaid, direccid, id_comunidad) VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]')
            ";


    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM habitantes WHERE cedula='$datos[0]'");

        if(mysqli_num_rows($verificar_usuario) > 0){
            echo'<script>
                alert("Este usuario ya se encuentra registrado");
                window.location = "../index.php";
                </script>';
            exit();
        } else {
            $ejecutar = mysqli_query($conexion, $query);

            if($ejecutar == 1){
                echo'<script>
                alert("Se Registro los datos con exito");
                window.location = "../index.php";
                </script>';
                exit();
            }else{
                echo'<script>
                alert("Fallo el Registro");
                window.location = "../index.php";
                </script>';
                exit();
            }
    }
        }














        public function registrar($datos){

            $c= new conectar();
            $conexion=$c->conexion();
            $v=2;


            $query = "
            INSERT INTO user(usuario, pass, idrol) VALUES('$datos[2]','$datos[3]','$v');
            ";


    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM user WHERE usuario='$datos[2]'");

        if(mysqli_num_rows($verificar_usuario) > 0){
            echo'<script>
                alert("Este usuario ya se encuentra registrado");
                window.location = "../index.php";
                </script>';
            exit();
        } else {
            $ejecutar = mysqli_query($conexion, $query);

            if($ejecutar == 1){
                $query = "INSERT INTO representante(nacionalidaddocumentorepresentante, documentorepresentante, nombres, fecha_nacimiento, correo) VALUES('$datos[6]', '$datos[1]','$datos[0]','$datos[4]','$datos[5]')
                ";
                $ejecutar = mysqli_query($conexion, $query);

                echo'<script>
                alert("Se Registro los datos con exito");
                window.location = "../index.php";
                </script>';
                exit();
            }else{
                echo'<script>
                alert("Fallo el Registro");
                window.location = "../index.php";
                </script>';
                exit();
            }
    }


        }

        public function login($data){

            $c= new conectar();
            $conexion=$c->conexion();

            $query = "SELECT * FROM user WHERE usuario='$data[0]' AND pass='$data[1]'";

    $validar_login = mysqli_query($conexion, $query);

    $rol=mysqli_fetch_array($validar_login);


       if(mysqli_num_rows($validar_login) > 0){
            
                $_SESSION['usuario'] = $data[0];
                header("location: ../vista/admin1.php");
                exit();

        }else{
            echo'
                <script>
                alert("Usuario no existe verifique los datos introducidos");
                window.location = "../index.php";
                </script>';
            exit();
        }

            

        }















    }

    class consejoComunal{

                // Atributos de la clase
                public $datos;

        public function Edad($fecha_estudiante){
            $cumpleanos = new DateTime($fecha_estudiante);
            $hoy = new DateTime();
            $edads = $hoy->diff($cumpleanos);
            $edad=$edads->y;



            if($edad>17 || $edad<80){
                echo '<script>
                    alert(Es mayor de edad con: '.$edad.')
                    header(location: ../f.php)
                    </script>';
                    exit();
            } else if($edad>0 || $edad<18){
                echo '<script>
                    alert(Es menor de edad con: '.$edad.')
                    header(location: ../f.php)
                    </script>';
                    exit();
            }
            return $edad;
        }
        









        public function registrarEstudiantes($datos){

            $c= new conectar();
            $conexion=$c->conexion();



    $verificar_estudiante = $conexion -> query("SELECT * FROM estudiante WHERE idrepresentante='$datos[9]'");
    while ($row = mysqli_fetch_array($verificar_estudiante)) {
        if($row['nombres'] == $datos[1]){
            echo'<script>
                alert("Este estudiante ya se encuentra registrado");
                window.location = "../vista/inicio.php";
                </script>';
            exit();
        } else {
                $query = "INSERT INTO estudiante(`nacionalidad`, `documento`, `nombres`, `apellidos`, `sexo`, `fechanacimiento`, `lugarnacimiento`, `condicion`, `act_extra_catedra`, `aula_integrada`, `idrepresentante`, `idgrado`, `idnivel`) 
                VALUES('V','$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]')
                ";
                $ejecutar = mysqli_query($conexion, $query);

                if($ejecutar == 1){

                echo'<script>
                    alert("Se Registro al estudiante con exito");
                    window.location = "../vista/inicio.php";
                </script>';
                exit();
            }else{
                echo'<script>
                alert("Fallo el registro del estudiante");
                window.location = "../vista/inicio.php";
                </script>';
                exit();
            }
    }}


        }






        public function listar($sql){

            $c= new conectar();
            $conexion=$c->conexion();

            $result=mysqli_query($conexion,$sql);

            return mysqli_fetch_all($result,MYSQLI_ASSOC);

        }







/*


        // Metodos
        public function consultar(){
            
            $d=$_GET['documento'];
            $objConn = new Conexion();
            $conexion = $objConn -> conectar();
            $sql = "SELECT * from estudiante WHERE documento = '$d'";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $listUsuarios = array();
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                $objUsuario = new Estudiante();
                $objUsuario -> documento = $row->documento;
                $objUsuario -> nombres = $row->nombres;
                $objUsuario -> apellidos = $row->apellidos;
                $objUsuario -> sexo = $row->sexo;
                $objUsuario -> fechanacimiento = $row->fechanacimiento;
                $objUsuario -> lugarnacimiento = $row->lugarnacimiento;
                $objUsuario -> edad = $row->edad;
                $objUsuario -> condicion = $row->condicion;
                $objUsuario -> act_extra_catedra = $row->act_extra_catedra;
                $objUsuario -> aula_integrada = $row->aula_integrada;
                $listUsuarios[]=$objUsuario;
            }
            return $listUsuarios;

            $stmt = null;
            $objConn -> desconectar();

            
       }
    

     public function actualizar($doc){
            
            $objConn = new Conexion();
            $conexion = $objConn -> conectar();
            $sql="UPDATE estudiante SET documento=:documento,nombres=:nombres,apellidos=:apellidos,
            sexo=:sexo,fechanacimiento=:fechanacimiento,lugarnacimiento=:lugarnacimiento,edad=:edad,condicion=
            :condicion,act_extra_catedra=:act_extra_catedra,aula_integrada=:aula_integrada WHERE documento = '$doc'";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(":documento", $this->documento);
            $stmt->bindParam(":nombres", $this->nombres);
            $stmt->bindParam(":apellidos", $this->apellidos);
            $stmt->bindParam(":sexo", $this->sexo);
            $stmt->bindParam(":fechanacimiento", $this->fechanacimiento);
            $stmt->bindParam(":lugarnacimiento", $this->lugarnacimiento);
            $stmt->bindParam(":edad", $this->edad);
            $stmt->bindParam(":condicion", $this->condicion);
            $stmt->bindParam(":act_extra_catedra", $this->act_extra_catedra);
            $stmt->bindParam(":aula_integrada", $aula_integrada);
            $stmt->execute();
            $stmt = null;
            $objConn -> desconectar();
            echo "Estudiante actualizado con Exito";
    }
        public function listar(){

            $objConn = new Conexion();
            $conexion = $objConn -> conectar();
            $sql = "SELECT documento, nombres, apellidos, sexo, fechanacimiento, 
            lugarnacimiento, edad, condicion, act_extra_catedra, aula_integrada 
            from estudiante";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $listUsuarios = array();
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                $objUsuario = new Estudiante();
                $objUsuario -> documento = $row->documento;
                $objUsuario -> nombres = $row->nombres;
                $objUsuario -> apellidos = $row->apellidos;
                $objUsuario -> sexo = $row->sexo;
                $objUsuario -> fechanacimiento = $row->fechanacimiento;
                $objUsuario -> lugarnacimiento = $row->lugarnacimiento;
                $objUsuario -> edad = $row->edad;
                $objUsuario -> condicion = $row->condicion;
                $objUsuario -> act_extra_catedra = $row->act_extra_catedra;
                $objUsuario -> aula_integrada = $row->aula_integrada;
                $listUsuarios[]=$objUsuario;
            }
            return $listUsuarios;
            $stmt->execute();
            $stmt = null;
            $objConn -> desconectar();
        }

       public function validar(){
            
}
*/
    }
    
?>



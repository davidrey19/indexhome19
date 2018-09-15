


<?php
    class conexion{
        //declarar variables
        private $servidor;
        private $usuariomysql;
        private $clavemysql;
        private $basedatosmysql;
        private $conectar;
        public function construct($serv, $usuario, $clave, $basedatos){
            $this->servidor = $serv;
            $this->usuariomysql = $usuario;
            $this->clavemysql = $clavev;
            $this->basedatosmysql = $basedatos;
            $this->conectar();
        }
        private function conectarmysql(){
            $this->conectar = new mysqli($this->servidor, $this->usuariomysql, $this->clavemysql, $this->basedatosmysql);
        }
        public function consultar($Sql){
            $resultado = $this->conectar->query($Sql);
            return $resultado;
        }
    }

?>

<?php
    class llenarcombos{
        //Llenar el combo de ciudades
        public function ComboCiudades(){
            $conect = new conexion("localhost","root","","agendatelefonica");
            $SqlCiudades = "Select * From ciudades";
            $DatosCiudades = $conect->consultar($SqlCiudades);
            if($DatosCiudades->num_rows>0){
                while($fila=$DatosCiudades->fetch_assoc()){
                    echo'<option value = "'.$fila['idciudades'].'">'.$fila['nomciudad'].'</option>';
                }
            }
        }
        //Llenar el combo profesiones
        public function ComboProfesiones(){
            //Llamar a la clase conexion y almacenarla en la variable $conect.
            $conect = new conexion("localhost","root","","agendatelefonica");
            //Almacenar consulta que obtiene las profesiones en la variable $SqlCiudades.
            $SqlCiudades = "Select * From profesion";
            //Almacenar todas las profesiones en la variale $SqlCiudades.
            $DatosCiudades = $conect->consultar($SqlCiudades);
            //Verificar si existen registros.
            if($DatosCiudades->num_rows > 0){
                //Recorrer todas las filas y mostrar el resultado en un tag <option>.
                while($fila = $DatosCiudades->fetch_assoc()){
                    echo '<option value = "'.$fila['idprofesion'].'">'.$fila['nomprofesion'].'</option>';
                }
            }
        }
        
    }

?>
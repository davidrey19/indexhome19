

<?php
    include("../ClaseAgenda/clases.php");
    $conect = new conexion("localhost","root","","agendatelefonica");
    if(isset($_POST)){
        @$mprofesion - trim($_POST["profesion"]);

        //Verificar si el campo esta vacio
        if(empty($mprofesion)){
            echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">No deben haber campos vacios</h3></div>';

            echo echo '<neta http-equiv = "refresh" content = "5; URL = ../profesion.php">';
        }else{
            //Almacenar la consulta de insersion en $consulta
            $consulta = "INSERT INTO profesion(profesion) VALUES ('profesion')";

            //Ejecutar la consulta
            $DatosProfesion = $conect->consultar($consulta);
            if($DatosProfesion === TRUE){
                echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">Consulta realizada con exito</h3></div>';

                echo '<neta http-equiv = "refresh" content = "5; URL = ../profesion.php">';
            }else{
                echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">La consulta no se realizo correctamente, intentelo mas tarde</h3></div>';
            
                echo '<neta http-equiv = "refresh" content = "5; URL = ../profesion.php">';
            }
        }
    }

?>
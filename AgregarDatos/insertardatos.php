

<?php
    include("../ClaseAgenda/clases.php");
    $conect = new conexion("localhost","root","","agendatelefonica");
    if(isset($_POST)){
        @$mnombre = trim($_POST["nombre"]);
        @$mapellido = trim($_POST["apellido"]);
        @$mtelcasa = trim($_POST["telcasa"]);
        @$mtelcelular = trim($_POST["telcelular"]);
        @$mciudad = trim($_POST["ciudad"]);
        @$mprofesion = trim($_POST["profesion"]);
        @$mcomentario = trim($_POST["comentario"]);

        //Verificar si el campo esta vacio
        if(empty($mnombre) || empty($mapellido)){
            echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">Los campos nombre y apellido no pueden quedar vacios</h3></div>';

            echo echo '<neta http-equiv = "refresh" content = "5; URL = ../datosp.php">';
        }else{
            //Almacenar la consulta de insersion en $consulta
            $consulta = "INSERT INTO datosp(nombres, apellidos, telcasa, telcelular, ciudad, profesion, comentarios) VALUES ('$mnombre', '$mapellido', '$mtelcasa', '$mtelcelular', '$mciudad', '$mprofesion', '$mcomentario')";

            //Ejecutar la consulta
            $DatosAgenda = $conect->consultar($consulta);
            if($DatosAgenda === TRUE){
                echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">Consulta realizada con exito</h3></div>';

                echo '<neta http-equiv = "refresh" content = "5; URL = ../datosp.php">';
            }else{
                echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">La consulta no se realizo correctamente, intentelo mas tarde</h3></div>';
            
                echo '<neta http-equiv = "refresh" content = "5; URL = ../datosp.php">';
            }
        }
    }

?>


<?php
    include("../ClaseAgenda/clases.php");
    $conect = new conexion("localhost","root","","agendatelefonica");
    if(isset($_POST)){
        @$mnomciudad = trim($_POST["nomciudad"]);
        //Verificar si el campo esta vacio.
        if(empty($mnomciudad)){
            echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">No deben haber campos vacios</h3></div>';

            echo '<neta http-equiv = "refresh" content = "5; URL = ../ciudades.php">';
        }else{
            //Almacenar la consulta de inversion en $consulta.
            $consulta = "INSERT INTO ciudades(nomciudad) VALUES ($mnomciudad)";
            //Ejecutar la consulta
            $DatosCiudad = $conect->consultar($consulta);
            if($DatosCiudad === TRUE){
                echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">Consulta realizada con exito</h3></div>';

                echo '<neta http-equiv = "refresh" content = "5; URL = ../ciudades.php">';
            }else{
                echo '<div id = "form-div" style = "padding: 10px; background-color: #E97274;"><h3 style = "text-align: center;">La consulta no se realizo correctamente, intentelo mas tarde</h3></div>';
            
                echo '<neta http-equiv = "refresh" content = "5; URL = ../ciudades.php">';
            }
        }
    }

?>
<?php
    require_once "ClaseAgenda/clases.php";
    $combos = new llenarcombos;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
    <link href = "EstilosCss/estilos.css" rel = "stylesheet" type = "text/css">
    <link href = "EstilosCss/menu.css" rel = "stylesheet" type = "text/css">
</head>
<body>
<ul id = "menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="datosp.php">Agregar Agenda</a></li>
            <li><a href="profesion.php">Profesion</a></li>
            <li><a href="ciudades.php">Ciudades</a></li>
        </ul>
        <div id = "form-main">
            <div id="form-div">
                <center><h2>DATOS DE LA AGENDA</h2></center>
                <form action="AgregarDatos/insertardatos.php" method = "post" class = "agenda-input" id = "form1">
                    <p class = "nombre">
                        <label for="nombres">Nombres</label>
                        <input name = "nombre" type = "text" class = "validate[required] agenda input" placeholder = "Nombres" id = "nombre">
                    </p>

                    <p class = "apellido">
                        <label for="apellido">Apellidos</label>
                        <input name = "apellido" type = "text" class = "validate[required] agenda input" placeholder = "Apellidos" id = "apellido">
                    </p>

                    <p class = "telcasa">
                        <label for="telcasa">Tel&eacutefono Fijo</label>
                        <input name = "telcasa" type = "text" class = "validate[required] agenda input" placeholder = "Teléfono fijo" id = "telcasa">
                    </p>

                    <p class = "telcelular">
                        <label for="telcelular">Tel&eacutefono Fijo</label>
                        <input name = "telcelular" type = "text" class = "validate[required] agenda input" placeholder = "Teléfono celular" id = "telcelular">
                    </p> 

                    <p class="mciudad">
                        <select name="ciudad" id="ciudad" class = "agenda-input">
                            <?php $combos->ComboCiudades();?>
                        </select>
                    </p>

                    <p class="mprofesion">
                        <select name="profesion" id="profesion" class = "agenda-input">
                            <?php $combos->ComboProfesiones();?>
                        </select>
                    </p>

                    <p class="mComentario">
                        <label for="comentario">Comentario</label>
                        <textarea name="comentario" class = "validate[required, length[6,300]] agenda-input" id="comment" placeholder = "Comentario"></textarea>
                    </p>

                    <div class="submit">
                        <input type="submit" value = "Guardar" id = "button-blue">
                        <div class="ease"></div>
                    </div>
            
                </form>
            </div>

        </div>
    
</body>
</html>
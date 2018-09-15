<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profesion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="EstilosCss/estilos.css" rel="stylesheet" type = "text/css">
        <link href="EstilosCss/menu.css" rel="stylesheet" type = "text/css">
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
                <center><h2>PROFESION</h2></center>
                <form action="AgregarDatos/insertarprofesion.php" method = "post" class = "form" id = "form1">
                    <p class = "nombre">
                        <label for="profesion">Profesion</label>
                        <input name = "profesion" type = "text" class = "validate[required] agenda-input" placeholder = "Profesion" id = "profesion">
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
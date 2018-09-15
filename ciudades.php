<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ciudades</title>
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
                <center><h2>CIUDADES</h2></center>
                <form action="AgregarDatos/insertarciudades.php" method = "post" class = "form" id = "form1">
                    <p class = "nombre">
                        <label for="nomciudad">Ciudad</label>
                        <input name = "nomciudad" type = "text" class = "validate[required] agenda input" placeholder = "Ciudades" id = "nomciudad">
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
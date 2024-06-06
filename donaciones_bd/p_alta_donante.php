<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <title>Registro de donantes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/s_alta_donante.css">
    </head>
    <body>
        <div id="bloque">
            <div class="parte1">
                <img src="hands-holding-hearts.svg" alt="Italian Trulli" class="img">
            </div>
            <div class="parte2">
                <h1>Registrar donante</h1>
                <form method="post" action="alta_donante.php" id=form>
                    <input class="int" type ="text" id ="nombre_d" name="nombre_d" required placeholder="Nombre"><br>
                    <input class="int" type="text" id ="ap_pat_d" name="ap_pat_d" required placeholder="Apellido Paterno"><br>
                    <input class="int" type ="text" id ="ap_mat_d" name="ap_mat_d" placeholder="Apellido Materno"><br>
                    <input class="int" type ="number" id ="telefono_d" name="telefono_d" required placeholder="Teléfono"><br>
                    <input class="int" type="text" id ="correo_d" name="correo_d" required placeholder="Correo Electrónico"><br>
                    <input class="int" type ="password" id ="pwd_d" name="pwd_d" required placeholder="Contraseña"><br>
                    <input class="boton" type="submit" value="Registrar">
            </form>
            </div>
        </div>
    </body>
</html>
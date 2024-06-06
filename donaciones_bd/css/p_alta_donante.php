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
                <img src="imagenes/portada2.png" alt="portada" class="img">
            </div>
            <div class="parte2">
                <h1>Registro de donante</h1>
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
    <div id="estrellas">
        <img src="imagenes/estrella.png" alt="Estrella" class="estrella">
    </div>
    <div id="barda">
        <img src="imagenes/barda.png" alt="barda" class="barda">
    </div>
    <div id="barda2">
        <img src="imagenes/barda2.png" alt="barda2" class="barda2">
    </div>
    <div id="barda3">
        <img src="imagenes/barda3.png" alt="barda3" class="barda3">
    </div>
        </div>
    </body>
</html>
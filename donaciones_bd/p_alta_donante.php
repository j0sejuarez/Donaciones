<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <title>Registro de donantes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="paginas_basic.css">
    </head>
    <body>
        <div id="bloque">
            <h1>Registrar donante</h1>
            <form method="post" action="alta_donante.php">
                <p>
                <p><label for='nombre_d'>Nombre</label></p>
                <input class="int" type ="text" id ="nombre_d" name="nombre_d" required>
                <p>
                <p><label for='ap_pat_d'>Apellido Paterno</label></p>
                <input class="int" type="text" id ="ap_pat_d" name="ap_pat_d" required>
                <p>
                <p><label for='ap_mat_d'>Apellido Materno</label></p>
                <input class="int" type ="text" id ="ap_mat_d" name="ap_mat_d">
                <p>
                <p><label for='telefono_d'>Telefono</label></p>
                <input class="int" type ="number" id ="telefono_d" name="telefono_d" required>
                <p>
                <p><label for='correo_d'>Correo</label></p>
                <input class="int" type="text" id ="correo_d" name="correo_d" required>
                <p>
                <p><label for='pwd_d'>Contraseña</label></p>
                <input class="int" type ="password" id ="pwd_d" name="pwd_d" required>
                <p>
                    <input class="boton" type="submit" value="Registrar">
                </p>
            </form>
        </div>
    </body>
</html>
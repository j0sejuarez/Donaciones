<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/s_login.css">
    </head>
    <body>
        <div id="bloque">
            <div class="parte1">
                <img src="imagenes/portada2.png" alt="Portada" class="img">
            </div>
            <div class="parte2">
                <h1>Iniciar sesion</h1><br>
                <form class="centro" action="login.php" method="post" id="form">
                    <a href="p_alta_donante.php" target="blank">¿No tienes cuenta? Registrate</a><br>
                    <input class="int" type="text" id ="correo" name="correo" placeholder="Correo Electrónico" required><br>
                    <input class="int" type ="password" id ="contrasena" name="contrasena" placeholder="Contraseña" required><br>
                    <input class="boton" type="submit" value="Ingresar">
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
</body>
</html>
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
                <img src="hands-holding-hearts.svg" alt="Italian Trulli" class="img">
            </div>
            <div class="parte2">
                <h1>Log In</h1><br>
                <form class="centro" action="login.php" method="post" id="form">
                    <a href="p_alta_donante.php" target="blank">¿No tienes cuenta? Registrate</a><br>
                    <input class="int" type="text" id ="correo" name="correo" placeholder="Correo Electrónico" required><br>
                    <input class="int" type ="password" id ="contrasena" name="contrasena" placeholder="Contraseña" required><br>
                    <input class="boton" type="submit" value="Ingresar">
                </form>
            </div> 
        </div>
    </body>
</html>
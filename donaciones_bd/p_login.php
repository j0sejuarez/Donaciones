<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="paginas_basic.css">
    </head>
    <body>
        <div id="bloque">
            <h1>Log in</h1>
            <form action="login.php" method="post">
            <a href="p_alta_donante.php" target="blank">¿No tienes cuenta?,Registrate</a>
                <p>
                <p><label for='correo'>Correo del usuario</label></p>
                <input class="int" type="text" id ="correo" name="correo" required>
                <p>
                <p><label for='contrasena'>Contraseña</label></p>
                <input class="int" type ="password" id ="contrasena" name="contrasena" required>
                <p>
                    <input class="boton" type="submit" value="Log in">
                </p>
            </form>
        </div>
    </body>
</html>
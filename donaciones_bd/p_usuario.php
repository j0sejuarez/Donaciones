<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <title>Donaciones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/s_usuario.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Donaciones UABC</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="p_donaciones.php">Donaciones</a></li>
                    <li><a href="#">Consulta</a></li>
                </ul>
        
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Usuario</a></li>
                    <li><a href="p_alta_donante.php"><span class="glyphicon glyphicon-log-in"></span> Registro</a></li>
                </ul>
            </div>
        </nav>
        <h1>
                Información Personal
        </h1>
        <form class="bloque" id="form">
            <input class="parte1" type="text" id="nombre" name="fname" value="Nombre" disabled>
            <input class="parte2" type="text" id="ap_pat" name="fname" value="Apellido Paterno" disabled>
            <input class="parte3" type="text" id="ap_mat" name="fname" value="Apellido Materno" disabled>
            <input class="parte4" type="number" id="telefono" name="fname" value="000000000" disabled>
            <input class="parte5" type="text" id="corrreo" name="fname" value="Correo" disabled>
            <input class="parte6" type="submit" name="login" formaction="" value="Modificar">
        </form>    
        <br><hr class="rounded">
        <h1>
                Donaciones
        </h1>
        <footer>
            <p class="p_footer">© 2024 Donaciones UABC</p>
        </footer>        
    </body>
</html>
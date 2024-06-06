<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <title>Registro de donacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="paginas_basic.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Donaciones.com</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="p_alta_donacion.php">Donaciones</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        
            <ul class="nav navbar-nav navbar-right">
                <li><a href="p_login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                <li><a href="p_alta_donante.php"><span class="glyphicon glyphicon-log-in"></span> Registro</a></li>
            </ul>
        </div>
    </nav>
    <div id="bloque">
        <h1>Registrar donacion</h1>
        <form method="post" action="alta_donacion.php">
            <p>
                <p><label for='donante_d'>Donante</label></p>
                <input class="text" type="text" id ="donante_d" name="donante_d" require>
                <p>
                <p><label for='fecha_d'>Fecha de donacion</label></p>
                <input class="text" type="text" id ="fecha_d" name="fecha_d" require>
                <p>
                <p><label for='donacion_r'>Donacion realizada</label></p>
                <input class="number" type ="text" id ="donacion_r" name="donacion_r" require>
                <p>
                <p><label for='tipo_d'>Tipo de donacion</label></p>
                <input class="int" type ="number" id ="tipo_d" name="tipo_d" require>
                <p>
                <p><label for='descripcion_d'>Descripcion donacion</label></p>
                <input class="int" type="text" id ="descripcion_d" name="descripcion_d" require>
                <p>
                <p><label for='direccion_d'>Direccion donde se recibio la donacion</label></p>
                <input class="int" type ="number" id ="direccion_d" name="direccion_d" require>
                <p>
                    <input class="boton" type="submit" value="Registrar">
                </p>
            </form>
        </div>
    </body>
</html>
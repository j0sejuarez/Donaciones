<!DOCTYPE html>
<html lang='es'>
<head>
    <title>Donaciones</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/s_alta_donacion_monetaria.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Donaciones</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Casa</a></li>
                <li><a href="p_donaciones.php">Donaciones</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="p_login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                <li><a href="p_alta_donante.php"><span class="glyphicon glyphicon-log-in"></span> Registro</a></li>
            </ul>
        </div>
    </nav>
    <form class="bloque" id="form">
        <div class="parte1">
            <img src="imagenes/donaciona.png" alt="donaciona" class="ajustar-imagen">
        </div>
        <div class="parte2">
            <h2><label for='cantidad'>Cantidad</label></h2>
            <input type="number" id="cantidad" name="cantidad" placeholder="Ingresar Cantidad">
        </div>
        <div class="parte3">
            <h2><label for='cuenta_origen'>Cuenta Origen</label></h2>
            <input type="number" id="cuenta_origen" name="cuenta_origen" placeholder="Ingresar Cuenta">
        </div>
        <div class="parte4">
            <h2><label for='metodo'>Método Donación</label></h2>
            <select name="metodo" id="metodo">
                <option value="0">Transferencia</option>
                <option value="1">Efectivo</option>
            </select>
        </div>
        <div class="parte5">
            <h2><label for='cuenta_destino'>Cuenta Destino</label></h2>
            <input type="text" id="cuenta_destino" name="cuenta_destino" placeholder="Ingresar Cuenta">
        </div>
        <div class="parte6">
            <h2><label for='recibido'>Recibido en</label></h2>
            <input type="text" id="recibido" name="recibido" placeholder="Ingresar Lugar">
        </div>
        <div class="parte7">
            <h1>
                Donacion Monetaria
            </h1>
        </div>
        <div class="parte8">
            <p>
                Las donaciones monetarias son una forma común de apoyar a organizaciones benéficas o causas específicas, estas pueden ser realizadas a través de diferentes métodos, como transferencias por tarjetas de crédito o débito, y efectivo.
            </p>
        </div>
        <div class="parte9">
            <input class="boton" type="submit" value="Donar">
        </div>
    </form>    
    </div>
    <footer>
        <p class="p_footer">© 2024 Donaciones UABC</p>
    </footer>
</body>
</html>
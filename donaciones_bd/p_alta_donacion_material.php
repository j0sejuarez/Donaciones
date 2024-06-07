<!DOCTYPE html>
<html lang='es'>
<head>
    <title>Donaciones</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/s_alta_donacion_material.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Donaciones UABC</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <li class="active"><a href="#">Donaciones</a></li>
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
            <img src="imagenes/donacionb.png" alt="donacionb" class="ajustar-imagen">
        </div>
        <div class="parte2">
            <h2><label for='cantidad'>Cantidad</label></h2>
            <input type="number" id="cantidad" name="cantidad" placeholder="Ingresar Cantidad">
        </div>
        <div class="parte3">
            <h2><label for='tipo_mat'>Tipo Material</label></h2>
            <input type="text" id="tipo_mat" name="tipo_mat" placeholder="Ingresar Material">
        </div>
        <div class="parte4">
            <h2><label for='descripcion'>Descripcion</label></h2>
            <input type="text" id="descripcion" name="descripcion" placeholder="Ingresar Descripcion">
        </div>
        <div class="parte5">
            <h2><label for='recibido'>Recibido en</label></h2>
            <input type="text" id="recibido" name="recibido" placeholder="Ingresar Lugar">
        </div>
        <div class="parte6">
            <h1>
                Donacion Material
            </h1>
        </div>
        <div class="parte7">
            <p>
                Las donaciones de bienes materiales son una forma valiosa de apoyar a organizaciones benéficas, especialmente aquellas que se enfocan en ayudar a personas en situación de vulnerabilidad. Estas donaciones pueden incluir objetos como ropa, libros, juguetes, y otros artículos que puedan ser útiles para los beneficiarios.
            </p>
        </div>
        <div class="parte8">
            <input class="boton" type="submit" value="Donar">
        </div>
    </form>    
    </div>
    <footer>
        <p class="p_footer">© 2024 Donaciones UABC</p>
    </footer>
</body>
</html>
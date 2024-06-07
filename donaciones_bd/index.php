<!DOCTYPE html>
<html lang='es'>
<head>
    <title>Donaciones</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/s_index.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Donaciones UABC</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="p_donaciones.php">Donaciones</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="p_login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                <li><a href="p_alta_donante.php"><span class="glyphicon glyphicon-log-in"></span> Registro</a></li>
            </ul>
        </div>
    </nav>
    <div class="bloque">
        <div class="parte1">
            <img src="imagenes/ban.png" alt="ban" class="ban">
        </div>
        <div class="parte2">
            <p>
                Bienvenido a nuestra pagina web dedicada a donaciones monetarias, materiales y alimentos. Aquí, puedes encontrar formas sencillas y efectivas de apoyar a aquellos que más lo necesitan. Inicia sesión para comenzar a hacer la diferencia en el mundo.
            </p>
            <form id="form">
                <input type="submit" name="login" formaction="p_login.php" value="Iniciar sesión">
            </form>
        </div>
        <div class="parte3">
            <img src="imagenes/dinero.png" alt="dinero" class="ajustar-imagen">
        </div>
        <div class="parte4">
            <img src="imagenes/material.png" alt="material" class="ajustar-imagen">
        </div>
        <div class="parte5">
            <img src="imagenes/comida.png" alt="comida" class="ajustar-imagen">
        </div>
    </div>
    <hr class="rounded">
    <div class="bloque2">
        <div class="parte6">
            <img src="imagenes/nosotros.png" alt="nosotros" class="ajustar-imagen">
        </div>
        <div class="parte7">
            <h1>¿Quienes Somos?</h1>
            <p>
                Somos una organización sin fines de lucro dedicada a luchar contra el hambre y la pobreza en nuestra comunidad. Desde nuestra fundación en 2003, hemos trabajado incansablemente para brindar asistencia alimentaria y material a las personas más necesitadas, con el objetivo de mejorar su calidad de vida y promover la justicia social.
            </p>
        </div>
    </div>
    <footer>
        <p class="p_footer">© 2024 Donaciones UABC</p>
    </footer>
</body>
</html>
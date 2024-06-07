<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Consulta de donantes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paginas_basic.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Donaciones UABC</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION['Correo_Donante']) && $_SESSION['Correo_Donante'] == 'josefjaceves@gmail.com') {
                    echo '
                    <ul class="nav navbar-nav">
                    <li><a href="p_alta_donacion.php">Donaciones</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Consulta <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="p_consulta_donante.php">Donantes</a></li>
                        <li><a href="p_consulta_donacion.php">Donaciones</a></li>
                    </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Eliminar <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="p_baja_donante.php">Donantes</a></li>
                        <li><a href="p_baja_donacion.php">Donaciones</a></li>
                    </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="p_usuario.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['Correo_Donante'].'</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
                </ul>';
                
            } 
            ?>
        </div>
    </nav>
<body>
    <div id="bloque">
        <h1>Consultar donante</h1>
        <form method="post" action="consulta_donante.php">
            <p>
            <p><label for="id_d">ID Donante</label></p>
            <input class="int" type="number" id="id_d" name="id_d" required>
            <p>
                <input class="boton" type="submit" value="Consultar">
            </p>
        </form>
    </div>
</body>
</html>
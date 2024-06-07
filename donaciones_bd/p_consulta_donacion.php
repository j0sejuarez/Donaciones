<?php
    session_start();
    require('conexion.php');
    $link = cargar_bd();

    if(isset($_POST['id_d']) && isset($_SESSION['Correo_Donante']) && $_SESSION['Correo_Donante'] == 'josefjaceves@gmail.com') {
        $id_d = $_POST['id_d'];
        $sql = "SELECT idDonante, Nombre_Donante, Apellido_Pat_Donante, Apellido_Mat_Donante, Tel_Donante, Correo_Donante FROM donante WHERE idDonante = $id_d";
        $result = mysqli_query($link, $sql);

        if($result) {
            echo "<h1>Datos del donante</h1>";
            echo "<p>";
            echo "<table border='1'>";
            echo "<tr><th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Telefono</th>
                    <th>Correo</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['idDonante']."</td>";
                echo "<td>".$row['Nombre_Donante']."</td>";
                echo "<td>".$row['Apellido_Pat_Donante']."</td>";
                echo "<td>".$row['Apellido_Mat_Donante']."</td>";
                echo "<td>".$row['Tel_Donante']."</td>";
                echo "<td>".$row['Correo_Donante']."</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else {
            echo "Error: " . mysqli_error($link);
        }
    }

    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Consulta de donaciones</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paginas_basic.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/s_baja-donante-donacion.css">
</head>
<body>
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
                <li><a href="p_usuario.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['Correo_Donante'].'</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>';
            }
            ?>
        </ul>
    </div>
</nav>
<div id="bloque">
    <div class="parte1">
        <h1>Consultar Donación</h1>
    </div>
    <form method="post" action="">
        <div class="parte2">
            <h2><label for="id_d">ID Donante</label></h2>
            <input class="int" type="number" id="id_d" name="id_d" required>
        </div>
        <div class="parte3">
            <input class="boton" type="submit" value="Consultar">
        </div>
    </form>
</div>
<footer>
     <p class="p_footer">© 2024 Donaciones UABC</p>
    </footer>
</body>
</html>

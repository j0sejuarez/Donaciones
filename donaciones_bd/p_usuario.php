<!DOCTYPE html>
<html lang='es'>
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
    <?php
    session_start();

    if (!isset($_SESSION['Correo_Donante'])) {
        header('Location: login.php'); 
        exit();
    }

    require('conexion.php');

    $conn = cargar_bd();

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $mensaje = ""; // Inicializar el mensaje vacío

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera los datos del formulario
        $nombre = $_POST['nombre'];
        $ap_pat = $_POST['ap_pat'];
        $ap_mat = $_POST['ap_mat'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        
        // ID del usuario obtenido de la sesión
        $idDonante = $_SESSION['idDonante'];

        // Prepara la consulta SQL para actualizar los datos del usuario
        $sql = "UPDATE donante SET Nombre_Donante=?, Apellido_Pat_Donante=?, Apellido_Mat_Donante=?, Tel_Donante=?, Correo_Donante=? WHERE idDonante=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $nombre, $ap_pat, $ap_mat, $telefono, $correo, $idDonante);
        
        // Ejecuta la consulta
        if ($stmt->execute()) {
            $mensaje = "Los datos han sido actualizados correctamente.";
        } else {
            $mensaje = "Error al actualizar los datos: " . $conn->error;
        }
    }

    // Obtener datos del usuario
    $idDonante = $_SESSION['idDonante'];
    $sql = "SELECT Nombre_Donante, Apellido_Pat_Donante, Apellido_Mat_Donante, Tel_Donante, Correo_Donante FROM donante WHERE idDonante = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idDonante);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['Nombre_Donante'];
        $ap_pat = $row['Apellido_Pat_Donante'];
        $ap_mat = $row['Apellido_Mat_Donante'];
        $telefono = $row['Tel_Donante'];
        $correo = $row['Correo_Donante'];
    } else {
        echo "No se encontró información del usuario.";
        $nombre = $ap_pat = $ap_mat = $telefono = $correo = "";
    }
    ?>

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
    
            <?php
            if (isset($_SESSION['Correo_Donante'])) {
                echo '<ul class="nav navbar-nav navbar-right">
                <li><a href="p_usuario.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['Correo_Donante'].'</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
                </ul>';
            }
            ?>
        </div>
    </nav>
    <h1>
        Información Personal
    </h1>
    <form class="bloque" id="form" method="post">
        <input class="parte1" type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" disabled>
        <input class="parte2" type="text" id="ap_pat" name="ap_pat" value="<?php echo htmlspecialchars($ap_pat); ?>" disabled>
        <input class="parte3" type="text" id="ap_mat" name="ap_mat" value="<?php echo htmlspecialchars($ap_mat); ?>" disabled>
        <input class="parte4" type="number" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>" disabled>
        <input class="parte5" type="text" id="correo" name="correo" value="<?php echo htmlspecialchars($correo); ?>" disabled>
        <input class="parte6" type="button" name="login" onclick="habilitarCampos()" value="Modificar">
        <input class="parte7" type="submit" name="confirmar" value="Confirmar Modificación">
    </form>
    <?php if (!empty($mensaje)) { ?>
        <p><?php echo $mensaje; ?></p>
    <?php } ?>
    <br><hr class="rounded">
    <h1>
        Donaciones
    </h1>

    <table class="table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Consulta SQL para obtener las donaciones del usuario
        $sql_donaciones = "SELECT d.Fecha_Donacion, dd.Descripcion
        FROM donacion d
        JOIN tipo_donacion td ON d.Tipo_Donacion = td.idTipo_Donacion
        JOIN descripcion_donacion dd ON d.Descripcion_Donacion = dd.idDescripcion_Donacion
        WHERE d.Donante = ?";

        // Verificar si la conexión a la base de datos está establecida correctamente
        if ($conn) {
            $stmt_donaciones = $conn->prepare($sql_donaciones);
            $stmt_donaciones->bind_param("i", $idDonante);
            $stmt_donaciones->execute();
            $result_donaciones = $stmt_donaciones->get_result();

            while ($row_donacion = $result_donaciones->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row_donacion['Fecha_Donacion']) . "</td>"; // Se usa htmlspecialchars para evitar inyección de HTML
                echo "<td>" . htmlspecialchars($row_donacion['Cantidad']) . "</td>"; // Se usa htmlspecialchars para evitar inyección de HTML
                echo "<td>" . htmlspecialchars($row_donacion['Descripcion_Donacion']) . "</td>"; // Se usa htmlspecialchars para evitar inyección de HTML
                echo "</tr>";
            }

            if ($result_donaciones->num_rows == 0) {
                echo "<tr><td colspan='3'>No se encontraron donaciones.</td></tr>";
            }

            // Cerrar la consulta preparada
            $stmt_donaciones->close();
        } else {
            echo "<tr><td colspan='3'>Error de conexión a la base de datos.</td></tr>";
        }
        ?>
    </tbody>
</table>




    <footer>
        <p class="p_footer">© 2024 Donaciones UABC</p>
    </footer>   
    <script>
        function habilitarCampos() {
            document.getElementById('nombre').disabled = false;
            document.getElementById('ap_pat').disabled = false;
            document.getElementById('ap_mat').disabled = false;
            document.getElementById('telefono').disabled = false;
            document.getElementById('correo').disabled = false;
            document.getElementById('login').style.display = 'none';
        }
    </script>
</body>
</html>
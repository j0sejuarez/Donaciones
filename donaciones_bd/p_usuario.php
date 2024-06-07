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
$stmt->close();
$conn->close();
?>

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
        <input class="parte1" type="text" id="nombre" name="fname" value="<?php echo htmlspecialchars($nombre); ?>" disabled>
        <input class="parte2" type="text" id="ap_pat" name="fname" value="<?php echo htmlspecialchars($ap_pat); ?>" disabled>
        <input class="parte3" type="text" id="ap_mat" name="fname" value="<?php echo htmlspecialchars($ap_mat); ?>" disabled>
        <input class="parte4" type="number" id="telefono" name="fname" value="<?php echo htmlspecialchars($telefono); ?>" disabled>
        <input class="parte5" type="text" id="correo" name="fname" value="<?php echo htmlspecialchars($correo); ?>" disabled>
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

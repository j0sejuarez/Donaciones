<?php
session_start();
require('conexion.php');
$link = cargar_bd();
$tipo_donaciones = [];

if ($link) {
    $sql = "SELECT idTipo_Donacion, Tipo_Donacion FROM tipo_donacion";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tipo_donaciones[$row["idTipo_Donacion"]] = $row["Tipo_Donacion"];
        }
    }
    
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Donación</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="p_usuario.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['Correo_Donante'].'</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
                </ul>';
                
            } 
            ?>
        </div>
    </nav>
    <h1>Alta de Donación</h1>
<form id="donacionForm" action="alta_donacion.php" method="POST">
    <label for="donante">ID Donante:</label>
    <input type="number" id="donante" name="donante" required><br><br>
    
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br><br>

    <label for="fecha_donacion">Fecha de Donación:</label>
    <input type="datetime-local" id="fecha_donacion" name="fecha_donacion" required><br><br>
    
    <label for="donacion_realizada">Donación Realizada:</label>
    <input type="checkbox" id="donacion_realizada" name="donacion_realizada"><br><br>
    
    <label for="tipo_donacion">Tipo de Donación:</label>
    <select id="tipo_donacion" name="tipo_donacion" required>
        <option value="">Seleccione...</option>
        <?php
            if (!empty($tipo_donaciones)) {
                foreach ($tipo_donaciones as $id => $tipo) {
                    echo '<option value="' . $id . '">' . $tipo . '</option>';
                }
            } else {
                echo '<option value="">No hay opciones disponibles</option>';
            }
        ?>
    </select><br><br>
    
    <div id="alimentosFields" class="hidden">
        <label for="tipo_alimento">Tipo de Alimento:</label>
        <input type="text" id="tipo_alimento" name="tipo_alimento"><br><br>
        
        <label for="caducidad">Caducidad:</label>
        <input type="date" id="caducidad" name="caducidad"><br><br>
        
        <label for="descripcion_alimento">Descripción:</label>
        <textarea id="descripcion_alimento" name="descripcion_alimento"></textarea><br><br>
        
        <label for="cantidad_alimentos">Cantidad:</label>
        <input type="number" id="cantidad_alimentos" name="cantidad_alimentos" required><br><br>
    </div>
    
    <div id="materialesFields" class="hidden">
        <label for="tipo_material">Tipo de Material:</label>
        <input type="text" id="tipo_material" name="tipo_material"><br><br>
        
        <label for="descripcion_material">Descripción:</label>
        <textarea id="descripcion_material" name="descripcion_material"></textarea><br><br>
        
        <label for="cantidad_materiales">Cantidad:</label>
        <input type="number" id="cantidad_materiales" name="cantidad_materiales" required><br><br>
    </div>
    
    <div id="monetariaFields" class="hidden">
        <label for="metodo_donacion">Método de Donación:</label>
        <select id="metodo_donacion" name="metodo_donacion">
            <option value="Transferencia">Transferencia</option>
            <option value="Efectivo">Efectivo</option>
        </select><br><br>
        
        <label for="cuenta_destino">Cuenta Destino:</label>
        <input type="text" id="cuenta_destino" name="cuenta_destino" maxlength="16"><br><br>
        
        <label for="cuenta_origen">Cuenta Origen:</label>
        <input type="text" id="cuenta_origen" name="cuenta_origen"><br><br>
        
        <label for="cantidad_monetaria">Cantidad:</label>
        <input type="number" id="cantidad_monetaria" name="cantidad_monetaria" required><br><br>
    </div>
    
    <button type="submit">Enviar</button>
</form>

<script>
    document.getElementById('tipo_donacion').addEventListener('change', function () {
        document.getElementById('alimentosFields').classList.add('hidden');
        document.getElementById('materialesFields').classList.add('hidden');
        document.getElementById('monetariaFields').classList.add('hidden');
        
        if (this.value === '1') {  // Valor correspondiente a "Alimentos"
            document.getElementById('monetariaFields').classList.remove('hidden');
        } else if (this.value === '2') {  // Valor correspondiente a "Materiales"
            document.getElementById('materialesFields').classList.remove('hidden');
        } else if (this.value === '3') {  // Valor correspondiente a "Monetaria"
            document.getElementById('alimentosFields').classList.remove('hidden');
        }
    });
</script>

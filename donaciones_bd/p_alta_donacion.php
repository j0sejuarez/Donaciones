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
    <link rel="stylesheet" href="css/s_alta_donacion.css">
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Donaciones UABC</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION['Correo_Donante']) && $_SESSION['Correo_Donante'] == 'josefjaceves@gmail.com') {
                    echo '
                    <ul class="nav navbar-nav">
                    <li class="active"><a href="p_alta_donacion.php">Donaciones</a></li>
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
<form id="donacionForm" action="alta_donacion.php" method="POST" >
    <div class="bloque">
    <div class="parte1">
        <h2><label for="donante">ID Donante</label></h2>
        <input type="number" id="donante" name="donante" required> 
    </div>
    <div class="parte2">
        <h2><label for="direccion">Dirección</label></h2>
        <input type="text" id="direccion" name="direccion" required>
    </div>
    <div class="parte3">
        <h2><label for="fecha_donacion">Fecha de Donación</label></h2>
        <input type="datetime-local" id="fecha_donacion" name="fecha_donacion" required>
    </div>
    <div class="parte5">
        <h2><label for="donacion_realizada">Donación Realizada</label></h2>
        <input type="checkbox" id="donacion_realizada" name="donacion_realizada">
    </div>

    <div class="parte4">
        <h2><label for="tipo_donacion">Tipo de Donación</label></h2>
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
        </select>
    </div>
    </div>
        
    
    <div id="alimentosFields" class="hidden">
        <div class="bloque2-2">
            <div class="parte6almo">
                <h2><label for="tipo_alimento">Tipo de Alimento</label></h2>
                <input type="text" id="tipo_alimento" name="tipo_alimento"> 
            </div>
            <div class="parte7almo">
                <h2><label for="caducidad">Caducidad</label></h2>
                <input type="date" id="caducidad" name="caducidad">
            </div>
            <div class="parte9almo">
                <h2><label for="descripcion_alimento">Descripción</label></h2>
                <textarea id="descripcion_alimento" name="descripcion_alimento"></textarea>
            </div>
            <div class="parte8almo">
                <h2><label for="cantidad_alimentos">Cantidad</label></h2>
                <input type="number" id="cantidad_alimentos" name="cantidad_alimentos" required>
            </div>
        </div>
    </div>
    
    <div id="materialesFields" class="hidden">
        <div class="bloque2-1">
            <div class="parte6mat">
                <h2><label for="tipo_material">Tipo de Material</label></h2>
                <input type="text" id="tipo_material" name="tipo_material">
            </div>
            <div class="parte7mat">
                <h2><label for="descripcion_material">Descripción</label></h2>
                <textarea id="descripcion_material" name="descripcion_material"></textarea>
            </div>
            <div class="parte8mat">
                <h2><label for="cantidad_materiales">Cantidad</label></h2>
                <input type="number" id="cantidad_materiales" name="cantidad_materiales" required>
            </div>
        </div>
    </div>
    
    <div id="monetariaFields" class="hidden">
        <div class="bloque2-2">
            <div class="parte6almo">
                <h2><label for="metodo_donacion">Método de Donación</label></h2>
                <select id="metodo_donacion" name="metodo_donacion">
                    <option value="Transferencia">Transferencia</option>
                    <option value="Efectivo">Efectivo</option>
                </select>
            </div>
            <div class="parte9almo">
                <h2><label for="cuenta_destino">Cuenta Destino</label></h2>
                <input type="text" id="cuenta_destino" name="cuenta_destino" maxlength="16">
            </div>
            <div class="parte8almo">
                <h2><label for="cuenta_origen">Cuenta Origen</label></h2>
                <input type="text" id="cuenta_origen" name="cuenta_origen">
            </div>
            <div class="parte7almo">
                <h2><label for="cantidad_monetaria">Cantidad</label></h2>
                <input type="number" id="cantidad_monetaria" name="cantidad_monetaria" required>
            </div>
        </div>
    </div>
    <div class="bloque3">
        <div class="parteBoton">
            <button type="submit">Registrar</button>
        </div>
    </div>
</form>
<footer>
     <p class="p_footer">© 2024 Donaciones UABC</p>
</footer></html>
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

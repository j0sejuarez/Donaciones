<?php
session_start(); // Iniciar la sesión si no se ha iniciado aún

if (isset($_POST['cantidad'], $_POST['cuenta_origen'], $_POST['metodo'], $_POST['cuenta_destino'], $_POST['recibido'])) {
    $cantidad = $_POST['cantidad'];
    $cuenta_origen = $_POST['cuenta_origen'];
    $metodo = $_POST['metodo'];
    $cuenta_destino = $_POST['cuenta_destino'];
    $recibido = $_POST['recibido'];

    // Aquí deberías realizar la validación y limpieza de datos según sea necesario

    // Luego, inserta los datos en la base de datos
    require('conexion.php'); // Reemplaza 'conexion.php' con el nombre de tu archivo de conexión
    $link = cargar_bd(); // Asumiendo que esta función carga la base de datos

    if ($link) {
        $sql = "INSERT INTO donacion_monetaria (cantidad, cuenta_origen, metodo, cuenta_destino, recibido) 
                VALUES ('$cantidad', '$cuenta_origen', '$metodo', '$cuenta_destino', '$recibido')";

        if (mysqli_query($link, $sql)) {
            echo "Se ha registrado la donación exitosamente.";
        } else {
            echo "Error al registrar la donación: " . mysqli_error($link);
        }

        mysqli_close($link);
    } else {
        echo "Error de conexión a la base de datos.";
    }
} else {
    echo "Todos los campos son obligatorios. Por favor, completa el formulario.";
}
?>

<?php
session_start(); // Iniciar sesión si aún no está iniciada

// Verificar si el ID del donante está almacenado en la sesión
if(isset($_SESSION['idDonante'])){
    $idDonante = $_SESSION['idDonante']; // Obtener el ID del donante de la sesión

    // Obtener los datos de la donación del formulario
    if (isset($_POST['cantidad'],$_POST['tipo_al'], $_POST['descripcion'], $_POST['recibido'], $_POST['caducidad'])) {
        $cantidad = $_POST['cantidad'];
        $tipo_al = $_POST['tipo_al'];
        $descripcion = $_POST['descripcion'];
        $recibido = $_POST['recibido'];
        $caducidad = $_POST['caducidad'];
        
        require('conexion.php');
        $link = cargar_bd();
        
        if($link){
            // Llamada al procedimiento almacenado para preparar los datos de la donación
            $query = "CALL recoleccionDatos_A('$cantidad', '$tipo_al', '$descripcion', '$recibido', '$caducidad', @tipo_donacion, @descripcion_donacion) COLLATE utf8_general_ci";
            $result = mysqli_query($link, $query);
            
            // Verificar si la llamada al procedimiento almacenado fue exitosa
            if($result){
                // Obtener los valores de salida del procedimiento almacenado
                $select_query = "SELECT @tipo_donacion AS tipo_donacion, @descripcion_donacion AS descripcion_donacion";
                $select_result = mysqli_query($link, $select_query);
                $row = mysqli_fetch_assoc($select_result);
                $tipo_donacion = $row['tipo_donacion'];
                $descripcion_donacion = $row['descripcion_donacion'];

                // Insertar la donación con los datos completos
                $insert_query = "INSERT INTO donacion (Donante, Fecha_Donacion, Donacion_Realizada, Tipo_Donacion, Descripcion_Donacion, Direccion) 
                VALUES ('$idDonante', NOW(), 1, '$tipo_donacion', '$descripcion_donacion', '$recibido')";
                
                if(mysqli_query($link, $insert_query)){
                    echo "Se registró la donación de alimentos con éxito.";
                } else {
                    echo "Error al registrar la donación.";
                }
            } else {
                echo "Error al preparar los datos de la donación.";
            }
            
            mysqli_close($link);
        }
    }
} else {
    echo "No se encontró información del donante en la sesión.";
}
?>

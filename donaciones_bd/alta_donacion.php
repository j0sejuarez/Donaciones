<?php
if (isset($_POST['donante_d'],$_POST['fecha_d'], $_POST['donacion_r'],$_POST['tipo_d'],$_POST['descripcion_d'], $_POST['direccion_d'])) {
        $donante_d = $_POST['donante_d'];
        $fecha_d = $_POST['fecha_d'];
        $donacion_r = $_POST['donacion_r'];
        $tipo_d = $_POST['tipo_d'];
        $descripcion_d = $_POST['descripcion_d'];
        $direccion_d = $_POST['direccion_d'];
        require('conexion.php');
        $link = cargar_bd();
        if($link){
            $sql = "insert into donacion (Donante,Fecha_Donacion,Donacion_Realizada,
            Tipo_Donacion,Descripcion_Donacion,Direccion) 
            values ('$donante_d','$fecha_d','$donacion_r','$tipo_d','$descripcion_d','$direccion_d')";
            if(mysqli_query($link,$sql)){
               echo "Se registro la donacion";
            } 
            else {
                    echo "Error de registro";
                }
            mysqli_close($link);
        }
    }   
?>


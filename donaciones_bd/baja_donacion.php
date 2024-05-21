<?php

if(isset($_POST['id_d'])) {
    $id_d = $_POST['id_d'];
    require('conexion.php');
    $link = cargar_bd();
    $sql = "delete from donacion where idDonacion = $id_d";
    if(mysqli_query($link,$sql)){
        if(isset($id_d)){
            echo "Se elimino la donacion correctamente";
        } else {
            echo "No se pudo eliminar la donacion";
        }
    }
    mysqli_close($link);
}
?>
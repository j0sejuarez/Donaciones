<?php

if(isset($_POST['id_d'])) {
    $id_d = $_POST['id_d'];
    require('conexion.php');
    $link = cargar_bd();
    $sql = "delete from donante where idDonante = $id_d";
    if(mysqli_query($link,$sql)){
        if(isset($id_d)){
            echo "Se elimino el donante correctamente";
        } else {
            echo "No se pudo eliminar al donante";
        }
    }
    mysqli_close($link);
}
?>
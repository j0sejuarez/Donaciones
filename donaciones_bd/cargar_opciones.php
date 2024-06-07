<?php
require('conexion.php');
$link = cargar_bd();
$tipo_donaciones = [];

if ($link) {
    $sql = "SELECT idTipo_Donacion,Tipo_Donacion FROM tipo_donacion";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tipo_donaciones[$row["idTipo_Donacion"]] = $row["Tipo_Donacion"];
        }
    }
    
    mysqli_close($link);
}

return $tipo_donaciones;

?>
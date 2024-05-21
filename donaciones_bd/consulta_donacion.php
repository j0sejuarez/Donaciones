<?php
    require('conexion.php');
    $link = cargar_bd();
    $id_d = $_POST['id_d'];
    $sql = "select dc.idDonacion,concat(dn.Nombre_Donante,' ',dn.Apellido_Pat_Donante,' ',dn.Apellido_Mat_Donante) 
    as nombre_donante,
    dc.Fecha_Donacion,dc.Donacion_Realizada,td.Tipo_Donacion,dd.Descripcion,
    concat(di.Calle,' ',di.Num_Ext, ' ',di.Ciudad,' ',di.Estado, ' ',di.CP,' ',di.Colonia) 
    as direccion_donacion
    from donacion dc
    join tipo_donacion td on  td.idTipo_Donacion = dc.Tipo_Donacion
    join donante dn on dn.idDonante = dc.Donante
    join descripcion_donacion dd on dd.idDescripcion_Donacion = dc.Descripcion_Donacion
    join direccion di on di.idDireccion = dc.Direccion
    where idDonacion = $id_d";
    $result = mysqli_query($link, $sql);
    if($result) {
        echo "<h1>Datos del donante</h1>";
        echo "<p>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Estado Donacion</th>
                <th>Tipo de donacion</th>
                <th>Descripcion</th>
                <th>Direaccion</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['idDonacion']."</td>";
            echo "<td>".$row['nombre_donante']."</td>";
            echo "<td>".$row['Fecha_Donacion']."</td>";
            echo "<td>".$row['Donacion_Realizada']."</td>";
            echo "<td>".$row['Tipo_Donacion']."</td>";
            echo "<td>".$row['Descripcion']."</td>";
            echo "<td>".$row['direccion_donacion']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($link);
    }
    mysqli_close($link);
?>
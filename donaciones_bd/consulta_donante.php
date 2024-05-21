<?php
    require('conexion.php');
    $link = cargar_bd();
    $id_d = $_POST['id_d'];
    $sql = "select idDonante,Nombre_Donante,Apellido_Pat_Donante,
    Apellido_Mat_Donante,Tel_Donante,Correo_Donante from donante where idDonante = $id_d";
    $result = mysqli_query($link, $sql);
    if($result) {
        echo "<h1>Datos del donante</h1>";
        echo "<p>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Telefono</th>
                <th>Correo</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['idDonante']."</td>";
            echo "<td>".$row['Nombre_Donante']."</td>";
            echo "<td>".$row['Apellido_Pat_Donante']."</td>";
            echo "<td>".$row['Apellido_Mat_Donante']."</td>";
            echo "<td>".$row['Tel_Donante']."</td>";
            echo "<td>".$row['Correo_Donante']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($link);
    }
    mysqli_close($link);
?>
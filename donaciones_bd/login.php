<?php
    session_start();
    if(isset($_POST['correo']) && isset($_POST['contrasena'])){
        $usuario = $_POST['correo'];
        $pwd = $_POST['contrasena'];
        echo "Se recibio $usuario y $pwd";
        require('conexion.php');
        $link = cargar_bd();
        $sql = "select idDonante,Correo_Donante from donante where Correo_Donante = '$usuario' and Pwd_Donante='$pwd'";
        if($result = mysqli_query($link,$sql)){
            while($row = mysqli_fetch_array($result)){
                $id = $row['idDonante'];
                $correo = $row['Correo_Donante'];
            }
            mysqli_close($link);
            
            if(isset($correo)){
               // echo " y se encontro el usuario $mat";
               $_SESSION['Correo_Donante'] = $correo;
               $_SESSION['idDonante'] = $id;
               header('Location: http://localhost/donaciones_bd/index.php');
            } else{
                echo " Usuario no encontrado";
            }
        } else{
            echo " Usuario no encontrado";
        }
    } else {
        echo "No se recibio informacion";
    }
    

?>
<?php
if (isset($_POST['nombre_d'], $_POST['ap_pat_d'],$_POST['ap_mat_d'],$_POST['telefono_d'], $_POST['correo_d'], $_POST['pwd_d'])) {
        $nombre_d = $_POST['nombre_d'];
        $ap_pat_d = $_POST['ap_pat_d'];
        $ap_mat_d = $_POST['ap_mat_d'];
        $telefono_d = $_POST['telefono_d'];
        $correo_d = $_POST['correo_d'];
        $pwd_d = $_POST['pwd_d'];
        
        require('conexion.php');
        $link = cargar_bd();
        if($link){
            $sql = "insert into donante (Nombre_Donante,Apellido_Pat_Donante,
            Apellido_Mat_Donante,Tel_Donante,Correo_Donante,Pwd_Donante) 
            values ('$nombre_d','$ap_pat_d','$ap_mat_d','$telefono_d','$correo_d','$pwd_d')";
            if(mysqli_query($link,$sql)){
                header('Location: http://localhost/donaciones_bd/p_login.php');
            } 
            else {
                    echo "Error de registro";
                }
            mysqli_close($link);
        }
    }   
?>

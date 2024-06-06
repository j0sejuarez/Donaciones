<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <title>Donaciones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/s_donaciones.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="#">Donaciones</a></li>
                    <li><a href="#">Consulta</a></li>
                </ul>    
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="p_login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                    <li><a href="p_alta_donante.php"><span class="glyphicon glyphicon-log-in"></span> Registro</a></li>
                </ul>
            </div>
        </nav>
        <h1>
            Tipos de Donación
        </h1>
        <div class="bloque">
            <div class="parte1">
                <img src="imagenes/donaciona.png" alt="donaciona" class="ajustar-imagen">
            </div>
            <div class="parte2">
                <h2>
                    Donación Monetaria
                </h2>
                <p>
                    Las donaciones monetarias son una forma común de apoyar a organizaciones benéficas o causas específicas, estas pueden ser realizadas a través de diferentes métodos, como transferencias por tarjetas de crédito o débito, y efectivo.
                </p>
                <form id="form">
                    <input type="submit" name="login" formaction="#" value="Donar ahora">
                </form>
            </div>
            <div class="parte3">
                <img src="imagenes/donacionb.png" alt="donacionb" class="ajustar-imagen">
            </div>
            <div class="parte4">            
                <h2>
                    Donación Material
                </h2>
                <p>
                    Las donaciones de bienes materiales son una forma valiosa de apoyar a organizaciones benéficas, especialmente aquellas que se enfocan en ayudar a personas en situación de vulnerabilidad. Estas donaciones pueden incluir objetos como ropa, libros, juguetes, y otros artículos que puedan ser útiles para los beneficiarios.
                </p>
                <form id="form">
                    <input type="submit" name="login" formaction="#" value="Donar ahora">
                </form> 
            </div>
            <div class="parte5">
                <img src="imagenes/donacionc.png" alt="donacionc" class="ajustar-imagen">
                
            </div>
            <div class="parte6">
                <h2>
                    Donación Alimento
                </h2>
                <p>
                    Las donaciones de alimentos son una forma específica de apoyar a organizaciones benéficas que se enfocan en la distribución de alimentos a personas necesitadas. Estas donaciones pueden incluir alimentos no perecederos, como cereales, legumbres, y otros productos que puedan ser almacenados y distribuidos de manera eficiente. 
                </p>
                <form id="form">
                    <input type="submit" name="login" formaction="#" value="Donar ahora">
                </form>
            </div>
        </div>
        <footer>
            <p class="p_footer">© 2024 Donaciones UABC</p>
        </footer> 
    </body>
</html>
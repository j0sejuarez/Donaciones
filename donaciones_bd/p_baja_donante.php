<!DOCTYPE html>
<html lang="es">
<head>
    <title>Borrado de donantes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paginas_basic.css">
</head>
<body>
    <div id="bloque">
        <h1>Eliminar donante</h1>
        <form method="post" action="baja_donante.php">
            <p>
            <p><label for="id_d">Clave del donante</label></p>
            <input class="int" type="number" id="id_d" name="id_d" required>
            <p>
                <input class="boton" type="submit" value="Eliminar">
            </p>
        </form>
    </div>
</body>
</html>
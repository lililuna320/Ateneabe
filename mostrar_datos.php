<!DOCTYPE html>
<html>
<head>
    <title>Datos del Usuario</title>
</head>
<body>
    <h1>Datos del Usuario</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Número de Cédula: $cedula</p>";
    }
    ?>
</body>
</html>
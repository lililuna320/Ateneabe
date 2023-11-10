<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos</title>
</head>
<body>
    <header>
        <?php
        require_once("header.php");
        ?>
    </header>
    
    <h1>Formulario de Datos</h1>
    

    <form method="get" action="mostrar_datos.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="cedula">Número de Cédula:</label>
        <input type="text" id="cedula" name="cedula" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
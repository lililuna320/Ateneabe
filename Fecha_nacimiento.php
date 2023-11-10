<!DOCTYPE html>
<html>
<head>
    <title>Verificar Edad</title>
</head>
<body>
    <header>
        <?php
        require_once("header.php");
        ?>
    </header>

    <h1>Verificar Edad</h1>

    <form method="post" action="">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <input type="submit" value="Calcular Edad">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fechaNacimiento = $_POST['fecha_nacimiento'];

        $fechaActual = date('Y-m-d');
        $edad = date_diff(date_create($fechaNacimiento), date_create($fechaActual))->y;

        echo "Su edad es $edad";

        if ($edad < 18) {
            echo " por tanto: No es mayor de edad";
        } else {
            echo " por tanto: Es mayor de edad";
        }
    }
    ?>
</body>
</html>
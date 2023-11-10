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
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $edad = $_POST['edad'];

        if ($edad < 18) {
            echo "No es mayor de edad";
        } else {
            echo "Es mayor de edad";
        }
    }
    ?>
</body>
</html>
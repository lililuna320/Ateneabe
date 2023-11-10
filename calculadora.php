<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <header>
        <?php
        require_once("header.php");
        ?>
    </header>
    
    <h1>Calculadora</h1>

    <form method="post" action="">
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <label for="operacion">Tipo de operación:</label>
        <select id="operacion" name="operacion">
            <option value="SUMA">Suma</option>
            <option value="RESTA">Resta</option>
            <option value="MULTIPLICACION">Multiplicación</option>
            <option value="DIVISION">División</option>
        </select><br><br>

        <input type="submit" value="Operar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case 'SUMA':
                $resultado = $numero1 + $numero2;
                break;
            case 'RESTA':
                $resultado = $numero1 - $numero2;
                break;
            case 'MULTIPLICACION':
                $resultado = $numero1 * $numero2;
                break;
            case 'DIVISION':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    echo "No se puede dividir entre cero.";
                }
                break;
            default:
                echo "Operación inválida.";
                break;
        }

        echo "<br><br>Resultado: $resultado";
    }
    ?>
</body>
</html>
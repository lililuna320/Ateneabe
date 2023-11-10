<html>
<head>
    <title>BASE DE DATOS</title>
<link rel = "stylesheet" href = "css/style.css">
</head>
<body>
    <header>
        <?php
        require_once("header.php");
        ?>
    </header>
    
    <h1>BASE DE DATOS</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mi_proyecto";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE 1=1";

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
    $sql .= " AND ID = '$id'";
}

if (isset($_GET['nombre']) && $_GET['nombre'] != '') {
    $nombre = $_GET['nombre'];
    $sql .= " AND Nombre LIKE '%$nombre%'";
}

if (isset($_GET['apellido']) && $_GET['apellido'] != '') {
    $apellido = $_GET['apellido'];
    $sql .= " AND Apellido LIKE '%$apellido%'";
}

if (isset($_GET['cedula']) && $_GET['cedula'] != '') {
    $cedula = $_GET['cedula'];
    $sql .= " AND Cédula = '$cedula'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la tabla con los resultados y los filtros
    echo "<form method='GET'>";
    echo "<label for='id'>Filtrar por ID:</label>";
    echo "<input type='text' id='id' name='id' value='" . (isset($_GET['id']) ? $_GET['id'] : '') . "'>";
    echo "<input type='submit' value='Filtrar'>";
    echo "</form>";

    echo "<form method='GET'>";
    echo "<label for='nombre'>Filtrar por Nombre:</label>";
    echo "<input type='text' id='nombre' name='nombre' value='" . (isset($_GET['nombre']) ? $_GET['nombre'] : '') . "'>";
    echo "<input type='submit' value='Filtrar'>";
    echo "</form>";

    echo "<form method='GET'>";
    echo "<label for='apellido'>Filtrar por Apellido:</label>";
    echo "<input type='text' id='apellido' name='apellido' value='" . (isset($_GET['apellido']) ? $_GET['apellido'] : '') . "'>";
    echo "<input type='submit' value='Filtrar'>";
    echo "</form>";

    echo "<form method='GET'>";
    echo "<label for='cedula'>Filtrar por Cédula:</label>";
    echo "<input type='text' id='cedula' name='cedula' value='" . (isset($_GET['cedula']) ? $_GET['cedula'] : '') . "'>";
    echo "<input type='submit' value='Filtrar'>";
    echo "</form>";

    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Cédula</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Apellido"] . "</td>";
        echo "<td>" . $row["Cédula"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión
$conn->close();
?>

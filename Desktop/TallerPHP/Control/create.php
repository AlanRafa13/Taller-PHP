<?php

require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    // Consulta SQL para insertar
    $sql = "INSERT INTO Personas (codigo, email, nombre, telefono) VALUES ('$codigo', '$email', '$nombre', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente. <a href='leer.php'>Ver lista</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
</head>
<body>
    <h2>Agregar Nueva Persona</h2>
    <form method="post" action="">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>


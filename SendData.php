<?php

//TODO GUARDADO DE DATOS NO EXITOSO POR ID

include 'conexion.php';

$nombre = $_POST['nombre'];
$numero_control = $_POST['numero_control'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$escuela = $_POST['escuela'];
$celular = $_POST['celular'];


echo "<h2>Datos recibidos:</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Número de control: $numero_control</p>";
echo "<p>Fecha de nacimiento: $fecha_nacimiento</p>";
echo "<p>Escuela: $escuela</p>";
echo "<p>Celular: $celular</p>";

try {
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO Usuarios (Nombre, NoControl, FechaNac, Escuela, Celular) VALUES (?, ?, ?, ?, ?)";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssss", $nombre, $numero_control, $fecha_nacimiento, $escuela, $celular);
    $stmt->execute();

    // Check if the execution was successful
    if ($stmt->affected_rows > 0) {
        echo "Datos guardados exitosamente.";
    } else {
        echo "No se pudo guardar los datos.";
    }

    // Close the statement
    $stmt->close();

} catch (Exception $e) {
    die("Error al guardar los datos: " . $e->getMessage());
}



?>

<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$sector = $_POST['sector'];
$servicios = $_POST['servicios'];
$descripcion = $_POST['descripcion'];
$telefono = $_POST['telefono'];
$horario = $_POST['horario'];

echo "<h2>Datos recibidos:</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Sector: $sector</p>";
echo "<p>Servicios: $servicios</p>";
echo "<p>Descripción: $descripcion</p>";
echo "<p>Teléfono: $telefono</p>";
echo "<p>Horario: $horario</p>";

try {
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO Clinicas (Nombre, Sector, Servicios, Descripcion, Telefono, Horario) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("ssssss", $nombre, $sector, $servicios, $descripcion, $telefono, $horario);
    $stmt->execute();

    // Check if the execution was successful
    if ($stmt->affected_rows > 0) {
        echo "Datos guardados exitosamente.";
        header("Location: clinicas.php");
    } else {
        echo "No se pudo guardar los datos.";
    }

    // Close the statement
    $stmt->close();

} catch (Exception $e) {
    die("Error al guardar los datos: " . $e->getMessage());
}
?>

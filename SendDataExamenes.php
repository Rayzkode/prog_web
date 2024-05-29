<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

// Imprimir los valores para verificar
echo "Datos del formulario:<br>";
echo "Nombre: ";
var_dump($nombre);
echo "<br>";
echo "Descripción: ";
var_dump($descripcion);
echo "<br>";

try {
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO examenes (Nombre, Descripcion) VALUES (?, ?)";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("ss", $nombre, $descripcion);
    $stmt->execute();

    // Check if the execution was successful
    if ($stmt->affected_rows > 0) {
        // Datos guardados exitosamente, redirige a otra página
        header("Location: Examenes.php");
        exit; // Asegura que el script se detenga después de la redirección
    } else {
        echo "No se pudo guardar los datos.";
    }

    // Close the statement
    $stmt->close();

} catch (Exception $e) {
    die("Error al guardar los datos: " . $e->getMessage());
}
?>

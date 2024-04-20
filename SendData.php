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
    $sql = "INSERT INTO Usuarios (Nombre, NoControl, FechaNac, Escuela, Celular) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);

    $stmt->execute([$nombre, $numero_control, $fecha_nacimiento, $escuela, $celular]);

} catch (PDOException $e) {
    die("Error al guardar los datos: " . $e->getMessage());
}


?>

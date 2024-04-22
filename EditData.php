<?php
include 'conexion.php'; // incluir archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario_id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $numero_control = $_POST['numero_control'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $escuela = $_POST['escuela'];
    $celular = $_POST['celular'];

    try {
        // Actualizar la información del usuario en la base de datos
        $sql = "UPDATE Usuarios SET Nombre = ?, NoControl = ?, FechaNac = ?, Escuela = ?, Celular = ? WHERE UsID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nombre, $numero_control, $fecha_nacimiento, $escuela, $celular, $usuario_id]);

        echo "Los cambios se guardaron correctamente.";
    } catch (PDOException $e) {
        echo "Error al guardar los cambios: " . $e->getMessage();
    }
}
?>

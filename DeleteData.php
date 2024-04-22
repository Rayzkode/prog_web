
<?php
include 'conexion.php'; // incluir archivo de conexión

$usuario_id = $_GET['id']; // suponiendo que recibes el ID del usuario a eliminar desde una solicitud GET

try {
    $sql = "DELETE FROM Usuarios WHERE UsID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$usuario_id]);
    echo "Usuario eliminado correctamente";
} catch (PDOException $e) {
    echo "Error al eliminar usuario: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php
    include 'conexion.php'; // incluir archivo de conexión

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtener el ID del usuario a editar
        $usuario_id = $_GET['id'];

        try {
            // Consultar la información del usuario
            $sql = "SELECT * FROM Usuarios WHERE UsID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$usuario_id]);
            $usuario = $stmt->fetch(); // recuperar la fila de usuario como un arreglo asociativo

            if ($usuario) {
                // Mostrar el formulario de edición
    ?>
                <form action="EditData.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $usuario['UsID']; ?>">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" value="<?php echo $usuario['Nombre']; ?>"><br>
                    <label for="numero_control">Número de control:</label>
                    <input type="text" name="numero_control" value="<?php echo $usuario['NoControl']; ?>"><br>
                    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" value="<?php echo $usuario['FechaNac']; ?>"><br>
                    <label for="escuela">Escuela:</label>
                    <input type="text" name="escuela" value="<?php echo $usuario['Escuela']; ?>"><br>
                    <label for="celular">Celular:</label>
                    <input type="text" name="celular" value="<?php echo $usuario['Celular']; ?>"><br>
                    <input type="submit" value="Guardar cambios">
                </form>
    <?php
            } else {
                echo "Usuario no encontrado";
            }
        } catch (PDOException $e) {
            echo "Error al recuperar usuario: " . $e->getMessage();
        }
    }
    ?>
</body>
</html>

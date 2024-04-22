<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="table_style.css">
    <title>Información del Usuario</title>
</head>
<header style="display: flex;">
    <div class="logo">
        <a href="Brujula.html"><img src="Compass.png" alt="Logo"></a>
    </div>
</header>
<body>
    <h1>Información del Usuario</h1>
    <?php
    include 'conexion.php'; // incluir archivo de conexión

    try {
        $sql = "SELECT * FROM Usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // Recorrer todas las filas de resultados
        while ($usuario = $stmt->fetch()) {
    ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Número de control</th>
                    <th>Fecha de nacimiento</th>
                    <th>Escuela</th>
                    <th>Celular</th>
                    <th>Agregar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                <tr>
                    <td><?php echo $usuario['UsID']; ?></td>
                    <td><?php echo $usuario['Nombre']; ?></td>
                    <td><?php echo $usuario['NoControl']; ?></td>
                    <td><?php echo $usuario['FechaNac']; ?></td>
                    <td><?php echo $usuario['Escuela']; ?></td>
                    <td><?php echo $usuario['Celular']; ?></td>
                    <td class="CRUD"><a href="Registro.php">Agregar</a></td>
                    <td class="CRUD"><a href='Editar.php?id=<?php echo $usuario['UsID']; ?>'>Editar</a></td>
                    <td class="CRUD"><a href='DeleteData.php?id=<?php echo $usuario['UsID']; ?>'>Eliminar</a></td>
                </tr>
            </table>
    <?php
        } // fin del bucle while
    } catch (PDOException $e) {
        echo "Error al recuperar usuarios: " . $e->getMessage();
    }
    ?>
</body>
</html>

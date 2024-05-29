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
    include 'conexion.php'; // Incluir archivo de conexión

    $sql = "SELECT * FROM Usuarios";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Iniciar la tabla si hay resultados
        echo "<table>
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
                </tr>";

        // Recorrer todas las filas de resultados
        while ($usuario = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$usuario['UsID']}</td>
                    <td>{$usuario['Nombre']}</td>
                    <td>{$usuario['NoControl']}</td>
                    <td>{$usuario['FechaNac']}</td>
                    <td>{$usuario['Escuela']}</td>
                    <td>{$usuario['Celular']}</td>
                    <td class='CRUD'><a href='Registro.php'>Agregar</a></td>
                    <td class='CRUD'><a href='Editar.php?id={$usuario['UsID']}'>Editar</a></td>
                    <td class='CRUD'><a href='DeleteData.php?id={$usuario['UsID']}'>Eliminar</a></td>
                </tr>";
        }

        // Cerrar la tabla después del bucle
        echo "</table>";
    } else {
        echo "No se encontraron usuarios.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>

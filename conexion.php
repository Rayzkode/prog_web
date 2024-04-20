<?php
// Datos de conexión
$server = 'DESKTOP-E57DQ9K'; // Reemplaza con el nombre de tu servidor SQL Server
$database = 'prog_web'; // Reemplaza con el nombre de tu base de datos
$username = 'tec'; // Reemplaza con tu nombre de usuario
$password = '123'; // Reemplaza con tu contraseña

try {
    // Conexión mediante PDO
    $conn = new PDO("sqlsrv:Server=$server;Database=$database", $username, $password);
    
    // Configuración de opciones de PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";
} catch (PDOException $e) {
    // En caso de error, muestra el mensaje de error
    die("Error en la conexión: " . $e->getMessage());
}
?>

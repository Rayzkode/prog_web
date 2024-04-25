<?php
// Datos de conexión
$server = "DESKTOP-E57DQ9K"; // Puede que necesites cambiar esto si tu servidor MySQL está en una ubicación diferente
$username = "rayzko"; // Reemplaza con tu nombre de usuario de MySQL
$password = "1234"; // Reemplaza con tu contraseña de MySQL
$database = "brujulabd"; // Reemplaza con el nombre de tu base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($server, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";

// No cierres la conexión aquí si planeas realizar más consultas más adelante

?>

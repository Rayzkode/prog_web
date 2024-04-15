<?php
// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$numero_control = $_POST['numero_control'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$escuela = $_POST['escuela'];
$celular = $_POST['celular'];

// Aquí puedes realizar operaciones como guardar los datos en una base de datos
// o enviar un correo electrónico de confirmación, etc.

// Por ejemplo, mostrar los datos recibidos:
echo "<h2>Datos recibidos:</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Número de control: $numero_control</p>";
echo "<p>Fecha de nacimiento: $fecha_nacimiento</p>";
echo "<p>Escuela: $escuela</p>";
echo "<p>Celular: $celular</p>";


?>

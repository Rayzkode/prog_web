<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Presentación</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<header>
        <div class="logo">
            <img src="Compass.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="Brujula.html">Inicio</a></li>
                <li><a href="Somos.html">Quiénes somos?</a></li>
                <li><a href="Servicios.html">Servicios</a></li>
                <li><a href="Descargar.html">Descargar app</a></li>
                <li><a href="clinicas.php">Clinicas</a></li>
                <li><a href="Registro.php">Registro</a></li>
                <li><a href="Perfil.php">Perfil</a></li>
            </ul>
        </nav>
    </header>
    <h1>Examenes</h1>
    <div class="button-container" style="display: flex;
    justify-content: center;
    margin-top: 20px; ">
    <a href="RegistroExamenes.php"> <button class="custom-button" style="background-color: #bd96e2;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.2em;
        font-weight: bold;
        transition: background-color 0.3s ease;">Nuevo Registro</button></a>
    </div>

    <?php
        include 'conexion.php';

        try {
            // Query para obtener las clínicas de la base de datos
            $sql = "SELECT * FROM examenes";
            $result = $conn->query($sql);

            // Verificar si se encontraron clínicas
            if ($result->num_rows > 0) {
                // Mostrar cada clínica
                while($row = $result->fetch_assoc()) {
                    echo '<div class="container">';
                    echo '<div class="left-section">';
                    //some some
                    echo '</div>';
                    echo '<div class="right-section">';
                    echo '<h1>' . $row['nombre'] . '</h1>';
                    echo '<p>' . $row['descripcion'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No se encontraron clínicas.";
            }

        } catch (Exception $e) {
            die("Error al obtener las clínicas: " . $e->getMessage());
        }
    ?>


</body>
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h2>Contacto</h2>
            <p>Correo: info@brujulaemocional.com</p>
            <p>Teléfono: +1234567890</p>
        </div>
        <div class="footer-section">
            <h2>Síguenos</h2>
            <div class="social-icons">
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-section">
            <h2>Acerca de nosotros</h2>
            <p>Somos un equipo comprometido con tu bienestar emocional. Nuestro objetivo es proporcionarte
                herramientas y recursos para fortalecer tu salud mental.</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Brújula Emocional. Todos los derechos reservados.</p>
    </div>
</footer>
</html>
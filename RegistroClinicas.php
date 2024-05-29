<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clínicas</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header style="display: flex;">
        <div class="logo">
            <a href="Brujula.html"><img src="Compass.png" alt="Logo"></a>
        </div>
    </header>
    <h1>Registro de Clínicas</h1>
    <div class="container">
        <div class="center_container">
            <form action="SendDataClinicas.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                
                <label for="sector">Sector:</label>
                <input type="text" id="sector" name="sector" required><br><br>
                
                <label for="servicios">Servicios:</label>
                <textarea id="servicios" name="servicios" required></textarea><br><br>
                
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea><br><br>
                
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required><br><br>
                
                <label for="horario">Horario:</label>
                <input type="text" id="horario" name="horario" required><br><br>
                
                <input type="submit" value="Registrar Clínica">
            </form>
        </div>
    </div>
</body>

</html>

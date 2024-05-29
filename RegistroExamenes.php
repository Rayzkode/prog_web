<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Exámenes</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header style="display: flex;">
        <div class="logo">
            <a href="Brujula.html"><img src="Compass.png" alt="Logo"></a>
        </div>
    </header>
    <h1>Registro de Exámenes</h1>
    <div class="container">
        <div class="center_container">
            <form action="SendDataExamenes.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea><br>
                <p id="contador"></p><br>
                
                <input type="submit" value="Registrar Examen">
            </form>
        </div>
    </div>

    <script>
        // Función para contar caracteres
        document.getElementById("descripcion").addEventListener("input", function() {
            var contador = document.getElementById("contador");
            var caracteresRestantes = 500 - this.value.length;
            contador.textContent = "Caracteres restantes: " + caracteresRestantes;
        });
    </script>
</body>

</html>

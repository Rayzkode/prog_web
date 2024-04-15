<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header style="display: flex;">
        <div class="logo">
            <a href="Brujula.html"><img src="Compass.png" alt="Logo"></a>
        </div>
    </header>
    <h1>Registro</h1>
    <div class="container"> <div class="center_container">
        <form action="SendData.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="numero_control">Número de control:</label>
            <input type="text" id="numero_control" name="numero_control" required><br><br>
            
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>
            
            <label for="escuela">Escuela:</label>
            <input type="text" id="escuela" name="escuela" required><br><br>
            
            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" required><br><br>
            
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>

</html>

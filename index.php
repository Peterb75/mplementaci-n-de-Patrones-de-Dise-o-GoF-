<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <title>Generador de Documentos</title>
</head>
<body>
    <h1>Generador de Documentos</h1>
    <form action="Functions/descargar.php" method="POST">
        <label for="tipo">Selecciona el tipo de documento:</label>
        <select name="tipo" id="tipo" required>
            <option value="word">Word</option>
            <option value="excel">Excel</option>
            <option value="pdf">PDF</option>
        </select>
        <button type="submit">Descargar</button>
    </form>
</body>
</html>

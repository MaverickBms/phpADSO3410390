<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario 1 - Registro Usuario</title>
</head>
<body>
    <main class="container">
        <form action="process.php" method="post">
            <h2>Registro Usuario</h2>
            <div class="campo">
                <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" id="txtNombre" required autocomplete="name">
            </div>
            <div class="campo">
                <label for="txtEmail">Email:</label>
                <input type="email" name="txtEmail" id="txtEmail" required autocomplete="email">
            </div>
            <div class="campo">
                <label for="txtTelefono">Teléfono:</label>
                <input type="tel" name="txtTelefono" id="txtTelefono" autocomplete="tel">
            </div>
            <button type="submit">Registrar</button>
        </form>
    </main>
</body>
</html>

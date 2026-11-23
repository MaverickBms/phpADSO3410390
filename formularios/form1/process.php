<?php
// Verificar que el formulario se envió por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Recibir datos del formulario
// Operador ternario
$nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";

// Operador nulo seguro (null coalescing)
$telefono = $_POST['txtTelefono'] ?? "";

// Email con operador ternario
$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";

// Sanitizar salida para evitar XSS
$nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
$email  = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$telefono = htmlspecialchars($telefono, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Datos del usuario</title>
</head>
<body>
    <main class="container">
        <h2>Datos del usuario</h2>
        <div class="campo">
            <label>Nombre: <?php echo $nombre; ?></label>
        </div>
        <div class="campo">
            <label>Email: <?php echo $email; ?></label>
        </div>
        <div class="campo">
            <label>Teléfono: <?php echo $telefono; ?></label>
        </div>
        <a href="index.php" class="btn-volver">Volver</a>
    </main>
</body>
</html>

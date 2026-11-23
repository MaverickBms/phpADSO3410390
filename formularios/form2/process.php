<?php
// Verificar que el formulario se envió por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Recibir datos del formulario con valor por defecto
$nombre = $_POST['txtNombre'] ?? "";
$email  = $_POST['txtEmail'] ?? "";
$telefono = $_POST['txtTelefono'] ?? "";
$ciudad = $_POST['txtCiudad'] ?? "";
$edad = $_POST['txtEdad'] ?? -1;

// Determinar mayoría de edad
if ($edad >= 18) {
    $msg = "Usted es Mayor de edad";
} elseif ($edad >= 0) {
    $msg = "Usted es Menor de edad";
} else {
    $msg = "Edad incorrecta";
}

// Sanitizar salida para evitar XSS
$nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
$email  = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$telefono = htmlspecialchars($telefono, ENT_QUOTES, 'UTF-8');
$ciudad = htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8');
$edad = htmlspecialchars($edad, ENT_QUOTES, 'UTF-8');
$msg = htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
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
        <div class="campo">
            <label>Edad: <?php echo $edad; ?></label>
        </div>
        <div class="campo">
            <label>Ciudad: <?php echo $ciudad; ?></label>
        </div>
        <div class="campo">
            <label>Mayoría Edad: <?php echo $msg; ?></label>
        </div>
        <a href="index.php" class="btn-volver">Volver</a>
    </main>
</body>
</html>

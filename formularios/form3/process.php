<?php
// Verificar que el formulario se envió por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Recibir datos del formulario con valor por defecto
$nombre = $_POST['txtNombre'] ?? "";
$tipoEstudio = $_POST['txtTipoEstudio'] ?? "";
$observaciones = $_POST['txtObservaciones'] ?? "";

// Procesar deportes (checkboxes)
$deportes = [];
if (!empty($_POST['txtBaloncesto'])) {
    $deportes[] = "Baloncesto";
}
if (!empty($_POST['txtFutbol'])) {
    $deportes[] = "Futbol";
}
if (!empty($_POST['txtTenis'])) {
    $deportes[] = "Tenis";
}
if (!empty($_POST['txtVoleibol'])) {
    $deportes[] = "Voleibol";
}
$msgDeportes = implode(",", $deportes);

// Sanitizar salida para evitar XSS
$nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
$tipoEstudio = htmlspecialchars($tipoEstudio, ENT_QUOTES, 'UTF-8');
$msgDeportes = htmlspecialchars($msgDeportes, ENT_QUOTES, 'UTF-8');
$observaciones = htmlspecialchars($observaciones, ENT_QUOTES, 'UTF-8');
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
            <label>Tipo de estudio: <?php echo $tipoEstudio; ?></label>
        </div>
        <div class="campo">
            <label>Deportes: <?php echo $msgDeportes; ?></label>
        </div>
        <div class="campo">
            <label>Observaciones de salud: <?php echo $observaciones; ?></label>
        </div>
        <a href="index.php" class="btn-volver">Volver</a>
    </main>
</body>
</html>

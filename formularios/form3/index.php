<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario 3 - Usuario</title>
</head>

<body>
    <main class="container">
        <form id="form1" action="process.php" method="post">
            <h2> Usuario </h2>
            <div class="campo">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="campo">
                <label for="txtTipoEstudio">Tipo de estudio</label>
                <div class="radio-group">
                    <input type="radio" name="txtTipoEstudio" value="Estudios Primarios" class="custom-radio">
                    <span>Estudios Primarios</span>
                </div>
                <div class="radio-group">
                    <input type="radio" name="txtTipoEstudio" value="Estudios Secundarios" class="custom-radio">
                    <span>Estudios Secundarios</span>
                </div>
                <div class="radio-group">
                    <input type="radio" name="txtTipoEstudio" value="Posgrado" class="custom-radio">
                    <span>Posgrado</span>
                </div>
                <div class="radio-group">
                    <input type="radio" name="txtTipoEstudio" value="No tiene estudios" class="custom-radio">
                    <span>No tiene estudios</span>
                </div>
            </div>
            <div class="campo">
                <label>¿Qué deportes practica?</label>
                <div class="check-container">
                    <div class="check-group">
                        <input type="checkbox" name="txtBaloncesto">
                        <span>Baloncesto</span>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="txtFutbol">
                        <span>Futbol</span>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="txtTenis">
                        <span>Tenis</span>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="txtVoleibol">
                        <span>Voleibol</span>
                    </div>
                </div>
            </div>
            <div class="campo">
                <label for="txtObservaciones">Observaciones de salud</label>
                <textarea name="txtObservaciones" id="txtObservaciones" rows="5"
                    placeholder="Ingrese sus observaciones de salud"></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>
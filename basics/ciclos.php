<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>
<body>
    <?php
    $limite = 50;
    // Ciclo For
    for ($i = 0; $i <= $limite; $i++) {
        # Impresión de los números del 0 al 50
        echo "Número: ".$i . "<br>";
    }

    // Ciclo While
    $limite = rand(50, 100);
    $inicio = 1;
    echo "<hr>";
    # Impresión de números del 1 al limite aleatorio (Entre 50 y 100)
    while ($inicio <= $limite) {
        echo "Número: ".$inicio . "<br>";
        $inicio++;
    }

    // Do While
    $dia = date('d');
    $inicio = rand (10,20);
    # Mostrar los números de un número random (entre 10 y 20) a la fecha actual.
    do {
        echo "[DO.WHILE] Número: $inicio";
        $inicio++;
    } while ($inicio <= $dia);

    echo "<hr>";
    # Mostrar la Tabla de multiplicar del 2
    # Utilizando un ciclo for, while y do while
    echo "<hr>";
    echo "<h3>Tabla del 2</h3>";

    # Ciclo For
    for ($i = 1; $i <= 10; $i++) {
        echo "2 x $i = " . (2 * $i) . "<br>";
    } 

    echo "<br>";

    # Ciclo While
    $i = 1;
    while ($i <= 10) {
        echo "2 x $i = " . (2 * $i) . "<br>";
        $i++;
    }

    echo "<br>";
    
    # Ciclo Do While
    $i = 1;
    do {
        echo "2 x $i = " . (2 * $i) . "<br>";
        $i++;
    } while ($i <= 10);
    ?>
</body>

</html>
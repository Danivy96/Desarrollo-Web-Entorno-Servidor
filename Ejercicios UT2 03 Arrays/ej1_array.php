<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Array</title>

</head>

<body>

    <?php

    $impar = array();
    $sumaImp = array();

    for ($cont = 0; $cont < 20; $cont++) {
        $impar[] = 2 * $cont + 1;
        $sumaImp[] = $sumaImp[$cont-1] + $impar[$cont];
    }
    var_dump($impar);
    var_dump($sumaImp);
    ?>
</body>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Array</title>

</head>

<body>
    <?php
    $decimales = array();
    $binarios = [];
    $octales = [];
    $hexadecimales = [];

    for ($cont = 0; $cont < 20; $cont++) {
        $decimales[] = $cont;
    }

    foreach ($decimales as $decimal) {
        $binarios[] = decbin($decimal);
        $octales[] = decoct($decimal);
        $hexadecimales[] = dechex($decimal);
    }

    var_dump($decimales);
    var_dump($binarios);
    var_dump($octales);
    var_dump($hexadecimales);

    ?>
</body>
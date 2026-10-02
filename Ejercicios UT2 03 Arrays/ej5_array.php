<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Array</title>

</head>

<body>
    <?php
    $primero = array(
        "Programación",
        "Bases de Datos",
        "Lenguajes de Marcas",
        "Sistemas informáticos"
    );
    $segundo = ["DWES", "DWEC", "Despliegue", "Diseño de Interfaces Web"];
    $optativas = ["Inglés Profesional", "Digitalización"];

    $totAsig = [];

    foreach ($primero as $array) {
        $totAsig[] = $array;
    }
    foreach ($segundo as $array) {
        $totAsig[] = $array;
    }
    foreach ($optativas as $array) {
        $totAsig[] = $array;
    }


    $mergeAsig = array_merge($primero, $segundo, $optativas);
    $mergeAsig[] = "Proyecto Intermodular";

    $existeAsig = in_array("DWES", $mergeAsig);
    $asigPos = array_search("DWES", $mergeAsig);

    $eliminarAsig = $mergeAsig;
    unset($eliminarAsig[$asigPos]); 

    $ordernarAsig = $mergeAsig;
    sort($ordernarAsig);
    
    
    var_dump($totAsig);
    var_dump($mergeAsig);
    var_dump($existeAsig);
    var_dump($asigPos);
    var_dump($eliminarAsig);
    var_dump($ordernarAsig);

    ?>
</body>
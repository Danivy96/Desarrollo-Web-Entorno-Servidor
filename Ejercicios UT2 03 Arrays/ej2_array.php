<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Array</title>

</head>

<body>

    <?php

    $temp = array(18, 21, 19, 24, 25, 22, 20, 26, 23, 21);
    $tempMed = (array_sum($temp) / count($temp));
    $difTemp = array();
    $tempMax = 0;
    $tempMin = 0;
    $diasEncMed = 0;

    for ($cont = 0; $cont < count($temp); $cont++) {
        if ($cont == 0) {
            $difTemp[$cont] = "-";
        } else {
            $difTemp[$cont] = $temp[$cont - 1] - $temp[$cont];
        }
        if ($temp[$cont] > $tempMed) {
            $diasEncMed++;
        }
    }
    $tempMax = array_search(max($temp), $temp);
    $tempMin = array_search(min($temp), $temp);


    var_dump($temp);
    var_dump($difTemp);
    var_dump($tempMed);
    var_dump($diasEncMed);
    var_dump($tempMax, $temp[$tempMax]);
    var_dump($tempMin, $temp[$tempMin]);
    ?>
</body>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Array</title>

</head>

<body>

    <?php

    $temp = array(18, 21, 19, 24, 25, 22, 20, 26, 23, 21);
    $difTemp = array();

    for ($cont = 0; $cont < count($temp); $cont++) {
        if ($cont == 0) {
            $difTemp[$cont]= "-";
        } else {
            $difTemp[$cont] = $temp[$cont - 1] - $temp[$cont]; 
        }

    }
    var_dump($temp);
    var_dump($difTemp);
    ?>
</body>
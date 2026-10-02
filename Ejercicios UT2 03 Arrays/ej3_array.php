<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Array</title>

</head>

<body>
    <?php
    $num_aleatorio = array();
    $sumaPar = 0;
    $sumaImp = 0;
    $mediaAmbos = 0;
    $valorMaxPar = 0;
    $valorMaxImpar = 0;
    $contPar = 0;
    $contImpar = 0;

    for ($cont = 0; $cont < 20; $cont++) {
        $num_aleatorio[] = rand(0, 100);

    }
    foreach ($num_aleatorio as $cont => $num) {
        if ($num % 2 == 0) {
            $sumaPar += $num;
            if ($valorMaxPar < $num) {
                $valorMaxPar = $num;
            }
            $contPar++;
        } elseif ($num % 2 != 0) {
            $sumaImp += $num;
            if ($valorMaxImpar < $num) {
                $valorMaxImpar = $num;
            }
            $contImpar++;
        }
    }

    $mediaAmbos = ($sumaPar + $sumaImp) / 2;

    var_dump($num_aleatorio);
    var_dump($sumaPar);
    var_dump($sumaImp);
    var_dump($mediaAmbos);
    var_dump($valorMaxPar);
    var_dump($valorMaxImpar);
    var_dump($contPar);
    var_dump($contImpar);
    ?>
</body>
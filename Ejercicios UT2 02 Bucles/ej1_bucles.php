<HTML>

<HEAD>
    <TITLE> EJ1 Bucles – Estadística secuencia </TITLE>
</HEAD>

<BODY>
    <?php
    $inicio = 1;
    $fin = 100;

    $numTot = 0;
    $numPares = 0;
    $numImpares = 0;
    $numMultTres = 0;
    $sumTot = 0;

    for ($cont = $inicio; $cont <= $fin; $cont++) {
        if ($cont % 2 == 0) {
            $numPares++;
        } else {
            $numImpares++;
        }
        if ($cont % 3 == 0) {
            $numMultTres++;
        }
        $sumTot += $cont;

    }


    echo ("Numeros del 1 al 100 <br>");
    echo ("Cantidad de números: " . $cont . "<br>");
    echo ("Números pares: " . $numPares . "<br>");
    echo ("Números impares: " . $numImpares . "<br>");
    echo ("Múltiplos de 3: " . $numMultTres . "<br>");
    echo ("Suma total: " . $sumTot . "<br>");
    ?>
</BODY>

</HTML>
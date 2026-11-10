<?php

//para general uma baraja
function crearBaraja()
{
    $palos = ["C", "D", "P", "T"];
    $figuras = ["A", "2", "3", "4", "5", "6", "7", "J", "Q", "K"];
    $baraja = [];

    foreach ($palos as $palo) {
        foreach ($figuras as $figura) {
            $baraja[] = ["palo" => $palo, "figura" => $figura, "valor" => valorC($figura)];
        }
    }
    shuffle($baraja);
    return $baraja;
}

//para poner los valorers a las cartas, 
function valorC($figura)
{
    if ($figura == 'A') {
        return 1;
    }
    if (in_array($figura, ['J', 'Q', 'K'])) {
        return 0.5;
    }
    return (int) $figura;
}

//reparte cartas
function repartirC(array $baraja, $numC)
{
    return array_slice($baraja, 0, $numC);
    
}

//resta el número de cartas repartidas de la baraja, para repartir luego al resto de jugadores
function restarC(array $baraja, $numC)
{
    return array_slice($baraja, $numC);
}

//para puntuar el resultado según el valor de la carta
function puntuacion(array $mano)
{
    return array_sum(array_column($mano, "valor"));
}
?>
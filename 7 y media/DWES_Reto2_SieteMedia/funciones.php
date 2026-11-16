<?php

//para generar una baraja
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
    shuffle($baraja); //mezcla la baraja generada, igual que el bombo
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
//suma las posiciones del array
function puntuacion(array $mano)
{
    return array_sum(array_column($mano, "valor"));
}

//separa el nombre y apellido en dos posiciones de array
//luego resta todo menos la primera letra de cada posición
//lo cambia a mayúsculas
function iniciales($nombre)
{
    $iniciales = "";
    foreach (explode(" ", $nombre) as $palabra) {
        $iniciales .= strtoupper(substr($palabra, 0, 1));
    }
    return $iniciales;
}

function jugadoresValidos(array $puntuaciones)
{
    $validos = [];
    foreach ($puntuaciones as $cont => $puntos) {
        if ($puntos <= 7.5) {
            $validos[] = $cont;
        }
    }
    return $validos;
}


function ganadoresPorPuntos(array $puntuaciones, array $validos)
{
    $mejor = -1;
    foreach ($validos as $cont) {
        if ($puntuaciones[$cont > $mejor]) {
            $mejor = $puntuaciones[$cont];
        }
    }
    return $mejor;
    /* 
    $ganadorLegible=[];
     foreach($puntuaciones as $cont => $puntos){
         if($puntos <=7.5){
             $ganadorLegible[] = $cont;
         }
     }
     return $ganadorLegible;

    //alternativa, cogo la posición (key) de los que están <= 7.5
    $jugadorLegible = array_keys(array_filter($puntuaciones, fn($posicion) => $posicion <= 7.5));
    return $jugadorLegible;
    */
}

function ganadores(array $puntuaciones, array $validos, $mejor)
{
    $ganadores = [];
    foreach ($validos as $cont) {
        if ($puntuaciones[$cont] == $mejor) {
            $ganadores[] = $cont;
        }
    }
    return $ganadores;
}

function nombresConPuntos(array $posiciones, array $jugadores, array $puntuaciones)
{
    $texto = [];
    foreach ($posiciones as $cont) {
        $texto[] = $jugadores[$cont] . " : " . $puntuaciones[$cont];
    }
    return $texto;
}
?>
<?php
$operando1 = $_POST['operando1'];
echo $operando1, "<br>";

$operando2 = $_POST['operando2'];
echo $operando2, "<br>";

$operacion = $_POST['operacion'];

function sumar($operando1, $operando2)
{
    return $operando1 + $operando2;
}

function restar($operando1, $operando2)
{
    return $operando1 - $operando2;
}

function operar($operando1, $operando2)
{
    return $operando1 * $operando2;
}

function dividir($operando1, $operando2)
{
    return $operando1 / $operando2;
}

echo "El resultado es: <br>";
switch ($operacion) {
    case "suma":
        $resultado = sumar($operando1, $operando2);
        echo $operando1, " + ", $operando2, " = ", $resultado;
        break;

    case "resta":
        $resultado = restar($operando1, $operando2);
        echo $operando1, " - ", $operando2, " = ", $resultado;
        break;

    case "prod":
        $resultado = operar($operando1, $operando2);
        echo $operando1, " X ", $operando2, " = ", $resultado;
        break;

    case "div":
        $resultado = dividir($operando1, $operando2);
        echo $operando1, " / ", $operando2, " = ", $resultado;
        break;
}
?>
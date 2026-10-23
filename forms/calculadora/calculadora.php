<?php
include "funciones.php";

$operando1 = $_POST['operando1'];

$operando2 = $_POST['operando2'];

$operacion = $_POST['operacion'];



switch ($operacion) {
    case "suma":
        $resultado = sumar($operando1, $operando2);
        $simbolo = "+";
        break;

    case "resta":
        $resultado = restar($operando1, $operando2);
        $simbolo = "-";
        break;

    case "prod":
        $resultado = operar($operando1, $operando2);
        $simbolo = "*";
        break;

    case "div":
        $resultado = dividir($operando1, $operando2);
        $simbolo = "/";
        break;
}

echo $operando1, "<br>";
echo $operando2, "<br>";
echo "El resultado es: <br>";
echo $operando1, " " , $simbolo , " " , $operando2 , " = ", $resultado;

?>
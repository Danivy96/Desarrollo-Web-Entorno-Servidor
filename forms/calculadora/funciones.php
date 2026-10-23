<?php
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

function validacion($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
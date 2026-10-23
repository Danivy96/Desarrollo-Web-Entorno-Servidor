<?php
include 'funciones.php';
?>
<HTML>

<HEAD>
    <TITLE> CALCULADORA </TITLE>
</HEAD>

<BODY>

    <form name='calculadora' action=<?php echo $_SERVER["PHP_SELF"]; ?> method='post'>

        Operando 1:
        <input type='text' name='operando1' value='' size=15><br>

        Operando 2:
        <input type='text' name='operando2' value='' size=15><br>

        Selecciona operacion:<BR>
        <input type='radio' name='operacion' value='suma'>Suma<br>
        <input type='radio' name='operacion' value='resta'>Resta<br>
        <input type='radio' name='operacion' value='prod'>Producto<br>
        <input type='radio' checked name='operacion' value='div'>Division<br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </FORM>
</BODY>

</HTML>

<?php
//Solo ejecutar si pulsamos SUBMIT
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "El method que ha usado es: ", $_SERVER['REQUEST_METHOD'], "<br>";
    echo "Nombre programa:", $_SERVER["PHP_SELF"], "<br>";

    $operando1 = validacion($_POST['operando1']);
    $operando2 = validacion($_POST['operando2']);
    $operacion = validacion($_POST['operacion']);

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
    echo $operando1, " ", $simbolo, " ", $operando2, " = ", $resultado;
}
?>
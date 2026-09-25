<HTML>

<HEAD>
    <TITLE> EJ3 Bucles – Tablas multiplicar </TITLE>
    </form>
</HEAD>

<BODY>
    <?php
    $num1 = 3;
    $num2 = 7;

    for ($tabla = $num1; $tabla <= $num2; $tabla++) {
        echo ("<h4>TABLA DE $tabla</h4>");
        echo ("<table border='1' style='text-align: center; border-collapse: collapse;'>");
        echo ("<tr><th>Operación</th><th>Resultado</th></tr>");

        for ($cont = 1; $cont <= 10; $cont++) {
            $operacion = $cont * $tabla;
            echo ("<tr>");
            echo ("<td>$cont  X   $tabla</td>");
            echo ("<td> $operacion</td>");
            echo ("</tr>");
        }
    }




    ?>
</BODY>
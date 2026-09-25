<HTML>

<HEAD>
    <TITLE> EJ2 Bucles – Tabla multiplicar </TITLE>
    
</HEAD>

<BODY>
    <?php
    $num = 8;
    $operacion = 0;

    echo("<table border='1' style='text-align: center; border-collapse: collapse;'>");
    echo("<tr><th>Operación</th><th>Resultado</th></tr>"); 

    for ($cont = 1; $cont <= $num; $cont++) {
        $operacion = $cont * $num;
        echo("<tr>");
        echo ("<td>$cont  X   $num</td>");
        echo ("<td> $operacion</td>");
        echo ("</tr>");
    }
    ?>
</BODY>

</HTML>
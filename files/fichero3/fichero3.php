<?php
include 'funciones.php';
?>
<HTML>

<HEAD>
    <TITLE>FICHERO 3 - ALUMNOS</TITLE>
</HEAD>

<BODY>

    <form name='alumnos' action=<?php echo $_SERVER["PHP_SELF"]; ?> method='post'>
        <input type="submit" value="Mostrar datos del fichero alumnos1.txt">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $alumnos = leer_alumnos_fich();

        echo "<h2>Listado de alumnos</h2>";
        echo "<TABLE border='1'>";
        echo "<TR>";
        echo "<TH>Nombre</TH>";
        echo "<TH>Apellido 1</TH>";
        echo "<TH>Apellido 2</TH>";
        echo "<TH>Fecha nacimiento</TH>";
        echo "<TH>Localidad</TH>";
        echo "</TR>";

        foreach ($alumnos as $alumno) {
            echo "<TR>";
            foreach ($alumno as $casilla) {
                if ($casilla == "") {
                    $casilla = "-";
                }
                echo "<TD>" . $casilla . "</TD>";
            }
            echo "</TR>";
        }

        echo "</TABLE>";

        echo "Filas leídas del fichero: " . count($alumnos) . "<br>";
    }
    ?>

</BODY>

</HTML>
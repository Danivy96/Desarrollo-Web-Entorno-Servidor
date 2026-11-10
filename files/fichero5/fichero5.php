<?php
include '../fichero1/funciones.php'; ?>

<HTML>

<HEAD>
    <meta charset="UTF-8">
    <TITLE>FICHERO 5 - OPERACIONES CON FICHEROS</TITLE>
</HEAD>

<BODY>
    <?php

    $fichero = "";
    $operacion = "fichero";
    $linea = 1;
    $n = 5;
    $error = "";
    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fichero = trim($_POST['fichero'] ?? "");
        $operacion = $_POST['operacion'] ?? "fichero";
        $linea = (int) ($_POST['linea'] ?? 1);
        $n = (int) ($_POST['n'] ?? 5);

        if ($fichero === "") {
            $error = "Debes indicar la ruta del fichero.";
        } elseif (!is_file($fichero)) {
            $error = "El fichero '" . htmlspecialchars($fichero) . "' no existe.";
        } elseif (!is_readable($fichero)) {
            $error = "El fichero no se puede leer.";
        } else {
            switch ($operacion) {
                case "fichero":
                    $resultado = mostrar_fichero($fichero);
                    break;
                case "linea":
                    $resultado = mostrar_linea($fichero, $linea);
                    if ($resultado === null) {
                        $error = "La línea $linea no existe en el fichero.";
                    }
                    break;
                case "n_lineas":
                    $resultado = mostrar_n_lineas($fichero, $n);
                    break;
            }
        }
    }

    if ($resultado !== null) {
        echo "<h2>Contenido del fichero</h2>";
        foreach ($resultado as $informacion => $texto) {
            $num = ($operacion == "linea") ? $linea : $informacion + 1;
            echo "Línea $num: " . htmlspecialchars($texto) . "<br>";
        }
    }
    ?>
    <form name="operaciones" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Fichero (Ruta/nombre): *</label><br>
        <input type="text" name="fichero" size="40" value="<?php echo htmlspecialchars($fichero); ?>" required>
        <br><br>

        Operaciones:<br>
        <input type="radio" name="operacion" value="fichero" <?php echo $operacion == "fichero" ? "checked" : ""; ?>>
        Mostrar fichero<br>

        <input type="radio" name="operacion" value="linea" <?php echo $operacion == "linea" ? "checked" : ""; ?>> Mostrar
        línea
        <input type="number" name="linea" min="1" value="<?php echo $linea; ?>"><br>

        <input type="radio" name="operacion" value="n_lineas" <?php echo $operacion == "n_lineas" ? "checked" : ""; ?>>
        Mostrar N primeras líneas
        <input type="number" name="n" min="1" value="<?php echo $n; ?>"><br><br>

        <input type="submit" value="Ejecutar operación">
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><button type="button">Borrar</button></a>
    </form>



</BODY>

</HTML>
<?php
function agregar_alumno_delim($nombre, $apellido1, $apellido2, $fecnac, $localidad)
{
    $fichero = "alumnos2.txt";

    $linea = $nombre . "##" . $apellido1 . "##" . $apellido2 . "##" . $fecnac . "##" . $localidad . PHP_EOL;

    $file = fopen($fichero, "a");
    //a de append
    fwrite($file, $linea);
    fclose($file);

    //Otra alternativa, con una sola linea
    //file_put_contents("alumnos2.txt", $linea, FILE_APPEND);
    //por si acaso un append para no borrar las lineas, yt que escriba en la siguiente linea dejando intacto la anterior
}

function agregar_alumno_fich($nombre, $apellido1, $apellido2, $fecnac, $localidad)
{
    $f_nombre = str_pad($nombre, 40, " ", STR_PAD_RIGHT);
    $f_apellido1 = str_pad($apellido1, 41, " ", STR_PAD_RIGHT);
    $f_apellido2 = str_pad($apellido2, 42, " ", STR_PAD_RIGHT);
    $f_fecnac = str_pad($fecnac, 10, " ", STR_PAD_RIGHT);
    $f_localidad = str_pad($localidad, 27, " ", STR_PAD_RIGHT);

    $linea = $f_nombre . $f_apellido1 . $f_apellido2 . $f_fecnac . $f_localidad . "\n";

    $file = fopen("alumnos1.txt", "a");
    //a de append
    fwrite($file, $linea);
    fclose($file);

    //Otra alternativa, con una sola linea
    //file_put_contents("alumnos1.txt", $linea, FILE_APPEND);
    //por si acaso un append para no borrar las lineas, yt que escriba en la siguiente linea dejando intacto la anterior
}


function leer_alumnos_fich()
{
    $alumnos = array();
    $fichero = "../fichero1/alumnos1.txt";

    $file = fopen($fichero, "r");
    while (($linea = fgets($file)) !== false) {
        $linea = rtrim($linea, "\r\n");

        if ($linea == "") {
            continue;
        }
        $alumno = array(
            trim(substr($linea, 0, 40)),
            trim(substr($linea, 40, 41)),
            trim(substr($linea, 81, 42)),
            trim(substr($linea, 123, 10)),
            trim(substr($linea, 133, 27))
        );
        $alumnos[] = $alumno;
    }
    fclose($file);

    return $alumnos;
}

function validacion($dato)
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
?>
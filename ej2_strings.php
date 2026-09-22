<HTML>

<HEAD>
    <TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE>
</HEAD>

<BODY>
    <?php
    $nombre = " aLBeRTo gaRCia loPEz <br>";
    echo "Cadena original: " . $nombre;

    $nombreMin = strtolower($nombre);
    echo "Nombre normalizado: " . ucwords($nombreMin);

    $nombreNoEspacios = str_replace(" ", "", $nombre);
    echo "Número de carácteres: " . strlen($nombreNoEspacios) . "<br>";

    $nombreArray = explode(" ", $nombreMin);
    echo "Nombre: " . ucwords($nombreArray[1]) . "<br>";
    echo "Primer apellido: " . ucwords($nombreArray[2]) . "<br>";
    echo "Segundo apellido: " . ucwords($nombreArray[3]) . "<br>";

    echo "Iniciales: " . ucwords(substr($nombreArray[1], 0, 1)) . "." . ucwords(substr($nombreArray[2], 0, 1)) . "." . ucwords(substr($nombreArray[3], 0, 1)) . ". <br>";

    echo "Nombre de usuario: " . $nombreArray[1] . "." . $nombreArray[2];

    ?>
</BODY>

</HTML>
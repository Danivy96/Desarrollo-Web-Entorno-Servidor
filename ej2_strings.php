<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
<?php
 $nombre = " aLBeRTo gaRCia loPEz ";
 echo "Cadena original: " .$nombre;

 $nombreMin = strtolower($nombre);
 echo "Nombre normalizado: " .ucwords($nombreMin);

 $nombreNoEspacios = str_replace(" ", "",$nombre);
 echo "Número de carácteres: " .strlen($nombreNoEspacios)
?>
</BODY>
</HTML>
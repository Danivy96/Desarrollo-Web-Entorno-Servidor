<HTML>

<HEAD>
    <TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE>
</HEAD>

<BODY>
    <?php
    $titulo = "Introducción a la Programación Web con PHP";

    $tituloMinusculas = strtolower($titulo);
    $tituloGuiones = str_replace(" ", "-", $tituloMinusculas);
    $tituloRefinado = str_replace("ó","o", $tituloGuiones);

    print ("http://" .$tituloRefinado);

    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE>
</HEAD>

<BODY>
    <?php
    $email = "alberto.garcia@educa.madrid.org";

    $posArroba = strpos($email, "@");
    $tieneArroba = $posArroba == true;
    $terminaEnOrg = str_ends_with($email, ".org");

    $emailArray = explode("@", $email);
    $usuario = $emailArray[0];
    $dominio = $emailArray[1];
    $dominioArray = explode(".", $dominio);
    $usuarioLength = strlen($usuario);
    $dominioLength = strlen($dominio);

    echo "Email: " . $email . "<br>";
    echo "Usuario: " . $usuario . "<br>";
    echo "Dominio: " . $dominio . "<br>";
    echo "Organización: " . $dominioArray[0] . "<br>";
    echo "Extensión: " . $dominioArray[2] . "<br>";

    echo "<br>";

    echo "El usuario contiene " . $usuarioLength . " caracteres <br>";
    echo "El dominio contiene " . $dominioLength . " caracteres <br>";


    if ($tieneArroba) {
        echo "El email contiene el arroba <br>";
    } else {
        echo "El email NO contiene el arroba <br>";
    }

    if ($terminaEnOrg) {
        echo " El dominio temina en .org <br>";
    } else {
        echo "El dominio NO termina en .org <br>";
    }
    ?>
</BODY>

</HTML>
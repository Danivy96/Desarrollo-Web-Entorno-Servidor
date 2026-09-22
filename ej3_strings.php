<HTML>

<HEAD>
    <TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE>
</HEAD>

<BODY>
    <?php
    $email = "alberto.garcia@educa.madrid.org";
    echo "Email: " . $email . "<br>";

    $posArroba = strpos($email, "@");
    $tieneArroba = $posArroba == true;
    $terminaEnOrg = str_ends_with($email, ".org");


    $emailArray = explode("@", $email);
    $usuario = $emailArray[0];
    echo "Usuario: " . $usuario . "<br>";

    $dominio = $emailArray[1];
    echo "Dominio: " . $dominio . "<br>";

    $dominioArray = explode(".", $dominio);
    echo "Organización: " . $dominioArray[0] . "<br>";
    echo "Extensión: " . $dominioArray[2] . "<br>";
    echo "<br>";

    $usuarioLength = strlen($usuario);
    $dominioLength = strlen($dominio);

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
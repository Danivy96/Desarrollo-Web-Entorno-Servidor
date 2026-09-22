<HTML>
<HEAD><TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE></HEAD>
<BODY>
<?php
 $email = "alberto.garcia@educa.madrid.org";
 echo "Email: " .$email."<br>";

 $posArroba = strpos($email,"@");
 $tieneArroba = $posArroba == true;

 $emailArray = explode("@", $email);
 $usuario = $emailArray[0];
 echo "Usuario: " .$usuario ."<br>";

 $dominio = $emailArray[1];
 echo "Dominio: ". $dominio ."<br>";
 
$dominioArray = explode(".", $dominio);
echo "Organización: " .$dominioArray[0] ."<br>";
echo "Extensión: " .$dominioArray[2] ."<br>";
?>
</BODY>
</HTML>
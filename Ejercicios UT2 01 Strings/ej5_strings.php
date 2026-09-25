<HTML>
<HEAD><TITLE> EJ5 Strings - Procesamiento de una URL </TITLE></HEAD>
<BODY>
<?php
 $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";

 $posHttp = strpos($url,"w");
 $sinHttp = substr($url,0, $posHttp);
?>
</BODY>
</HTML>
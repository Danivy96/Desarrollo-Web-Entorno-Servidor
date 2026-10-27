<?php
include 'funciones.php';
?>
<HTML>
<HEAD>
<TITLE>FICHERO 1 - ALUMNOS</TITLE>
</HEAD>
<BODY>

<form name='alumnos' action=<?php echo $_SERVER["PHP_SELF"]; ?> method='post'>
    Nombre:<BR>
    <input type='text' name='nombre' value='' size=40><BR>
    Apellido 1:<BR>
    <input type='text' name='apellido1' value='' size=41><BR>
    Apellido 2:<BR>
    <input type='text' name='apellido2' value='' size=42><BR>
    Fecha nacimiento:<BR>
    <input type='text' name='fecnac' value='' size=10><BR>
    Localidad:<BR>
    <input type='text' name='localidad' value='' size=25><BR><BR>

    <input type="submit" value="Guardar alumno">
    <input type="reset" value="Limpiar">
</FORM>
</BODY>
</HTML>

<?php
    $nombre = validacion($_POST['nombre']);
    $apellido1 = validacion($_POST['apellido1']);
    $apellido2 = validacion($_POST['apellido2']);
    $fecha = validacion($_POST['fecnac']);
    $localidad = validacion($_POST['localidad']);

    // Guardar en el fichero alumnos1.txt con campos de longitud fija
    agregar_alumno_fich($nombre, $apellido1, $apellido2, $fecnac, $localidad);

    echo "Alumno añadido a alumnos1.txt<br>";

?>
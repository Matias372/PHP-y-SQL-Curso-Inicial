<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$mail_form = $_POST['mail'];
$mensaje_form = $_POST['mensaje'];

//conexion con base de datos
//Q0M13rd75$48
$conexion = mysqli_connect("localhost", "id19946173_cursosqlphp", "Q0M13rd75$48", "id19946173_php_inicial_022") or exit ("no se pudo conectar a la base de datos");

mysqli_query($conexion , "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$mail_form', '$mensaje_form')");

mysqli_close($conexion);


header ("Location: contacto.php?ok");




?>
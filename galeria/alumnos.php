<?php

$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$query = $conexion->query("SELECT * FROM usuarios WHERE TRIM(contacto) <> '' AND TRIM(descripcion) <> '' AND TRIM(direccion_imagen) <> '';");

$registros=$query->fetch_object();


?>
<?php

$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$query = $conexion->query("SELECT * FROM empleos WHERE TRIM(archivo) <> '';");

$registros=$query->fetch_object();
?>
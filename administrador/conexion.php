<?php

$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);
$conexion->set_charset("utf8");

?>
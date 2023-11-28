<?php

$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$query=$conexion->query("SELECT * FROM eventos WHERE inicio >= now()");

$registros=$query->fetch_object();


?>
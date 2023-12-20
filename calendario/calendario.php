<?php
//Selecciona los eventos el cual la fecha de inicio sea mayor que la fecha actual(para que sea un evento futuro)
$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$query=$conexion->query("SELECT * FROM eventos WHERE inicio >= now()");

$registros=$query->fetch_object();


?>
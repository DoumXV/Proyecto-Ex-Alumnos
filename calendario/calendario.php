<?php

$server="localhost";
$user="root";
$password="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$query="SELECT * FROM eventos WHERE inicio >= now()";

$registros=$query->fetch_object();


?>
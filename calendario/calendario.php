<?php

$server="localhost";
$user="root";
$password="maglio100";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$query="SELECT * FROM eventos WHERE inicio >= now()";

if($sql){
   
}else{
    echo "ha ocurrido un error con la consulta";
}


?>
<?php

include '../administrador/conexion.php';
$sql=$conexion->query("DELETE FROM eventos where final < now();");
if($sql){
    header('location:tabla-eventos.php');
}else{
    
    header('location:tabla-eventos.php');
}



?>
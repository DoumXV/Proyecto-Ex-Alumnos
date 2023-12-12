<?php

include '../administrador/conexion.php';
$id=$_GET['id'];
$sql=$conexion->query("DELETE FROM eventos WHERE id_evento=$id");
if($sql){
    header('location:tabla-eventos.php');
}else{
    header('location:tabla-eventos.php');
}

?>
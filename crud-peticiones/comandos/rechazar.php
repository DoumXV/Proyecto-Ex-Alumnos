<?php

$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$id = isset($_GET['id']) ? $_GET['id'] : null;

if(!empty($id)){
    $sql=$conexion->query("SELECT * FROM peticiones WHERE id_peticion=$id");
    if($sql){
    $sql2=$conexion->query("DELETE FROM peticiones WHERE id_peticion=$id");
    if($sql2){
        header('location:../crud-peticiones.php');
    }else{
        header('location:../crud-peticiones.php');
    }
    }
}

?>
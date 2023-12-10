<?php

#include '../../administrador/conexion.php';

$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$id = isset($_GET['id']) ? $_GET['id'] : null;

if(!empty($id)){
    $sql=$conexion->query("SELECT * FROM peticiones WHERE id_peticion=$id");
    if($sql){
    $datos=$sql->fetch_object();
    $sql1=$conexion->query("UPDATE usuarios SET direccion_imagen='$datos->direccion_imagen' ,contacto='$datos->contacto_peticion',descripcion='$datos->descripcion_peticion' WHERE email_usuario='$datos->email_peticion'");
    $sql2=$conexion->query("DELETE FROM peticiones WHERE id_peticion=$id");
    if($sql1 and $sql2){
        echo "<div class='alert alert-info'>Se ha completado con exito su confirmacion.</div>";
        header('location:../gestion-evento.php');
    }else{
        echo "<div class='alert alert-info'>No se pudo completar la peticion,revise que el email enviado exista en los usuarios.</div>";
        header('location:../gestion-evento.php');
    }
    }
}


?>
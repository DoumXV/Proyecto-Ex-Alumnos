<?php
//fichero.php para aceptar las peticiones la cual las elimina de la tabla peticiones y actualiza la tabla alumnos

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
    $sql1=$conexion->query("UPDATE alumnos SET direccion_imagen='$datos->direccion_imagen' ,contacto='$datos->contacto_peticion',descripcion='$datos->descripcion_peticion',area_interes='$datos->area_interes',trabajo_actual='$datos->trabajo_actual' WHERE email_usuario='$datos->email_peticion'");
    $sql2=$conexion->query("DELETE FROM peticiones WHERE id_peticion=$id");
    if($sql1 and $sql2){
        
        header("Location:../crud-peticiones.php?confirmacion=2");
    }else{
       
        header("Location:../crud-peticiones.php?confirmacion=3");
    }
    }
}


?>
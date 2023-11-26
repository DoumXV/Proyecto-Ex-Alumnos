<?php

$server="localhost";
$user="root";
$password="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$nombre=$_POST['nombre_peticion'];
$email=$_POST['email_peticion'];
$contacto=$_POST['contacto_peticion'];
$descripcion=$_POST['descripcion_peticion'];

if (!empty($nombre) and !empty($email) and !empty($contacto) and !empty($descripcion)) {
    $sql1=$conexion->query("SELECT * FROM usuarios WHERE email_usuario='$email'");
    if($sql1){
        $sql2=$conexion->query("INSERT INTO peticiones (nombre_peticion,email_peticion,contacto_peticion,descripcion_peticion) VALUES ('$nombre','$email','$contacto','$descripcion')");
        if($sql2){
            echo "Solicitud enviada, su revision esta en proceso.";
        }
    }
} else {
    echo "No se pueden ingresar campos vacios";
}


?>
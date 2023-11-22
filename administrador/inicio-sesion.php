<?php
$server="localhost";
$user="root";
$password="maglio100";
$db="herramientas-desarrollo2";

$conexion = new mysqli($server,$user,$pass,$db);

if($conexion){
    echo "conexion exitosa";
}

if(isset($_POST['boton_enviar'])){
    if (!empty($_POST['email_admin']) and !empty($_POST['clave_admin'])) {
        $email=$_POST['email_admin'];
        $clave=$_POST['clave_admin'];
        echo $email.$clave;

    }
    else{
        echo "No se pueden ingresar campos vacios";
    }


        
    
}


?>
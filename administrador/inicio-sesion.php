<?php
session_start();

$server="localhost";
$user="root";
$password="maglio100";
$db="herramientas-desarrollo2";

$conexion = new mysqli($server,$user,$pass,$db);


if(isset($_POST['boton_enviar'])){
    if (!empty($_POST['email_admin']) and !empty($_POST['clave_admin'])) {
        $email=$_POST['email_admin'];
        $clave=$_POST['clave_admin'];
        $sql=$conexion->query("SELECT * FROM administrador WHERE email_admin='$email' AND clave_admin='$clave'");
        #$sql=$conexion->query("SELECT * FROM `administrador` WHERE email_admin=\'maglio@gmail.com\' AND clave_admin=\'maglio\'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION['email_admin']=$datos->email_admin;
            $_SESSION['clave_admin']=$datos->clave_admin;
            $_SESSION['nombre_admin']=$datos->nombre_admin;
            #header();
        } else {
            echo "Datos incorrectos";
        }
        
    }
    else{
        echo "No se pueden ingresar campos vacios";
    }
    #para las otras paginas es esta validacion
    #<?php
    #session_start();
    #if(empty($_SESSION['email_admin'])){ header(); }  
    
}


?>
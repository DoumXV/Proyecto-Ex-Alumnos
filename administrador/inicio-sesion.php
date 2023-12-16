<?php
session_start();
$server="localhost";
$user="root";
$password="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$password,$db);

if(!empty($_POST["boton_enviar"])){
    if (!empty($_POST['email_admin']) and !empty($_POST['clave_admin'])) {
        $email=$_POST['email_admin'];
        $clave_hash=md5($_POST['clave_admin']);
        $sql=$conexion->query("SELECT * FROM administrador WHERE email_admin='$email' AND clave_admin='$clave_hash'");
        
        #$sql=$conexion->query("SELECT * FROM `administrador` WHERE email_admin=\'maglio@gmail.com\' AND clave_admin=\'maglio\'");
        #echo "$email"."$clave";
        

        if ($datos=$sql->fetch_object()) {
            $_SESSION['email_admin']=$datos->email_admin;
            $_SESSION['clave_admin']=$datos->clave_admin;
            $_SESSION['nombre_admin']=$datos->nombre_admin;
            echo "<div class='alert alert-info text-center'>Sesion Iniciada Correctamente.</div>";
            header("Location:../panel-admin/panel-admin.php");
        } else {
            echo "<div class='alert alert-warning text-center'>Datos Incorrectos.</div>";
        }
        
    }
    else{
        echo "<div class='alert alert-warning text-center'>No se pueden ingresar campos vacios.</div>";
    }
    #para las otras paginas es esta validacion
    #<?php
    #session_start();
    #if(empty($_SESSION['email_admin'])){ header("Location:"); }  
    #
}


?>
<?php
session_start();
if(isset($_POST['boton_enviar'])){
    if (!empty($_POST['email_admin']) and !empty($_POST['clave_admin'])) {
        $email=$_POST['email_admin'];
        $clave=$_POST['clave_admin'];
        $sql=$conexion->query(" select * from admin where email_admin='$email' and clave_admin='$clave'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION=$datos["nombre_admin"];
            $_SESSION=$datos["email_admin"];
            $_SESSION=$datos["clave_admin"];
            header("Location:gestion.php");
        } else {
            echo "Datos incorrectos";
        }
        
    } else {
        echo "No se pueden dejar campos vacios";
    }
    
}

?>
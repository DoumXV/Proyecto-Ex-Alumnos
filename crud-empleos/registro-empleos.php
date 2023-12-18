<?php
include "../administrador/conexion.php";
if(!empty($_POST["btnregistrar"])){
        $titulo=$_POST["titulo"];
        $empresa=$_POST["empresa"];
        $ciudad=$_POST["ciudad"];
        $descripcion=$_POST["descripcion"];
        $sueldo=$_POST["sueldo"];

        $nombre_archivo=$_FILES['archivo']['name'];
        $ruta_archivo=$_FILES['archivo']['tmp_name'];
        $ruta_guardado="../archivos-empleos/".$nombre_archivo;


        if (
            !preg_match('/^[a-zA-Z\s]+$/', $ciudad)
        ) {
            echo "<div class='alert alert-warning'>La ciudad debe contener solo letras.</div>";
        }elseif(
            preg_match('/^\d+$/', $sueldo);
        ){
            echo "<div class='alert alert-warning'>El sueldo debe contener solo numeros.</div>";
        }else{ 

    if(!empty($_POST["titulo"]) and !empty($_POST["empresa"]) and !empty($_POST["ciudad"]) and !empty($_POST["descripcion"]) and !empty($_POST["sueldo"]) and !empty($nombre_archivo)){
        

        move_uploaded_file($ruta_archivo,$ruta_guardado);
        $sql=$conexion->query("INSERT INTO empleos (titulo,empresa,ciudad,descripcion,archivo,sueldo)VALUES('$titulo','$empresa','$ciudad','$descripcion','$ruta_guardado','$sueldo')");
        if ($sql==1) {
            header("location:crud-empleos.php?confirmacion=5");
            
        } else {
            header("location:crud-empleos.php?confirmacion=3");
        }
        
    }else{
        header("location:crud-empleos.php?confirmacion=4");
    }

}
}
?>
<?php
include "../administrador/conexion.php";
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["titulo"]) and !empty($_POST["empresa"]) and !empty($_POST["ciudad"]) and !empty($_POST["descripcion"]) and !empty($_POST["archivo"])){
        $titulo=$_POST["titulo"];
        $empresa=$_POST["empresa"];
        $ciudad=$_POST["ciudad"];
        $descripcion=$_POST["descripcion"];

        $nombre_archivo=$_FILES['archivo']['name'];
        $ruta_archivo=$_FILES['archivo']['tmp_name'];
        $ruta_guardado="../archivos-empleos/".$nombre_archivo;

        move_uploaded_file($ruta_archivo,$ruta_guardado);
        $sql=$conexion->query("INSERT INTO empleos (titulo,empresa,ciudad,descripcion,archivo)VALUES('$titulo','$empresa','$ciudad','$descripcion','$ruta_guardado')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Empleo registrado correctamente</div>';
            
        } else {
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }

}
?>
<?php
//fichero.php para registrar un empleo con sus datos validados
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

        $errores = array();

        if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜ,.\s]+$/', $ciudad)){
            $errores[] = "La ciudad debe contener solo letras.";
        }
        if (!preg_match('/^\d{1,3}(?:\.\d{3})*(?:,\d+)?$/', $sueldo)){
            $errores[] = "Ingrese un sueldo valido.";
        }

    
    // Mostrar errores
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<div class='alert alert-warning'>$error</div>";
        }
    } else {
        // Continuar con la inserción
        if(!empty($_POST["titulo"]) and !empty($_POST["empresa"]) and !empty($_POST["ciudad"]) and !empty($_POST["descripcion"]) and !empty($_POST["sueldo"]) and !empty($nombre_archivo)){
            if (is_uploaded_file($ruta_archivo)){
                move_uploaded_file($ruta_archivo,$ruta_guardado);
                $sql=$conexion->query("INSERT INTO empleos (titulo,empresa,ciudad,descripcion,archivo,sueldo)VALUES('$titulo','$empresa','$ciudad','$descripcion','$ruta_guardado','$sueldo')");
                if ($sql==1) {
                    header("location:crud-empleos.php?confirmacion=5");
                    
                } else {
                    header("location:crud-empleos.php?confirmacion=3");
                }
            }else {
                header("location:crud-empleos.php?confirmacion=6");
            }
        
    }else{
        header("location:crud-empleos.php?confirmacion=4");
    }
 }
}
?>
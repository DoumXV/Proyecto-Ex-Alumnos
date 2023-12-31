<?php
//fichero.php para modificar un empleo con todas sus validaciones
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }
?>
<?php
if(!empty($_POST["btnmodificar"])){
        $id_empleo=$_POST["id_empleo"];
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
        if(!empty($_POST["titulo"]) and !empty($_POST["empresa"]) and !empty($_POST["ciudad"]) and !empty($_POST["descripcion"]) and !empty($_POST["sueldo"]) and !empty($nombre_archivo)){
        if (is_uploaded_file($ruta_archivo)) {
            move_uploaded_file($ruta_archivo,$ruta_guardado);
            $sql=$conexion->query("UPDATE empleos SET titulo='$titulo',empresa='$empresa',ciudad='$ciudad',descripcion='$descripcion',sueldo='$sueldo',archivo='$ruta_guardado' WHERE id_empleo='$id_empleo'");
            if ($sql==1) {
                header("location:crud-empleos.php?confirmacion=2");
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
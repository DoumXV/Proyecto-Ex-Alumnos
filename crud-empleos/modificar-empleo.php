<?php
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
        #ver como modificar archivos
        move_uploaded_file($ruta_archivo,$ruta_guardado);
        $sql=$conexion->query("UPDATE empleos SET titulo='$titulo',empresa='$empresa',ciudad='$ciudad',descripcion='$descripcion',sueldo='$sueldo',archivo='$ruta_guardado' WHERE id_empleo='$id_empleo'");
        if ($sql==1) {
            header("location:crud-empleos.php?confirmacion=2");
        } else {
            header("location:crud-empleos.php?confirmacion=3");
        }
        
    }else{
        header("location:crud-empleos.php?confirmacion=4");
    }
}
}
?>
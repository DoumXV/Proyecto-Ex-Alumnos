<?php
if(!empty($_GET["email"])){
    $email=$_GET["email"];
    $sql=$conexion->query("DELETE FROM alumnos WHERE email_usuario='$email'");
    if ($sql==1) {
        echo '<div class="text-center alert alert-success">Alumno eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el alumno</div>';
    }   
}
?>
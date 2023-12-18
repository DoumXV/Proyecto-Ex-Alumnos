<?php
if(!empty($_GET["email"])){
    $email=$_GET["email"];
    $sql=$conexion->query("DELETE FROM alumnos WHERE email_usuario='$email'");
    if ($sql==1) {
        echo '<div class="text-center alert alert-success">Alumno eliminado correctamente</div>';
        echo '<script>';
        echo 'setTimeout(function(){ window.location.href = "crud-alumnos.php"; }, 500);'; // Redirigir después de 1/2 segundo
        echo '</script>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el alumno</div>';
        echo '<script>';
        echo 'setTimeout(function(){ window.location.href = "crud-alumnos.php"; }, 500);'; // Redirigir después de 1/2 segundo
        echo '</script>';
    }   
}
?>
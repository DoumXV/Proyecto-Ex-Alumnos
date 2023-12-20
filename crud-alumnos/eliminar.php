<?php
//fichero.php para eliminar un alumno 
if(!empty($_GET["email"])){
    $email=$_GET["email"];
    $sql=$conexion->query("DELETE FROM alumnos WHERE email_usuario='$email'");
    if ($sql==1) {
        header("Location:crud-alumnos.php?confirmacion=7");
        
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el alumno</div>';
        echo '<script>';
        echo 'setTimeout(function(){ window.location.href = "crud-alumnos.php"; }, 3000);'; // Redirigir después de 3s
        echo '</script>';
    }   
}
?>
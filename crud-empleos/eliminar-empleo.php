<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }

if(!empty($_GET["id_empleo"])){
    $id_empleo=$_GET["id_empleo"];
    $sql=$conexion->query("DELETE FROM empleos WHERE id_empleo='$id_empleo'");
    if ($sql==1) {
        echo '<div class="text-center alert alert-success">Empleo eliminado correctamente</div>';
        echo '<script>';
        echo 'setTimeout(function(){ window.location.href = "crud-empleos.php"; }, 500);'; // Redirigir después de 1/2 segundos
        echo '</script>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el empleo</div>';
        echo '<script>';
        echo 'setTimeout(function(){ window.location.href = "crud-empleos.php"; }, 500);'; // Redirigir después de 1/2 segundos
        echo '</script>';
    }   
}
?>
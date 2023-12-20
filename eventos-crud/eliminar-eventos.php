<?php
//fichero.php para eliminar eventos 
include '../administrador/conexion.php';
$id=$_GET['id'];
$sql=$conexion->query("DELETE FROM eventos WHERE id_evento=$id");
if($sql){
    header('location:tabla-eventos.php?confirmacion=8');
}else{
    echo '<div class="alert alert-danger">Error al eliminar el evento||</div>';
    echo '<script>';
    echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 3000);'; // Redirigir después de 3s
    echo '</script>';
}

?>
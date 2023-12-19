<?php

include '../administrador/conexion.php';
$sql=$conexion->query("DELETE FROM eventos where final < now();");
if($sql){
    header('location:tabla-eventos.php?confirmacion=9');
}else{
    echo '<div class="alert alert-danger">Error al eliminar los eventos pasados</div>';
    echo '<script>';
    echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 3000);'; // Redirigir después de 3s
    echo '</script>';
}



?>
<?php
if(!empty($_GET["email"])){
    $id_empleo=$_GET["email"];
    $sql=$conexion->query("DELETE FROM usuarios WHERE email_usuario='$id_empleo'");
    if ($sql==1) {
        echo '<div class="text-center alert alert-success">Alumno eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el alumno</div>';
    }   
}
?>
<?php
if(!empty($_GET["id_empleo"])){
    $id_empleo=$_GET["id_empleo"];
    $sql=$conexion->query("DELETE FROM empleos WHERE id_empleo='$id_empleo'");
    if ($sql==1) {
        echo '<div class="text-center alert alert-success">Empleo eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el empleo</div>';
    }   
}
?>
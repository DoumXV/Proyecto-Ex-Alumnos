<?php
if(!empty($_POST["btnmodificar"])){
    if(!empty($_POST["titulo"]) and !empty($_POST["empresa"]) and !empty($_POST["ciudad"]) and !empty($_POST["descripcion"]) and !empty($_POST["sueldo"]) and !empty($_POST["archivo"])){

        $titulo=$_POST["titulo"];
        $empresa=$_POST["empresa"];
        $ciudad=$_POST["ciudad"];
        $descripcion=$_POST["descripcion"];
        $sueldo=$_POST["sueldo"];
        $archivo=$_POST["archivo"];

        $sql=$conexion->query("UPDATE empleos SET titulo='$titulo',empresa='$empresa',ciudad='$ciudad',descripicion='$descripcion',sueldo='$sueldo',archivo='$archivo' WHERE id_empleo='$id_empleo'");
        if ($sql==1) {
            echo '<div class="alert alert-success">Empleo modificado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al modificar</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
?>
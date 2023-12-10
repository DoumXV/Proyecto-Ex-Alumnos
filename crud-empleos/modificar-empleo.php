<?php
if(!empty($_POST["btnmodificar"])){
    if(!empty($_POST["titulo"]) and !empty($_POST["empresa"]) and !empty($_POST["ciudad"]) and !empty($_POST["descripcion"]) and !empty($_POST["sueldo"])){

        $id_empleo=$_POST["id_empleo"];
        $titulo=$_POST["titulo"];
        $empresa=$_POST["empresa"];
        $ciudad=$_POST["ciudad"];
        $descripcion=$_POST["descripcion"];
        $sueldo=$_POST["sueldo"];
        
        #ver como modificar archivos

        $sql=$conexion->query("UPDATE empleos SET titulo='$titulo',empresa='$empresa',ciudad='$ciudad',descripcion='$descripcion',sueldo='$sueldo' WHERE id_empleo='$id_empleo'");
        if ($sql==1) {
            
            header("location:crud-empleos.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar empleo</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
?>
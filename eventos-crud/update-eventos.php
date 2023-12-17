<?php

include '../administrador/conexion.php';
if(isset($_POST['btnmodificar'])){
$id=$_POST['id_evento'];
$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$fecha=$_POST['fecha'];
$hora_inicio=$_POST['inicio'];
$hora_termino=$_POST['final'];
$fecha_inicio=$fecha.' '.$hora_inicio.':00';
$fecha_termino=$fecha.' '.$hora_termino.':00';

$nombre_imagen=$_FILES['img']['name'];
$nombre_tmp=$_FILES['img']['tmp_name'];
$ruta_guardado="../flyer/".$nombre_imagen;

if(!empty($nombre) and !empty($ubicacion) and !empty($fecha) and !empty($hora_inicio) and !empty($hora_termino) and!empty($nombre_imagen)){
    $hi=strtotime($hora_inicio);
    $hf=strtotime($hora_termino);
    if($hi<$hf){
        move_uploaded_file($nombre_tmp,$ruta_guardado);
        $sql=$conexion->query("UPDATE eventos SET nombre_evento='$nombre',ubicacion='$ubicacion',direccion_imagen='$ruta_guardado',inicio='$fecha_inicio',final='$fecha_termino' WHERE id_evento=$id");
        if($sql){
            header("Location:tabla-eventos.php?confirmacion=2");
        }else{
            echo "<div class='alert alert-danger text-center'>No se pudo modificar el evento.</div>";
        }
    }else{
        echo "<div class='alert alert-warning text-center'>La hora de inicio no puede ser mayor a la final.</div>";
    }
}else{
    echo "<div class='alert alert-warning text-center'>Hay algunos campos vacios.</div>";
}
}



?>
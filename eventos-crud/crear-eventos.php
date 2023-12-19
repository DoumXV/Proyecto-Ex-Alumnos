<?php

include '../administrador/conexion.php';
if(isset($_POST['btnregistrar'])){
$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$fecha=$_POST['fecha'];
$hora_inicio=$_POST['inicio'];
$hora_termino=$_POST['final'];
$fecha_inicio=$fecha.' '.$hora_inicio.':00';
$fecha_termino=$fecha.' '.$hora_termino.':00';

//archivo//
$nombre_archivo=$_FILES['archivo']['name'];
$ruta_archivo=$_FILES['archivo']['tmp_name'];
$ruta_guardado="../flyer/".$nombre_archivo;

$fechaActual = date('Y-m-d');


if(!empty($nombre) and !empty($ubicacion) and !empty($fecha) and !empty($hora_inicio) and !empty($hora_termino) and !empty($nombre_archivo)){
    $hi=strtotime($hora_inicio);
    $hf=strtotime($hora_termino);
    if($fecha>=$fechaActual){
        if($hi<$hf){
            move_uploaded_file($ruta_archivo,$ruta_guardado);
            $sql=$conexion->query("INSERT INTO eventos (nombre_evento,ubicacion,direccion_imagen,inicio,final) VALUES ('$nombre','$ubicacion','$ruta_guardado','$fecha_inicio','$fecha_termino')");
            if($sql==1){
                header("Location:tabla-eventos.php?confirmacion=6");
            }else{
                header("Location:tabla-eventos.php?confirmacion=2");
            }
        }else{
            header("Location:tabla-eventos.php?confirmacion=5");
        }
    }else{
        header("Location:tabla-eventos.php?confirmacion=7");
    }
}else{
    header("Location:tabla-eventos.php?confirmacion=4");
}


}


?>
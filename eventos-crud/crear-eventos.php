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



if(!empty($nombre) and !empty($ubicacion) and !empty($fecha) and !empty($hora_inicio) and !empty($hora_termino) and !empty($nombre_archivo)){
    $hi=strtotime($hora_inicio);
    $hf=strtotime($hora_termino);
    $hoy = getdate();
    $fecha_sql = date("Y-m-d H:i:s", mktime($hoy['hours'], $hoy['minutes'], $hoy['seconds'], $hoy['mon'], $hoy['mday'], $hoy['year']));

    if($hi<$hf and $fecha > $fecha_sql){
        move_uploaded_file($ruta_archivo,$ruta_guardado);
        $sql=$conexion->query("INSERT INTO eventos (nombre_evento,ubicacion,direccion_imagen,inicio,final) VALUES ('$nombre','$ubicacion','$ruta_guardado','$fecha_inicio','$fecha_termino')");
        if($sql){
            echo "<div class='alert alert-info text-center'>Evento creado correctamente.</div>";
        }else{
            echo "<div class='alert alert-warning text-center'>No se pudo crear el evento.</div>";
        }
    }else{
        echo "<div class='alert alert-warning text-center'>Fecha u hora inválida.</div>";
    }
}else{
    echo "<div class='alert alert-warning text-center'>No se pueden ingresar campos vacios.</div>";
}
}


?>
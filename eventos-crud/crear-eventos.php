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
#echo $fecha_inicio.'<br>';
#echo $fecha_termino;
if(!empty($nombre) and !empty($ubicacion) and !empty($fecha) and !empty($hora_inicio) and !empty($hora_termino)){
    $hi=strtotime($hora_inicio);
    $hf=strtotime($hora_termino);
    $hoy = getdate();
    $fecha_sql = date("Y-m-d H:i:s", mktime($hoy['hours'], $hoy['minutes'], $hoy['seconds'], $hoy['mon'], $hoy['mday'], $hoy['year']));

    if($hi<$hf and $fecha > $fecha_sql){
        $sql=$conexion->query("INSERT INTO eventos (nombre_evento,ubicacion,inicio,final) VALUES ('$nombre','$ubicacion','$fecha_inicio','$fecha_termino')");
        if($sql){
            echo "<div class='alert alert-info text-center'>Evento creado .</div>";
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
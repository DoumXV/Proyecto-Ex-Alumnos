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
    if($hi<$hf){
        $sql=$conexion->query("INSERT INTO eventos (nombre_evento,ubicacion,inicio,final) VALUES ('$nombre','$ubicacion','$fecha_inicio','$fecha_termino')");
        if($sql){
            echo 'evento creado correctamente';
        }else{
            echo 'no se pudo crear el evento';
        }
    }else{
        echo "la hora de inicio no puede ser mayor a la final";
    }
}else{
    echo "no se pueden ingresar campos vacios";
}
}


?>
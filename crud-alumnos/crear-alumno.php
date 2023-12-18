<?php

include '../administrador/conexion.php';
if(isset($_POST['crear'])){
$nombre=$_POST['nombre1'];
$email=$_POST['email1'];
$fecha=$_POST['fecha1'];
$area=$_POST['area1'];
$desc=$_POST['descripcion1'];
$trabajo=$_POST['trabajo1'];
$contacto=$_POST['contacto1'];

//archivo//
$nombre_img=$_FILES['img1']['name'];
$ruta_img=$_FILES['img1']['tmp_name'];
$ruta_guardado="../img-ex-alumnos/".$nombre_img;

$fechaIngresadaObj = DateTime::createFromFormat('d-m-y', $fecha);
$fechaActualObj = new DateTime();

if (
    !preg_match('/^[a-zA-Z\s]+$/', $nombre)
) {
    echo "<div class='alert alert-warning'>El nombre debe contener solo letras.</div>";
}
else if (
    !preg_match('/^\+56\s?9\s?\d{4}\s?\d{4}$/', $contacto)
) {
    echo "<div class='alert alert-warning'>El formato del contacto es: +56 9 xxxx xxxx (los espacios son opcionales).</div>";
}
else if(
    !preg_match('/^[a-zA-Z\s]+$/', $area)
){
    echo "<div class='alert alert-warning'>El area de interes debe contener solo letras.</div>";
}
else if(
    !preg_match('/^[a-zA-Z\s]+$/', $trabajo)
){
    echo "<div class='alert alert-warning'>El trabajo actual debe contener solo letras.</div>";
}
else if ($fechaIngresadaObj > $fechaActualObj) {
    echo "<div class='alert alert-warning'>La fecha ingresada es posterior a la fecha actual.</div>";
}
else{




if(!empty($nombre) and !empty($email) and !empty($fecha) and !empty($area) and !empty($desc) and !empty($trabajo) and !empty($contacto) and !empty($nombre_img)){
  
    #
        move_uploaded_file($ruta_img,$ruta_guardado);
        $sql=$conexion->query("INSERT INTO alumnos (nombre_usuario,email_usuario,fecha_egreso,trabajo_actual,area_interes,contacto,descripcion,direccion_imagen) VALUES ('$nombre','$email','$fecha','$trabajo','$area','$contacto','$desc','$ruta_guardado')");
        if($sql==1){
            header("Location:crud-alumnos.php?confirmacion=2");
        }else{
            header("Location:crud-alumnos.php?confirmacion=3");
        }
    
}else{
    header("Location:crud-alumnos.php?confirmacion=4");
}
}
}

?>
<?php
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }
?>
<?php
if(!empty($_POST['btnmodificar'])){
$id_evento=$_POST["id_evento"];
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

$fechaActual = date('Y-m-d');

if(!empty($nombre) and !empty($ubicacion) and !empty($fecha) and !empty($hora_inicio) and !empty($hora_termino) and!empty($nombre_imagen)){
    $hi=strtotime($hora_inicio);
    $hf=strtotime($hora_termino);
    if($fecha>$fechaActual){
        if($hi<$hf){
            move_uploaded_file($nombre_tmp,$ruta_guardado);
            $sql=$conexion->query("UPDATE eventos SET nombre_evento='$nombre',ubicacion='$ubicacion',direccion_imagen='$ruta_guardado',inicio='$fecha_inicio',final='$fecha_termino' WHERE id_evento='$id_evento'");
            if($sql==1){
                header("Location:tabla-eventos.php?confirmacion=2");
            }else{
                header("Location:tabla-eventos.php?confirmacion=3");
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
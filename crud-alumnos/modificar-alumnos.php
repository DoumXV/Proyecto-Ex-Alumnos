<?php
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }
?>
<?php
if(!empty($_POST["btnmodificar"])){
    include '../administrador/conexion.php';
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $fecha=$_POST['fecha'];
    $fechaActual = date('d-m-y');
    $area=$_POST['area'];
    $descripcion=$_POST['descripcion'];
    $trabajo=$_POST['trabajo'];
    $contacto=$_POST['contacto'];
    $nombre_imagen=$_FILES['img']['name'];
    $nombre_tmp=$_FILES['img']['tmp_name'];
    $ruta_guardado="../img-ex-alumnos/".$nombre_imagen;

    $fechaIngresadaObj = DateTime::createFromFormat('d-m-y', $fecha);
    $fechaActualObj = DateTime::createFromFormat('d-m-y', $fechaActual);

    if(
        !preg_match('/^[a-zA-Z]+$/', $nombre) ||
        !is_numeric($contacto) ||
        !preg_match('/^[a-zA-Z]+$/', $area) ||
        !preg_match('/^[a-zA-Z]+$/', $trabajo)||
        $fechaIngresadaObj > $fechaActualObj
    ){
        echo '<div class="alert alert-warning text-center">Revisar que: (nombre,area de interes,trabajo actual solo letras),(contacto solo numeros),(fecha ingresada no puede ser superior a la actual)</div>';
    }else{

    if(!empty($nombre) and !empty($email) and !empty($fecha) and !empty($area) and !empty($descripcion) and !empty($trabajo) and !empty($contacto) and !empty($nombre_imagen)){
        move_uploaded_file($nombre_tmp,$ruta_guardado);
        $sql=$conexion->query("UPDATE alumnos SET nombre_usuario='$nombre',email_usuario='$email',fecha_egreso='$fecha',area_interes='$area',descripcion='$descripcion',trabajo_actual='$trabajo',contacto='$contacto', direccion_imagen='$ruta_guardado' WHERE email_usuario='$email'");
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
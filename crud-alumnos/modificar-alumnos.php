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
    $area=$_POST['area'];
    $descripcion=$_POST['descripcion'];
    $trabajo=$_POST['trabajo'];
    $contacto=$_POST['contacto'];

    $nombre_imagen=$_FILES['img']['name'];
    $nombre_tmp=$_FILES['img']['tmp_name'];
    $ruta_guardado="../img-ex-alumnos/".$nombre_imagen;


    $fechaActual = date('Y-m-d');
    $errores = array();

    if (
        !preg_match('/^[a-zA-Z\s]+$/', $nombre)
    ) {
        $errores[] = "El nombre debe contener solo letras.";
    }
    if (
        !preg_match('/^\+56\s?9\s?\d{4}\s?\d{4}$/', $contacto)
    ) {
        $errores[] = "El formato del contacto es: +56 9 xxxx xxxx (los espacios son opcionales).";
    }
    if(
        !preg_match('/^[a-zA-Z\s]+$/', $area)
    ){
        $errores[] = "El área de interés debe contener solo letras.";
    }
    if(
        !preg_match('/^[a-zA-Z\s]+$/', $trabajo)
    ){
        $errores[] = "El trabajo actual debe contener solo letras.";
    }
    if ($fecha > $fechaActual) {
        $errores[] = "La fecha ingresada es posterior a la fecha actual.";
    }

    // Mostrar errores
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<div class='alert alert-warning'>$error</div>";
        }
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
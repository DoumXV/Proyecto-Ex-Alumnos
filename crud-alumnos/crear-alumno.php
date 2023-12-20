<?php
//fichero.php el cual sirve para poder registrar alumnos con todos sus datos validados
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

    $fechaActual = date('Y-m-d');

    $errores = array();

    if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜ,.\s]+$/', $nombre)) {
        $errores[] = "El nombre debe contener solo letras.";
    }

    if (!preg_match('/^\+56\s?9\s?\d{4}\s?\d{4}$/', $contacto)) {
        $errores[] = "El formato del contacto es: +56 9 xxxx xxxx (los espacios son opcionales).";
    }

    if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜ,.\s]+$/', $area)){
        $errores[] = "El área de interés debe contener solo letras.";
    }

    if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚüÜ,.\s]+$/', $trabajo)){
        $errores[] = "El trabajo actual debe contener solo letras.";
    }
    if ($fecha > $fechaActual) {
        $errores[] = "La fecha ingresada es posterior a la fecha actual.";
    }

    // Verificar si el correo electrónico ya existe
    $consulta_email_existente = $conexion->query("SELECT COUNT(*) as total FROM alumnos WHERE email_usuario = '$email'");
    $resultado_email_existente = $consulta_email_existente->fetch_assoc();

    if ($resultado_email_existente['total'] > 0) {
        $errores[] = "El correo electrónico ya existe en la base de datos.";
    }

    // Mostrar errores
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<div class='alert alert-warning'>$error</div>";
        }
    } else {
        // Continuar con la inserción
        if (!empty($nombre) and !empty($email) and !empty($fecha) and !empty($area) and !empty($desc) and !empty($trabajo) and !empty($contacto) and !empty($nombre_img)) {
            move_uploaded_file($ruta_img, $ruta_guardado);
            $sql = $conexion->query("INSERT INTO alumnos (nombre_usuario,email_usuario,fecha_egreso,trabajo_actual,area_interes,contacto,descripcion,direccion_imagen) VALUES ('$nombre','$email','$fecha','$trabajo','$area','$contacto','$desc','$ruta_guardado')");
            
            if ($sql == 1) {
                header("Location:crud-alumnos.php?confirmacion=6");
            } else {
                header("Location:crud-alumnos.php?confirmacion=3");
            }
        } else {
            header("Location:crud-alumnos.php?confirmacion=4");
        }
    }
}
?>

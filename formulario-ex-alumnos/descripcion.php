<?php
//fichero.php para insertar alumnos a la tabla peticiones junto con sus datos validados
include "../administrador/conexion.php";
if(isset($_POST['enviar_peticion'])){
    $nombre=$_POST['nombre_peticion'];
    $email=$_POST['email_peticion'];
    $contacto=$_POST['contacto_peticion'];
    $area=$_POST['area'];
    $trabajo=$_POST['trabajo'];
    $descripcion=$_POST['descripcion_peticion'];
    $nombre_imagen=$_FILES['imagen_peticion']['name'];
    $ruta_imagen=$_FILES['imagen_peticion']['tmp_name'];
    $ruta_guardado="../img-ex-alumnos/".$nombre_imagen;

    $errores = array();
    
    //Validacion de variables//

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

    // Mostrar errores
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<div class='alert alert-warning'>$error</div>";
        }
    } else {
        // Continuar con la inserción de datos
        if (!empty($nombre) and !empty($email) and !empty($contacto) and !empty($descripcion) and !empty($ruta_imagen) and !empty($nombre_imagen)) {        
        $sql2=$conexion->query("SELECT * FROM peticiones WHERE email_peticion='$email'");
        if(mysqli_num_rows($sql2) == 1){
            echo "<div class='alert alert-warning'>Usted ya tiene una solicitud en revision.</div>";
        }else{
            $sql1=$conexion->query("SELECT * FROM alumnos WHERE email_usuario='$email'");
            if(mysqli_num_rows($sql1) > 0){
                move_uploaded_file($ruta_imagen,$ruta_guardado);
                $sql2=$conexion->query("INSERT INTO peticiones (nombre_peticion,email_peticion,contacto_peticion,descripcion_peticion,direccion_imagen,area_interes,trabajo_actual) VALUES ('$nombre','$email','$contacto','$descripcion','$ruta_guardado','$area','$trabajo')");
                if($sql2){
                    echo "<div class='alert alert-info'>Solicitud enviada, su revision esta en proceso.</div>";
                }else{
                    echo "<div class='alert alert-danger'>La solicitud no se pudo enviar, intentelo mas tarde.</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>No se ha encontrado el usuario.</div>";
        }
    }} else {
        echo "<div class='alert alert-warning'>No se pueden ingresar campos vacios.</div>";
    }
}
}

?>
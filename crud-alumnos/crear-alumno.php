<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "proyecto-ex-alumnos";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


if (isset($_POST['crear'])) {
    $nombre = $_POST['nombre1'];
    $email = $_POST['email1'];
    $fecha = $_POST['fecha1'];
    $fechaActual = date('d-m-y');
    $area = $_POST['area1'];
    $desc = $_POST['descripcion1'];
    $trabajo = $_POST['trabajo1'];
    $contacto = $_POST['contacto1'];
    $n_imagen = $_FILES['img1']['name'];
    $tmp_imagen = $_FILES['img1']['tmp_name'];
    $ruta = '../img-ex-alumnos/' . $n_imagen;

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

   

    if (!empty($nombre) and !empty($email) and !empty($fecha) and !empty($area) and !empty($desc) and !empty($trabajo) and !empty($contacto) and !empty($n_imagen)) {
        // Verificar si el correo electrónico ya existe
        $existeCorreo = $conexion->query("SELECT COUNT(*) FROM alumnos WHERE email_usuario = '$email'")->fetch_row()[0];

        if ($existeCorreo > 0) {
            echo '<div class="alert alert-info text-center">El correo electrónico ya existe en la base de datos.</div>';
        } else {
            move_uploaded_file($tmp_imagen, $ruta);
            $query = "INSERT INTO alumnos (nombre_usuario,fecha_egreso,area_interes,trabajo_actual,email_usuario,direccion_imagen,contacto,descripcion) VALUES ('$nombre','$fecha','$area','$trabajo','$email','$ruta','$contacto','$desc')";
            $sql = $conexion->query($query);

            if ($sql) {
                echo '<div class="alert alert-info text-center">Ex-Alumno ingresado al sistema</div>';
            } else {
                echo '<div class="alert alert-danger text-center">Error en la consulta: ' . $conexion->error.'</div>';
            }
        }
    } else {
        echo '<div class="alert alert-danger text-center">Algunos campos están vacíos</div>';
    }
    
}
}

?>

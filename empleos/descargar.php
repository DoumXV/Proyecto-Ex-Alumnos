<?php
//fichero.php para descargar pdfs desde un boton
include "../administrador/conexion.php";


// Obtener el nombre del archivo desde la URL
$id = $_GET['id_empleo'];

// Buscar el archivo en la base de datos
$query = $conexion->query("SELECT * FROM empleos WHERE id_empleo = '$id'");

if ($resultado = $query->fetch_object()) {
    $archivo = $resultado->archivo;
    $ruta_archivo = "../archivo-empleos/" . $archivo;

    // Verificar que el archivo exista en el servidor
    if (file_exists($ruta_archivo)) {
        // Enviar el archivo al navegador
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $archivo . '"');
        readfile($ruta_archivo);
    } else {
        echo "El archivo no existe en el servidor.";
    }
} else {
    echo "El archivo no se encontró en la base de datos.";
}

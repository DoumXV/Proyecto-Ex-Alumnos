<?php
//fichero.php el cual rechaza las peticiones y elimina la peticion de la tabla peticiones
$server="localhost";
$user="root";
$pass="";
$db="proyecto-ex-alumnos";

$conexion = new mysqli($server,$user,$pass,$db);

$id = isset($_GET['id']) ? $_GET['id'] : null;

if(!empty($id)){
    $sql=$conexion->query("SELECT * FROM peticiones WHERE id_peticion=$id");
    if($sql){
    $sql2=$conexion->query("DELETE FROM peticiones WHERE id_peticion=$id");
    if($sql2){
        header("Location:../crud-peticiones.php?confirmacion=4");
    }else{
        header("Location:../crud-peticiones.php?confirmacion=3");
    }
    }
}

?>
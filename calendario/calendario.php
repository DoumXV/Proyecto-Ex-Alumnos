<?php

include("../administrador/conexion.php");

$query="SELECT * FROM eventos WHERE inicio >= now()";

if($sql){
   
}else{
    echo "ha ocurrido un error con la consulta";
}


?>
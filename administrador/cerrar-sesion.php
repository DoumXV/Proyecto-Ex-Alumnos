<?php
//cerrar sesion en la pagina de administrador
session_start();
session_destroy();
header("Location:../home/index.php");

?>
<?php
//validacion de inicio de sesion y obtencion de notificaciones desde los ficheros del CRUD
    session_start();
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }
        $dato="";
        if (isset($_GET["confirmacion"])) {
            // Obtener el valor del parámetro "confirmacion"
            $dato = $_GET["confirmacion"];

        }
?>
<!----------------------------Pagina de CRUD eventos----------------------------->
<!DOCTYPE html>
<html>
<head>
	<title>Panel eventos</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="eventos.css">
</head>
<body>
    <!-------------------------------Barra de navegacion--------------------------------->
	<header>
		<a href="../administrador/cerrar-sesion.php" class="logo"><img class="logo-uda" src="../img/logo-corp-diic-txtblanco.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="../panel-admin/panel-admin.php">Panel</a></li>
                <li><a class="linkeado" href="../administrador/cerrar-sesion.php">Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>
    <!-------------------------------------------------------------------------------------->

    <!-----------------------------Banner Crud eventos-------------------------------------->
    <section class="zona1"></section>
    <!-------------------------------------------------------------------------------------->
    
    <!--------------------------------Alertas con JS---------------------------------------->
    <section class="caja-crud" style=" height: auto;">
    <div class="container my-5 text-center">
        <!--includes--> 
        <?php
        include("../administrador/conexion.php");
        include 'crear-eventos.php';
        include 'update-eventos.php';
        if($dato=="2"){
                        
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'El registro fue actualizado correctamente',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 1800
                });
        });
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 1800);'; // Redirigir después de 3s
            echo '</script>';
        }else if($dato=="3"){
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Algo salio mal, intentelo nuevamente',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 2300
                });});
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 2300);'; // Redirigir después de 3s
            echo '</script>';
        }
        else if($dato=="4"){
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Algunos campos estan vacios.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 2300
                });});
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 2300);'; // Redirigir después de 3s
            echo '</script>';
        }else if($dato=="5"){
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'La hora de inicio no puede ser mayor a la final.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 2300
                });});
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 2300);'; // Redirigir después de 3s
            echo '</script>';
        }else if($dato=="6"){
                        
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Datos ingresados correctamente',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 1800
                });
        });
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 1800);'; // Redirigir después de 3s
            echo '</script>';
        }
        else if($dato=="7"){
                        
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Fecha incorrecta, no puede ser una fecha pasada',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 1800
                });
        });
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 1800);'; // Redirigir después de 3s
            echo '</script>';
        }else if($dato=="8"){
                        
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Datos eliminados correctamente',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 1800
                });
        });
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 1800);'; // Redirigir después de 3s
            echo '</script>';
        }
        else if($dato=="9"){
                        
            $mensaje="
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Eventos pasados eliminados correctamente',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 2000
                });
        });
            </script>";
            echo $mensaje;
            echo '<script>';
            echo 'setTimeout(function(){ window.location.href = "tabla-eventos.php"; }, 2000);'; // Redirigir después de 3s
            echo '</script>';
        }
        ?>  
        <!-------------------------------------------------------------------------------------->

        <!--------------------------------------Modal REGISTRO---------------------------------->
        <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="#registro">Registro de eventos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="" method="POST" enctype="multipart/form-data"> 

                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del evento" >
                    <label for="ubicacion" class="form-label">Ubicacion</label>
                    <select class="form-select" aria-label="Default select example" name="ubicacion" id="ubicacion">
                    <option value="Diic-1">Diic-1</option>
                    <option value="Diic-2">Diic-2</option>
                    <option value="Diic-3">Diic-3</option>
                    <option value="Lab-Melquiades">Lab Melquiades</option>
                    <option value="Lab-Olimpo">Lab Olimpo</option>
                    </select>
                    <label for="ho1" class="form-label">Fecha de evento</label>
                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" class="form-control mb-3" id="ho1">
                    <label for="ho1" class="form-label">Hora de inicio</label>
                    <input type="time" name="inicio"  class="form-control mb-3" id="ho1">
                    <label for="ho2" class="form-label">Hora de termino</label>
                    <input type="time" name="final"  class="form-control mb-3" id="ho2">
                    <label for="archivo" class="form-label">Archivo</label>
                    <input class="form-control mb-3" type="file" name="archivo" accept="image/*,.pdf">                    
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-dark me-5" name="btnregistrar" value="ok">Registrar eventos</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------->

    <!---------------------------Filtros de busquedas--------------------------------------->
    <div class="tabla-filtros text-center">
        <h2 class="titulos mx-auto">Busquedas</h2>
        <div class="row m-3">
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarId" placeholder="ID" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarNombre" placeholder="Nombre" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarUbicacion" placeholder="Ubicacion" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarInicio" placeholder="Fecha de Inicio" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarFin" placeholder="Fecha de Termino" onkeyup="buscarTabla()" />
            </div>
        </div>
        
    </div>


     <!-- Button trigger modal -->
     <div class="boton-registrar d-flex align-content-center justify-content-center  my-4">
            <button type="button" class="btn me-5" style="background-color:#364c59; color:#fff; border: 2px solid black;" data-bs-toggle="modal" data-bs-target="#registro">Registrar Eventos
            </button>
            <a href="eliminar-caducados.php" class="btn btn-danger" style="border: 2px solid black;">Borrar eventos pasados</a>
    </div>    
    <!-------------------------------------------------------------------------------------->

    <!-----------------------------Tabla empleos-------------------------------------------->
    <div class="container mb-5">
                <table class="table bg-white" id="tablaEventos">
                    <thead class="table-dark table-striped text-center">
                        <tr>
                            <th class="p-3" scope="col">ID</th>
                            <th class="p-3" scope="col">Nombre</th>
                            <th class="p-3" scope="col">Ubicacion</th>
                            <th class="p-3" scope="col">Imagen</th>
                            <th class="p-3" scope="col">Fecha inicio</th>
                            <th class="p-3" scope="col">Fecha fin</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql=$conexion->query("SELECT * FROM eventos");
                        while($datos=$sql->fetch_object()){
                        ?>
                        <?php 
                        include("update-eventos.php");
                        $fechaInicio = new DateTime($datos->inicio);
                        $fechaFin = new DateTime($datos->final);

                        $fechaInicioSoloFecha = $fechaInicio->format('Y-m-d');

                        $horasFechaInicio = $fechaInicio->format('H:i:s');
                        $horasFechaFin = $fechaFin->format('H:i:s');
                        ?>
                        
                        
                        <tr class="text-center">
                            <td><?= $datos->id_evento ?> </td>
                            <td><?= $datos->nombre_evento ?> </td>
                            <td><?= $datos->ubicacion ?></td>
                            <td><img class="img-thumbnail" src="<?= $datos->direccion_imagen ?>" alt="" style="max-width:200px; max-height: 200px"></td>
                            <td><?= $datos->inicio ?></td>
                            <td><?= $datos->final ?></td>
                            <th><button type="button" class="btn btn-primary" data-bs-toggle="modal" style="background-color:#364c59; color:#fff; border:1px solid black;" name="btnmodificar" data-bs-target="#editar<?=$datos->id_evento?>">Editar</button></th>
                            <td><a href="eliminar-eventos.php?id=<?php echo $datos->id_evento ?>" onclick="return eliminar()" class="btn btn-danger">Eliminar</a></td>
                        </tr>

                        <!---------------------Modal  Editar------------------->
                        <div class="modal fade" id="editar<?=$datos->id_evento?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <section class="modificar d-flex flex-column align-items-center justify-content-center">
                                <div class="container">
                                    
                                <form class="formulario-modificar" method="POST" enctype="multipart/form-data">
                                    
                                        
                                        <label for="nombre" class="form-label text-start">Nombre Evento</label>
                                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del evento" value="<?php echo $datos->nombre_evento ?>">
                                        <label for="ubicacion" class="form-label">Ubicacion</label>
                                        <select class="form-select" aria-label="Default select example" name="ubicacion" id="ubicacion">
                                        <option value="<?php echo $datos->ubicacion ?>"><?php echo $datos->ubicacion ?></option>
                                        <option value="Diic-1">Diic-1</option>
                                        <option value="Diic-2">Diic-2</option>
                                        <option value="Diic-3">Diic-3</option>
                                        <option value="Lab-Melquiades">Lab Melquiades</option>
                                        <option value="Lab-Olimpo">Lab Olimpo</option>
                                        </select>
                                        <label for="ho1" class="form-label">Fecha de evento</label>
                                        <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" id="ho1" value="<?php echo $fechaInicioSoloFecha ?>">
                                        <label for="ho1" class="form-label">Hora de inicio</label>
                                        <input type="time" name="inicio"  class="form-control mb-3" id="ho1" value="<?php echo $horasFechaInicio ?>">
                                        <label for="ho2" class="form-label">Hora de termino</label>
                                        <input type="time" name="final"  class="form-control mb-3" id="ho2" value="<?php echo $horasFechaFin ?>">
                                        <label for="titulo" class="form-label">Imagen</label>
                                        <input type="file" class="form-control mb-3" name="img" accept="image/*,.jpg">
                                        <input type="hidden" name="id_evento" value="<?=$datos->id_evento?>">
                                        <div>
                                            <p>
                                                Dirección del archivo: <?php echo $datos->direccion_imagen ?>
                                            </p>
                                        </div>
                                        

                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="submit" class="btn btn-secondary me-3" style="background-color:#364c59; color:#fff;" name="btnmodificar" value="ok">Confirmar</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>  
                                        </div>
                                </form>
                                </div>
                                </section>
                            </div>
                            </div>
                        </div>
                        </div>
                         <?php 
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </section>
    <!-------------------------------------------------------------------------------------->

    <!------------------------------------Footer-------------------------------------------->
    <footer>
        <div class="contenedor-footer">
            <div class="footer-logo">
                <img src="../img/logo-udacorp-txtblanco.png" alt="">
                <ul>
                  <li class="mt-1"><a href="">Ubícanos en
                    Copiapó, Av. Copayapu 485</a></li>
                  <li class="mt-1"><a href="">(52) 2 255555</a></li>
                  <li class="mt-1"><a href="">anakarina.pena@uda.cl</a></li>
              </ul>
            </div>
            <div class="acerca mx-auto">
                <h4 class="mt-2">Links</h4>
                <ul>
                    <li class="mt-4"><a href="https://diicc.uda.cl/academicos.php">Académicos</a></li>
                    <li class="mt-1"><a href="https://diicc.uda.cl/noticias.php">Noticias</a></li>
                    <li class="mt-1"><a href="https://www.moodle.uda.cl/">Moodle</a></li>
                    <li class="mt-1"><a href="https://www.instagram.com/diicc_uda/">Instagram</a></li>
                </ul>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019.5733182946361!2d-70.35256776105918!3d-27.35752684276538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969803ec1a19a399%3A0x3cd60b166021c427!2sDIICC%20UDA!5e0!3m2!1ses-419!2scl!4v1700927546943!5m2!1ses-419!2scl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>    
        <div class="copyright">
          <p>&copy;2023 Creado por alumnos de Ingeniería Civil en Computación e Informática 2023</p>
      </div>
    </footer>
    <!-------------------------------------------------------------------------------------->

    <!------------------------Script para doble confirmacion-------------------------------->
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de eliminar el registro");
            return respuesta
        }
    </script>
    <!-------------------------------------------------------------------------------------->

    <!-------------------Script para el scroll de la barra de navegacion-------------------->
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
    <!-------------------------------------------------------------------------------------->

    <!---------------------------Script para los filtros------------------------------------>
    <script src="../js/busquedas-eventos.js"></script>
    <!-------------------------------------------------------------------------------------->

    <!------------------------Script para el bootstrap-------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------->
</body>
</html>
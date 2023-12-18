<?php
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
<!DOCTYPE html>
<html>
<head>
	<title>Ex alumnos UDA</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="crud-empleos.css">
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de eliminar el registro");
            return respuesta
        }
    </script>
	<header>
		<a href="../administrador/cerrar-sesion.php" class="logo"><img class="logo-uda" src="../img/logo-corp-diic-txtblanco.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="../panel-admin/panel-admin.php">Panel</a></li>
                <li><a class="linkeado" href="../administrador/cerrar-sesion.php">Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
    </section>

    <section class="caja-crud" style=" height: auto;">
    <div class="container my-5">
        
        <?php 
        include("../administrador/conexion.php");
        include("registro-empleos.php");
        include("modificar-empleo.php");
        include("eliminar-empleo.php");

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
        }else if($dato=="5"){
            
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
        }
        ?>
        <!-- Modal REGISTRO -->
        <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de empleos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="" method="POST" enctype="multipart/form-data"> 

                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo del empleo">
                    <input type="text" class="form-control mb-3" name="empresa" placeholder="Empresa">
                    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                    <textarea class="form-control mb-3" name="descripcion" rows="3" placeholder="Descripcion del empleo"></textarea>
                    <input type="text" class="form-control mb-3" name="sueldo" placeholder="Sueldo">
                    <input class="form-control mb-3" type="file" name="archivo" accept="image/*,.pdf">
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-dark me-5" name="btnregistrar" value="ok">Registrar empleo</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
        </div>
    </div>

    


    <div class="tabla-filtros text-center">
        <h2 class="titulos mx-auto">Busquedas</h2>
        <div class="row">
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarId" placeholder="ID" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarTitulo" placeholder="Titulo" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarEmpresa" placeholder="Empresa" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarCiudad" placeholder="Ciudad" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarSueldo" placeholder="Sueldo" onkeyup="buscarTabla()" />
            </div>
        </div>
    </div>  

    <!-- Button trigger modal -->
    <div class="boton-registrar d-flex align-content-center justify-content-end mt-4">
            <button type="button" class="btn btn-primary" style="margin-right:45%; background-color:#364c59; color:#fff; border: 2px solid black;" data-bs-toggle="modal" data-bs-target="#registro">Registrar Empleo
            </button>
            
    </div>


    <div class="container mt-3 mb-5">        
            <div class="">
                <table class="table bg-white" id="tablaEmpleos">
                    <thead class="table-dark table-striped text-center">
                        <tr>
                            <th class="p-3" scope="col">ID</th>
                            <th class="p-3" scope="col">Titulo</th>
                            <th class="p-3" scope="col">Empresa</th>
                            <th class="p-3" scope="col">Ciudad</th>
                            <th class="p-3" scope="col">Descripcion</th>
                            <th class="p-3" scope="col">Sueldo</th>
                            <th class="p-3" scope="col">Archivo PDF</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql=$conexion->query("SELECT * FROM empleos");
                        while($datos=$sql->fetch_object()){
                        ?>
                        <?php 
                            include("modificar-empleo.php");
                        ?>
                        <tr class="text-center">
                            <td><?= $datos->id_empleo ?> </td>
                            <td><?= $datos->titulo?> </td>
                            <td><?= $datos->empresa ?></td>
                            <td><?= $datos->ciudad?></td>
                            <td ><?= $datos->descripcion?></td>
                            <td><?= $datos->sueldo?></td>
                            <td><?= $datos->archivo ?></td>
                            <th><button type="button" class="btn btn-primary" data-bs-toggle="modal" style="background-color:#364c59; color:#fff; border:1px solid black;" name="btnmodificar" data-bs-target="#editar<?=$datos->id_empleo?>">Editar</button></th>
                            <th><a onclick="return eliminar()" href="crud-empleos.php?id_empleo=<?=$datos->id_empleo?>" class="btn btn-danger">Eliminar</a></th> 
                        </tr>
                        
                        <!-- Modal  Editar-->
                        <div class="modal fade" id="editar<?=$datos->id_empleo?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <section class="modificar d-flex flex-column align-items-center justify-content-center">
                                <div class="">
                                    <form method="POST" enctype="multipart/form-data">
                                        <label for="titulo" class="form-label">Titulo Empleo</label>
                                        <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo del empleo" value="<?=$datos->titulo?>">
                                        <label for="empresa" class="form-label">Empresa</label>
                                        <input type="text" class="form-control mb-3" name="empresa" placeholder="Nombre de la empresa" value="<?=$datos->empresa?>">
                                        <label for="ciudad" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad"  value="<?=$datos->ciudad?>">
                                        <label for="descripcion" class="form-label">Descripcion</label>
                                        <textarea class="form-control mb-3" name="descripcion" rows="3" placeholder="Descripicion del empleo"><?=$datos->descripcion?></textarea>
                                        <label for="sueldo" class="form-label">Sueldo</label>
                                        <input type="text" class="form-control mb-3" name="sueldo" placeholder="Sueldo"  value="<?=$datos->sueldo?>">
                                        <label for="archivo" class="form-label">Archivo</label>
                                        <input class="form-control mb-3" type="file" name="archivo" value="<?=$datos->archivo?>" accept="image/*,.pdf">
                                        <input type="hidden" name="id_empleo" value="<?=$datos->id_empleo?>">
                                        <div>
                                            <p>
                                                Dirección del archivo: <?php echo $datos->archivo ?>
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-center">
                                            <button type="submit" class="btn m-3" style="background-color:#364c59; color:#fff;" name="btnmodificar" value="ok">Confirmar</button>
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
    </section>
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
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
    <script src="../js/busquedas-empleos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
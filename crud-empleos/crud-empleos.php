<?php
    session_start();
    if(empty($_SESSION['email_admin'])){
        header("Location:../log-admin/admin.php"); 
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ex alumnos UDA</title>
</head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="crud-empleos.css">
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de eliminar el registro");
            return respuesta
        }
    </script>
	<header>
		<a href="../home/index.php" class="logo"><img class="logo-uda" src="../img/logo-udacorp-lineablanca.png" alt="Logo UDA"></a>
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
        
        ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <h2 class="mx-auto">Busquedas</h2>
        <div class="row">
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarId" placeholder="Id" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarTitulo" placeholder="Titulo" onkeyup="buscarTabla()" />
            </div>
            <div class="col-4 g-4">
                <input type="text" class="form-control text-center" id="inputBuscarEmpresa" placeholder="Empresa" onkeyup="buscarTabla()" />
            </div>
            <div class="col g-4">
                <input type="text" class="form-control text-center" id="inputBuscarCiudad" placeholder="Ciudad" onkeyup="buscarTabla()" />
            </div>
            <div class="col g-4">
                <input type="text" class="form-control text-center" id="inputBuscarSueldo" placeholder="Sueldo" onkeyup="buscarTabla()" />
            </div>
        </div>
    </div>  

    <!-- Button trigger modal -->
    <div class="boton-registrar d-flex align-content-center ">
            <button type="button" class="btn-registrar container-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrar Empleo
            </button>
            
    </div>

    <div class="container mt-5">        
            <div class="">
                <table class="table bg-white" id="tablaEmpleos">
                    <thead class="table-dark table-striped text-center">
                        <tr>
                            <th scope="col">Id empleo</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Sueldo</th>
                            <th scope="col">Archivo PDF</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../administrador/conexion.php");
                        $sql=$conexion->query("SELECT * FROM empleos");
                        while($datos=$sql->fetch_object()){
                        ?>
                        <tr class="text-center">
                            <td><?= $datos->id_empleo ?> </td>
                            <td><?= $datos->titulo?> </td>
                            <td><?= $datos->empresa ?></td>
                            <td><?= $datos->ciudad?></td>
                            <td><?= $datos->descripcion?></td>
                            <td><?= $datos->sueldo?></td>
                            <td><?= $datos->archivo ?></td>
                            <th><a href="pagina-modificar.php?id_empleo=<?=$datos->id_empleo?>" class="btn btn-info">Editar</a></th>
                            <th><a onclick="return eliminar()" href="crud-empleos.php?id_empleo=<?=$datos->id_empleo?>" class="btn btn-danger">Eliminar</a></th> 
                        </tr>
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
                <img src="../img/logo-udacorp-lineablanca.png" alt="">
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
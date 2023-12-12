<!DOCTYPE html>
<html>
<head>
	<title>Ex alumnos UDA</title>
</head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="eventos.css">
<body>
	<header>
		<a href="../home/index.php" class="logo"><img class="logo-uda" src="../img/logo-udacorp-lineablanca.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="../panel-admin/panel-admin.php">Inicio</a></li>
				<li><a class="linkeado" href="">Eventos</a></li>
                <li><a class="linkeado" href="#">Alumnos</a></li>
                <li><a class="linkeado" href="crud-empleos.php">Empleos</a></li>
				<li><a class="linkeado" href="#">Peticiones</a></li>
                <li><a class="linkeado" href="../administrador/cerrar-sesion.php">Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
    </section>

    <section class="caja-crud" style=" height: auto;">
    <div class="container my-5">
        <!-- Button trigger modal -->
        <div class="d-flex align-content-center justify-content-center">
            <button type="button" class="btn" style="background-color:#364c59; color:#fff;" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrar Eventos
            </button>
        </div>
       
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de eventos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="" method="POST" enctype="multipart/form-data"> 

                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre del evento" >
                    <input type="text" class="form-control mb-3" name="ubicacion" placeholder="Ubicacion">
                    <label for="ho1" class="form-label">Fecha de evento</label>
                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" class="form-control mb-3" id="ho1">
                    <label for="ho1" class="form-label">Hora de inicio</label>
                    <input type="time" name="inicio"  class="form-control mb-3" id="ho1">
                    <label for="ho2" class="form-label">Hora de termino</label>
                    <input type="time" name="final"  class="form-control mb-3" id="ho2">
                    
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Registrar eventos</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>

    </div>
    <div class="container mt-5">    
        <!--includes--> 
        <?php
        include 'crear-eventos.php';
        ?>   
            <div class="">
                <table class="table bg-white">
                    <thead class="table-dark table-striped text-center">
                        <tr>
                            <th>Id evento</th>
                            <th>Nombre</th>
                            <th>Ubicacion</th>
                            <th>Fecha inicio</th>
                            <th>Fecha fin</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../administrador/conexion.php");
                        $sql=$conexion->query("SELECT * FROM eventos");
                        while($datos=$sql->fetch_object()){
                        ?>
                        <tr class="text-center">
                            <td><?= $datos->id_evento ?> </td>
                            <td><?= $datos->nombre_evento ?> </td>
                            <td><?= $datos->ubicacion ?></td>
                            <td><?= $datos->inicio ?></td>
                            <td><?= $datos->final ?></td>
                            <td></td>
                            <td><a href="eliminar-eventos.php?id=<?php echo $datos->id_evento ?>" onclick="return eliminar()" class="btn btn-danger">Eliminar</a></td>
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
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de eliminar el registro");
            return respuesta
        }
    </script>
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
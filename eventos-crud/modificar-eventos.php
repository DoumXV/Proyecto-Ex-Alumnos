
<?php

include '../administrador/conexion.php';
$id=$_GET['id'];
$sql=$conexion->query("SELECT * FROM eventos WHERE id_evento=$id");
$datos=$sql->fetch_object();
//aplicando el formato
$fechaInicio = new DateTime($datos->inicio);
$fechaFinal = new DateTime($datos->final);
//obteniendo las partes
$fecha = $fechaInicio->format('Y-m-d');
$hora_inicio = $fechaInicio->format('H:i:s');
$hora_final = $fechaFinal->format('H:i:s');
?>
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
				<li><a class="linkeado" href="../panel-admin/panel-admin.php">Panel</a></li>
                <li><a class="linkeado" href="../administrador/cerrar-sesion.php">Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
    </section>

    <section class="caja-crud" style=" height: auto;">

    <div class="formulario-modificar container my-5">
        
    <form class="" method="POST" enctype="multipart/form-data">
        
            <?php include 'update-eventos.php'; ?>
            <input type="hidden" name="id_evento" value="<?php echo $id ?>">
            <label for="nombre" class="form-label">Nombre Evento</label>
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
            <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" class="form-control mb-3" id="ho1" value="<?php echo $fecha ?>">
            <label for="ho1" class="form-label">Hora de inicio</label>
            <input type="time" name="inicio"  class="form-control mb-3" id="ho1" value="<?php echo $hora_inicio ?>">
            <label for="ho2" class="form-label">Hora de termino</label>
            <input type="time" name="final"  class="form-control mb-3" id="ho2" value="<?php echo $hora_final ?>">
            <label for="titulo" class="form-label">Imagen</label>
            <input type="file" class="form-control mb-3" name="img" accept="image/*,.jpg">
            <div>
                <p>
                    Dirección del archivo: <?php echo $datos->direccion_imagen ?>
                </p>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-dark" name="btnmodificar" value="ok">Modificar evento</button>
            </div>
    </form>

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
<?php
include("alumnos.php");
$query = $conexion->query("SELECT * FROM usuarios WHERE TRIM(contacto) <> '' AND TRIM(descripcion) <> '' AND TRIM(direccion_imagen) <> '';");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ex alumnos UDA</title>
</head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="galeria.css">
<body>
	<header>
		<a href="../home/index.php" class="logo"><img class="logo-uda" src="../img/logo-corp-diic-txtblanco.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="../home/index.php">Inicio</a></li>
				<li><a class="linkeado" href="galeria.html">Galeria</a></li>
                <li><a class="linkeado" href="#">Empleos</a></li>
				<li><a class="linkeado" href="#">Administrador</a></li>
			</ul>
		</nav>
	</header>
    <section class="zona1">
      <div class="header-difuminado mx-auto"></div>

      <!--<div class="h-75 d-flex flex-column align-items-center justify-content-center">
        <h1 class="texto">Departamento de Ingenieria</h1>
        <p class="texto">Pagina de Ex-alumnos</p>
      </div>-->

    </section>

    <section class="galeria h-auto">
        <h2 class="titulos container-fluid text-center">Galeria de Ex-Alumnos</h2>
        <div class="tarjetas row ">
          <?php while($registros=$query->fetch_object()){ ?>
            <!-- Modal -->
            <?php
              $modalID = "modal_" . preg_replace("/[^a-zA-Z0-9]/", "_", $registros->email_usuario);
            ?>
            <div class="modal fade" id="<?php echo $modalID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">                
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $registros->nombre_usuario; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p><?php echo $registros->descripcion; ?></p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                </div>
            </div>

            <?php
                  // Convertir la cadena de fecha a un objeto DateTime
                  $fechaObj = new DateTime($registros->fecha_egreso);

                  // Obtener el día, mes y hora
                  $year = $fechaObj->format('Y');
                  $dia = $fechaObj->format('d');
                  $mes = $fechaObj->format('m');
                  $hora = $fechaObj->format('H:i');
                ?>

            <!-- Tarjetas -->
            <div class="col-xxl-6 g-5 col-xl-6 col-lg-6 col-md-7">
              <div class="flip-card mx-auto">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                  <?php
                    // Verificar si la imagen principal está disponible
                    if (file_exists($registros->direccion_imagen)) {
                        // Si está disponible, muestra la imagen principal
                        $imagenSrc = $registros->direccion_imagen;
                    } else {
                        // Si no está disponible, muestra la imagen predeterminada
                        $imagenSrc = "../img-ex-alumnos/usuario1.png";
                    }
                    ?>
                    <img src="<?php echo $imagenSrc; ?>" alt="../img-ex-alumnos/usuario.png" style="width:350px;height:350px;">
                    <h1><?php echo $registros->nombre_usuario; ?></h1>
                  </div>
                  <div class="flip-card-back d-flex flex-column align-content-center align-items-center justify-content-center">
                    <h1><?php echo $registros->nombre_usuario; ?></h1>
                    <p><?php echo $registros->contacto; ?></p>
                    <p><?php echo $registros->area_interes; ?></p>
                    <p>Año Egreso <?php echo $year; ?></p>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#<?php echo $modalID; ?>">
                      Mas informacion
                    </button>

                  </div>
                </div>
              </div>
            </div>
              <?php } ?>
              <!--tarjetas-->
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
                    <li class="mt-4"><a href="">Académicos</a></li>
                    <li class="mt-1"><a href="">Noticias</a></li>
                    <li class="mt-1"><a href="">Moodle</a></li>
                    <li class="mt-1"><a href="">Instagram</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
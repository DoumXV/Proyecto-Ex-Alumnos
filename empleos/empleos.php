<?php
include("consulta.php");
$query = $conexion->query("SELECT * FROM empleos;");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ex alumnos UDA</title>
</head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="empleos.css">
<body>
	<header>
		<a href="../home/index.php" class="logo"><img class="logo-uda" src="../img/logo-corp-diic-txtblanco.png" alt="Logo UDA"></a>
		<nav>
			<ul>
				<li><a class="linkeado" href="../home/index.php">Inicio</a></li>
				<li><a class="linkeado" href="../galeria/galeria.php">Galeria</a></li>
                <li><a class="linkeado" href="empleos.php">Empleos</a></li>
				<li><a class="linkeado" href="../administrador/inicio-sesion.php">Administrador</a></li>
			</ul>
		</nav>
	</header>

  <section class="zona1"><div class="header-difuminado mx-auto"></div></section>

  <section class="empleos h-auto">
      <h2 class="titulos container-fluid text-center">Empleos</h2>
      <div class="container tarjetas row mx-auto" >
      <?php while ($resultado = $query->fetch_object()) { ?>
            <!-- Tarjetas -->
            <div class="col-xxl-6 g-5 col-xl-6 col-lg-6 col-md-6">
                <div class="box card mx-auto mb-3" style="max-width: 500px; max-height: 600px;">
                    <div class="row g-0">
                        <div class="col-md-10 mx-auto">
                            <div class="card-body">
                                <div class="titulo-tarjeta d-flex">
                                  <h5 class="card-title"><?php echo $resultado->titulo; ?></h5>
                                </div>
                                <p class="card-text"><medium class="text-muted"><?php echo $resultado->empresa; ?></medium></p>
                                <p class="card-text"><?php echo $resultado->descripcion; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $resultado->ciudad; ?></small></p>
                                <div class="sueldo d-flex justify-content-between">
                                  <div class=" d-flex flex-column">
                                    <div class=" d-flex">
                                      <img class="w-25" src="../img/icons8-banknotes-50.png" alt="money">
                                      <p class="card-text ms-1">Sueldo</p>
                                    </div>
                                    <h5 class="card-title"><?php echo $resultado->sueldo; ?></h5>
                                  </div>
                                  <a class="btn btn-dark text-center align-self-center py-2" href="descargar.php?id_empleo=<?php echo $resultado->id_empleo;?>">Postular</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
      <?php } ?>
  </section>

  <section class="mentoria mt-5">
    <h2 class="titulos container-fluid text-center pb-0 mb-0">Oportunidades de Mentoría</h2>
    <div class="banner">
      <p>Explora las oportunidades de mentoría disponibles para ex-alumnos del Departamento de Informática.</p>
    </div>

    <!-- Lista de Oportunidades de Mentoría -->
    <ul>
        <li>
            <h3>Mentoría en Desarrollo de Software</h3>
            <p>Descripción breve de la oportunidad de mentoría en desarrollo de software. Incluye requisitos y beneficios.</p>
            <p>Fecha de Inicio: [Fecha]</p>
            <p>Contacto: [Correo Electrónico]</p>
        </li>
        <li>
            <h3>Mentoría en Seguridad Informática</h3>
            <p>Información sobre la oportunidad de mentoría en el campo de seguridad informática. Detalles sobre el programa y cómo aplicar.</p>
            <p>Fecha de Inicio: [Fecha]</p>
            <p>Contacto: [Correo Electrónico]</p>
        </li>
        <!-- Agrega más oportunidades de mentoría según sea necesario -->
    </ul>

    <!-- Formulario para Agregar Oportunidades de Mentoría (solo si es aplicable) -->
    <h3>¿Tienes una oportunidad de mentoría para compartir?</h3>
    <form action="procesar_formulario.php" method="post">
        <!-- Campos del formulario: título, descripción, fecha de inicio, contacto, etc. -->
        <!-- Agrega aquí tus campos de formulario según tus necesidades -->
        <button type="submit">Enviar Oportunidad</button>
    </form>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>